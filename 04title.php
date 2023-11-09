<?php

$title=basename($_SERVER['SCRIPT_FILENAME'], '.php');

var_dump($title);

$title=str_replace('04', ' ',$title);
$title=ucwords($title);
 var_dump($title);

?>

<title> Japan Journey<?php if(isset($title)){
    echo("&mdash;$title");
}?>

</title>
