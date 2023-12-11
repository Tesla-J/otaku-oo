<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);

            if($password1 != $password2){
                echo "Passwords don't match";
                return;
            }

            require_once(__DIR__ . "/../model/dto/UserDTO.php");
            require_once(__DIR__ . "/../model/dao/TmpDAO.php");
            
            $dao = TmpDAO::getInstance();
            $newUser = new UserDTO($dao->getCurrentUserId()+1, $username, $email, md5($password1));
            $dao->addUser($newUser);

            header("location: signin");
        }
    ?>

<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>sign up</h1>
    <form action="signup" method="post">

        <label for="username">Username:</label>
        <input id="username" name="username" required/>
        <br>
        <label for="email">E-mail:</label>
        <input id="email" name="email" type="email" />
        <br>
        <label for="password1">Password</label>
        <input id="password1" name="password1" type="password" required/>
        <br>
        <label for="password2">Confirm password:</label>
        <input id="password2" name="password2" type="password" required/>
        <br>
        <input type="submit" value="Sign up"/>
        <input type="reset" value="Clear" />
        <br>
        <p>Already have an account? <a href="signin">Sign in</a></p>
    </form>
</body>

</html>