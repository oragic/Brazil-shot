<?php 


class Core
{
    public function search($geturl)
    {
        if(isset($geturl['method']))
        {
            $action = $geturl['method'];
        }
        else
        {
            $action = 'index';
        }
        if(isset($geturl['page']))
        {
            $controller = ucfirst($geturl['page'].'Controller');
        }
        else
        {
            $controller = 'HomeController';
        }
        if(!class_exists($controller))
        {
            $controller = 'ErrorController';
        }

        call_user_func_array(array(new $controller, $action), array());
    }

}