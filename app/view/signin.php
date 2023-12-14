<html>
<head>
    <title>Otaku king - sign in</title>
    <meta charset="utf-8" />
    <meta name="description" content="A forum from otakus to otakus - Join us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/support/css/global.css" />
    <link rel="stylesheet" href="/view/support/css/landing_page.css" />
    <link rel="stylesheet" href="/view/support/css/form.css" />
</head>

<body>
    <section class="wrapper">
        <h1>Sign in</h1>
        <form class="form" action="signin" method="post">
            <div class="field-area">
                <input class="field" id="username" name="username" placeholder="" autocomplete="off" required/>
                <label class="label" for="username">Username</label>
            </div>
            <br>
            <div class="field-area">
                <input class="field" id="password" name="password" placeholder="" type="password" required/>
                <label class="label" for="password">Password</label>
            </div>
            <br>
            <input class="button" type="submit" value="Sign in"/>
            <br>
            <input class="button" type="reset" value="Clear" />
            <br>
            <p>Don't have an account? <a class="raw-link" href="signup">Sign up</a></p>
        </form>
    </section>
</body>

</html>