<?php


class HomeController
{
    public function index()
    {
      include_once 'app/View/Homeview.php';
      $showw = new Homeview;
      $showw->show();
     

    }
}