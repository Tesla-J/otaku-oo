<html>
<head>
    <title>Otaku king - sign up</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="suppert/css/global.css" />
    <link rel="stylesheet" href="suppert/css/landing_page.css" />
</head>

<body>
    <h1>Posts</h1>
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
    <hr>
    <h2>Feed</h2>

    <?php foreach(TmpDAO::getInstance()->getPosts() as $id => $post): ?>
        <section>
            <h2><?= $post->getTitle() ?></h2>
            <p><?= $post->getContent() ?></p>
            <br>
        </section>
        <br>
    <?php endforeach ?>

    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #222222;
            color: white;
        }

        hr{
            color: white;

        }

        section{
            width: 70vw;
            height: 25vh; 
            border: solid 2px;
            margin: 10px;
            padding: 10px;
        }

        section,h2{
            align-self: center;
        }

        p{
            align-content: justify;
            
        }
    </style>
</body>

</html>