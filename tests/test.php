<?php

ini_set('display_errors', 'On');

// sarcina lib
include('../src/sarcina.php');

// base object
echo "<strong>SObject</strong><br>";
$sobject = new SObject('id','class','color: RED;');
print_r($sobject);
echo "<br><br>";

// button object
echo "<strong>SButton</strong><br>";
$sbutton = new SButton('id','class','color: RED;');
print_r($sbutton);
$sbutton->render();
echo "<br><br>";


/*
// create a button with a click action
$button_id = new SButton('button_id','Button ID')->
               setClick("alert('testing');")->
                    setStyle('color: RED; background-color: BLUE;')->
                         setClass("button");
*/



