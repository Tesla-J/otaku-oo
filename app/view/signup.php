<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
    <meta name="description" content="A forum from otakus to otakus - Join us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/support/css/global.css" />
    <link rel="stylesheet" href="/view/support/css/landing_page.css" />
    <link rel="stylesheet" href="/view/support/css/form.css" />
</head>

<body>
    <section class="wrapper">
        <h1>Sign up</h1>
        <form class="form" action="signup" method="post">
            <div class="field-area">
                <input class="field" id="username" name="username" placeholder="" required/>
                <label class="label" for="username">Username</label>
            </div>
            <br>
            <div class="field-area">
                <input class="field" id="email" name="email" type="email" placeholder="" required />
                <label class="label" for="email">E-mail:</label>
            </div>
            <br>
            <div class="field-area">
                <input class="field" id="password1" name="password1" type="password" placeholder="" required/>
                <label class="label" for="password1">Password</label>
            </div>
            <br>
            <div class="field-area">
                <input class="field" id="password2" name="password2" type="password" placeholder="" required/>
                <label class="label" for="password2">Confirm password</label>
            </div>
            <br>
            <input class="button" type="submit" value="Sign up"/>
            <br>
            <input class="button" type="reset" value="Clear" />
            <br>
            <p>Already have an account? <a class="raw-link" href="signin">Sign in</a></p>
        </form>
    </section>
</body>

</html>