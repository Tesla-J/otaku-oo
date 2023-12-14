<html>
<head>
    <title>Otaku king - Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="view/support/css/global.css" />
    <link rel="stylesheet" href="view/support/css/landing_page.css" />
    <link rel="stylesheet" href="view/support/css/home.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="view/support/css/font-awesome/css/font-awesome.min.css" />
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

    <main class="main">
        <?php foreach($args as $postDTO): ?>
            <section class="post-section">
                <? $postData = $postDTO->toArray() ?>
                <div class="post-header">
                    <figure>
                        <img class="author-profile-picture" alt="Profile picture" src="view/support/images/profile_picture_example.jpg" />
                    </figure>
                    <a href="#"><?= "@" . $_SESSION['username'] ?></a>
                </div>
                <h2 class="post-title"><?= $postData['title'] ?></h2>
                <p class="post-content"><?= $postData['content'] ?></p>
                <br>
                <!-- Post reactions -->
                <ul class="action-list">
                    <li class="action-item">
                        <a href="#" class="action-link">
                            <i class="fa fa-heart action-icon"></i>
                        </a>
                    </li>
                    <li class="action-item">
                        <a href="#" class="action-link">
                            <i class="fa fa-comment"></i>
                        </a>
                    </li>
                    <li class="action-item">
                        <a href="#" class="action-link">
                            <i class="fa fa-share"></i>
                        </a>
                    </li>
                </ul>
            </section>
            <br>
        <?php endforeach ?>
    </main>
</body>

</html>