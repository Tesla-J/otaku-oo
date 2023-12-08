<?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);

            require_once(__DIR__ . "/../model/dto/UserDTO.php");
            require_once(__DIR__ . "/../model/dao/TmpDAO.php");
            
            $dao = TmpDAO::getInstance();
            $users = $dao->getUsers();

            foreach($users as $id => $user){
                if($user->getUsername() == $username && $user->getPasswordHash() == md5($password))
                    header("location: home.php");
                echo "Wrong login details!";
            }

            var_dump($users);//header("location: signin.php");
        }
    ?>

<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
</head>

<body>
    
    <h1>sign in</h1>
    <form action="signin.php" method="post">

        <label for="username">Username:</label>
        <input id="username" name="username" required/>
        <br>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required/>
        <br>
        <input type="submit" value="Sign in"/>
        <input type="reset" value="Clear" />
        <br>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</body>

</html>