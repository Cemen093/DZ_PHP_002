<?php

echo '<link href="style.css" rel="stylesheet"/>';
//include("style.css");
//include "style.css

$pattern_name = '/\w{3,}/';
$pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
$pattern_mail = '/\w+@\w+\.\w+/';

if( empty($_POST['Login']) or empty($_POST['Password']) or empty($_POST['Email'])){
    echo "<h1 class='error'>NULL ERROR</h1>";
    return;
}
if(!preg_match($pattern_name, $_POST['Login'])){
    echo "<h1 class='error'>LOGIN ERROR</h1>";
    return;
}
if(!preg_match($pattern_password, $_POST['Password'])){
    echo "<h1 class='error'>PASSWORD ERROR</h1>";
    return;
}
if(!preg_match($pattern_mail, $_POST['Email']) ) {
    echo "<h1 class='error'>Email ERROR</h1>";
    return;
}

echo '<h2 class="message"> Login: ' . $_POST['Login'] . '</br></h2>';
echo '<h2 class="message"> Password: ' . $_POST['Password'] . '</br></h2>';
echo '<h2 class="message"> Email: ' . $_POST['Email'] . '</br></h2>';

//    echo $_GET["myInput"];
//    echo $_POST["myInput"];
?>
