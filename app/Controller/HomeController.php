<?php

include_once '';
class HomeController
{
    public function index()
    {
    
      $template = file_get_contents('');
      echo $template;
      echo "Hello World";
  
    }
}