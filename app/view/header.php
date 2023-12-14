<header class="header">
    <h1 class="site-title">Otaku Oo</h1>
    <nav class="nav"> 
        <ul class="link-list">
                <? if (!isset($_SESSION['username'])): ?>
                <li><a class="link" href="user/signup">Sign up</a></li>
                <li><a class="link" href="user/signin">Sign in</a></li>
                <? else: ?>
                <li><a class="link" href="/user/signout">Sign out</a></li>
                <? endif ?>
        </ul>    
    </nav>
</header>