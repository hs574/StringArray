<?php

  $obj = new main();
  $text = "Harshit";
  $text2= "Shah Harshit Mayur";
    $obj->str_repeat1($text);
    $obj->str_lower1($text);
    $obj->strtoupper1($text);
    $obj->strtcmp1($text);
    $obj->strlen1($text);
    $obj->strrev1($text);
    $obj->str_replace1($text);
    $obj->str_word_count1($text2);
    $obj->strtrim1($text2);
    $obj->substr1($text);



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
    
    public function str_lower1($text) {
      echo '<h1>String is converted to lower case </h1>';
      echo strtolower($text);
      echo '<hr>';
    }
      
      public function strtoupper1($text) {
      echo '<h1>String is converted to Upper case </h1>';
      echo strtoupper($text);
      echo '<hr>';
    }
     
       public function strtcmp1($text) {
      echo '<h1>String comparision function </h1>';
      if (strcmp($text, "Harshit") !== 0) {
    echo 'The strings are not matching';

      }
           else{
               echo 'The strings are matching';
           }
      echo '<hr>';
    }
     
       public function strlen1($text) {
      echo '<h1>The length of the given String is</h1>';
      echo strlen($text);
           echo '<hr>';
       }
      
       public function strrev1($text) {
      echo '<h1>String Reverse function </h1>';
    
    echo strrev ($text);
           echo '<hr>';

      }
        
      
       public function str_word_count1($text2) {
      echo '<h1>Word Count Function Demo</h1>';
    print_r(str_word_count($text2, 1));

    echo str_word_count($text2);
           echo '<hr>';
 
       }
      
       public function str_replace1($text) {
      echo '<h1>String Replace Function</h1>';
           $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
      $onlyconsonants = str_replace($vowels, "V", "Hello World of PHP");
      echo $onlyconsonants;
      echo '<hr>';
    }
      
       public function strrev2($text) {
      echo '<h1>String Reverse function </h1>';
    
    echo strrev ($text);
                 echo '<hr>';


      }
       public function strtrim1($text2) {
      echo '<h1>String Trim function </h1>';
    
          $trimmed = trim($text2, "Mayur");
           echo $trimmed;
                 echo '<hr>';


      }
        

        public function substr1($text) {
      echo '<h1>Substring function </h1>';
    
$rest = substr($text, -1);   
           echo $rest;
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





