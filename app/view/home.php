<!DOCTYPE html>
<html>
<head>
    <title>Otaku king - Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/support/css/landing_page.css" />
    <link rel="stylesheet" href="view/support/css/home.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="view/support/css/font-awesome/css/font-awesome.min.css" />
</head>

<body>
    <!-- Dialog box to post new topics -->
    <section class="dialog-blur">
        <dialog id="new_post_dialog">
            <div>
                <button id="close_button">X</button>
            </div>
            <form action="/post/new" method="post">
                <label for="title">Title:</label>
                <input id="title" name="title" required/>
                <br>
                <label for="content">Content:</label>
                <textarea id="content" name="content" type="email" required></textarea>
                <br>
                <input type="submit" value="Post"/>
                <input type="reset" value="Clear" />
                <br>
            </form>
        </dialog>
    <section>

    <script type="text/javascript" src="/view/support/js/dialog.js"></script>

    <!-- Visible content organization -->

    <div class="main-container">
        <? (new Controller)->renderView('side_nav', [], false) ?>

        <main class="posts-container">
            <h1>Posts</h1>
            <p>asdfasdfasdfasdfasdfasdfasdfasd
                asdfasdfasdfasdfasdfasdfasdfasddsfasdfadsf
                adfasdfasdfasdfasdfasdfasdfadsfasdfasdfadsf
                adfasdfadsfadsfasdfasdfadsfadsfasdfasdf
                asddfasdfasdfasdfasdfasdfasdfasdfasdfasdf
                asddfasdfasdfadsfasdfasdfasdfasdfadsfadsf
                asdfasdfadsfasdfasdfasdfasdfasdfasdfasdfa
                adsfasdfadfasdfasdfasdfasfasdfasdfasdfasdf
                asdfasfasdfasdfasdfsadfasdfsadfsdfasdfasdfasdfasdfasdfasdfasdfasdfasdf
            </p>
        </main>

        <aside class="aside-container">
            <h1>Aside</h1>
        </aside>
    </div>

</body>

</html>