<?php


class HomeController
{
    public function index()
    {
      include_once 'app/View/Homeview.php';
      $showpage = new Homeview;
      $showpage->show();
     

    }
}