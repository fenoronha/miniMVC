<?php

class Load 
{
   function view( $file_name, $data = null ) 
   {
      $data;
      include VIEWPATH . $file_name;
   }
}



