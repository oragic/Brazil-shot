<?php 

class DatasController
{
    public function index()
    {
        include_once './app/View/Datasview.php';

        $showpage = new Datasview;
        $showpage->show();
    }
}