<?php
    require_once __DIR__ ."/config/Core.php";
    require_once __DIR__ ."/config/routes.php";

    spl_autoload_register(function ($file) {
        if(file_exists(__DIR__."/$file.php"))
            require_once __DIR__."/$file.php";
        else if(file_exists(__DIR__."/model/$file.php"))
            require_once __DIR__."/model/$file.php";
        else if(file_exists(__DIR__."/model/dao/$file.php"))
            require_once __DIR__."/model/dao/$file.php";
        else if(file_exists(__DIR__."/model/dto/$file.php"))
            require_once __DIR__."/model/dto/$file.php";
        else if(file_exists(__DIR__."/model/connect/$file.php"))
            require_once __DIR__."/model/connect/$file.php";
        else if(file_exists(__DIR__."/controller/$file.php"))
            require_once __DIR__."/controller/$file.php";
    });

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();

    $core = new Core();
    $core->run($routes);
?>