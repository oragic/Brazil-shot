<?php


class Homeview
{
    public function show()
    {
        $show = file_get_contents('public/pages/index.html');
        echo $show;

    }
}
