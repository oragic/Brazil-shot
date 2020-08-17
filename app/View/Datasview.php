<?php 


    class Datasview
    {
        public function show()
        {
           
            $content = file_get_contents('public/pages/datas.html');
            $show = str_replace('{{content}}','teste',$content);
            echo $show;
            
        }
    }