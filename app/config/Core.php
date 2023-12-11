<?php

class Core{
    public function run($routes){
        $url = "/";

        $url .= isset($_GET['url']) ? $_GET['url'] : '';
        $isValid = false;
        
        foreach($routes as $path => $controller){
            //$pattern = '#^'.preg_replace('/{id}/' , '(\w+)' , $path).'$#';
            //if(preg_match($pattern , $url, $matches)){
            //    print_r($matches);
            //}
            
            $pattern = '#^'.$path.'$#';
            $paramPattern = '#[\\w]+/[\\d]+#'; # TODO it accepts /string/{id}/string and /string/{id}/string/{id}/string SOLVE IT

            list($class, $method) = explode('@', $controller);

            # for simple path
            if(preg_match_all($pattern, $url)){
                $isValid = true;
                (new $class())->$method();
            }
            # for paths with single id parameter
            else if(preg_match_all($paramPattern, $url) == 1){
                $isValid = true;
                // TODO handle single id
            }
            # for paths with two id parameters
            else if(preg_match_all($paramPattern, $url) == 2){
                $isValid = true;
                // TODO handle double id
            }
        }

        if(!$isValid){
            (new NotFoundController())->display();
        }
    }
}