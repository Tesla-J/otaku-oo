<?php

class Core{
    public function run($routes){
        $url = "/";

        $url .= isset($_GET['url']) ? $_GET['url'] : '';
        
        foreach($routes as $path => $controller){
            //$pattern = '#^'.preg_replace('/{id}/' , '(\w+)' , $path).'$#';
            //if(preg_match($pattern , $url, $matches)){
            //    print_r($matches);
            //}
            
            $pattern = '#^'.$path.'$#';
            
            list($class, $method) = explode('@', $controller);

            # for simple path
            if(preg_match($pattern, $url)){
                (new $class())->$method();
            }
            # for user signin, signup and signout
            else if(preg_match('#^/user/sign(in|out|up)$#', $url)){
                echo "";// (new $class())->$method();
            }  
            else{
                (new NotFoundController())->display();
            }
        }
    }
}