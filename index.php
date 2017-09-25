<?php

  $obj = new main();
  $text = "my text";
    $obj->str_repeat1($text);

  $array = array(1,2,3,4,5,6,7);
  

  class main {

    public function __construct() {

      echo '<b>10 string functions</b> </br>';

    }

    public function str_repeat1($text) {
      echo '<h1>String repeat function demo </h1>';
      echo str_repeat("$text", 10);
      echo '<hr>';
    }

    public function printArray($array) {
      echo '<h1>array print function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>



