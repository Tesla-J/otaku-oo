<?php
    require_once(__DIR__ . "/../model/dto/PostDTO.php");
    require_once(__DIR__ . "/../model/dao/TmpDAO.php");

    if(session_status() !==PHP_SESSION_ACTIVE)session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
        
        $dao = TmpDAO::getInstance();
        $newPost = new PostDTO($dao->getCurrentPostId()+1, $title, null, $content, []);
        $dao->addPost($newPost);

        header("location: home.php");
    }
?>

<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="suppert/css/global.css" />
    <link rel="stylesheet" href="suppert/css/landing_page.css" />
</head>

<body>
    <h1>Posts</h1>
    <form action="home.php" method="post">

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

    <h2>Feed</h2>

    <?php foreach(TmpDAO::getInstance()->getPosts() as $id => $post): ?>
        <section>
            <h2><?= $post->getTitle() ?></h2>
            <p><?= $post->getContent() ?></p>
            <br>
        </section>
        <br>
    <?php endforeach ?>

</body>

</html>