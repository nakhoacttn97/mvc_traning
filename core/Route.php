<?php
class Route{

    function handleRoute($url){
        global $routes;
        unset($routes['default_controller']);
        //var_dump($routes);
        $url = trim($url, '/');
        
        $handleUrl = $url;
        if(isset($routes)){
            foreach($routes as $key => $value){
                if(preg_match('~'.$key.'~is', $url)){
                    $handleUrl = preg_replace('~'.$key.'~is', $value, $url);
                }
            }
        }
        return $handleUrl;
    }
}

/**Note
 * De xu ly Ruote can biet ve bieu thuc chinh quy
 */