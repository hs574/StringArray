<?php
$textInput='Harshit Shah';
$obj = new main();
$obj ->printString($textInput);
$obj ->stringLength($textInput);
class main {
//public function_construct() {
//echo 'hello world';
//}
public function printString($text) {
echo '<h1>print Function example</h1>';
echo 'Print:';
print($text);
echo '<hr>';
}
public function stringLength($text){
echo '<h1> String Length Example</h1>';
}
}
?>php



