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
            
            list($class, $method) = explode('@', $controller);
            if(preg_match_all('#/#', $path)){
                (new $class())->$method();
                return;
            }  
        
        }
    }
}