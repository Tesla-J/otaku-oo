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
            # for paths with single id parameter
            else if(preg_match('#^single id$#', $url)){
                echo "";
            }
            # for paths with two id parameters
            else if(preg_match("#double id#", $url)){
                echo '';
            }
            else{
                (new NotFoundController())->display();
            }
        }
    }
}