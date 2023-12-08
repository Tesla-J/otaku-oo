<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);

            if($password1 != $password2){
                echo "Passwords don't match";
                return;
            }
            
            
        }
    ?>


    <h1>sign up</h1>
    <form action="signup.php" method="post">

        <input id="username" name="username" required/>
        <input id="password1" name="password1" type="password" required/>
        <input id="password2" name="password2" type="password" required/>
        <br>
        <input type="submit" value="Sign up"/>
        <input type="reset" value="Clear" />
    </form>
</body>

</html>