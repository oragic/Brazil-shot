<?php
   
    include_once './app/Controller/HomeController.php';
    include_once  './app/Controller/DatasController.php';
    include_once './app/Core/Core.php';

    ob_start();

    $core = new Core;
    $core->search($_GET);

    $output = ob_get_contents();

    ob_end_clean();

    echo $output;


    
