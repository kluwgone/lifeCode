<?php
 class Table
 {
     public $width,$height;

     public function __construct()
     {
         if (isset($_GET['width'])) $this->width = $_GET['width'];
         else $this->width = 20;

         if (isset($_GET['height'])) $this->height = $_GET['height'];
         else $this->height = 20;

     }

 }
