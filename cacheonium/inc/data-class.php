<?php

    class Data{
      
      public $color_num;
      
       public function __construct(){$color_num = 0;} 

        
        
        
        function get_color_num(){
            $color_num++;
            return $color_num;
            
        }
        
    }

?>