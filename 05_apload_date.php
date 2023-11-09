<?php

$startYear=2006;
$thisYear=date('Y');

if($startYear== $thisYear){
    $output=$startYear;
}else{
    $output=("$startYear &mdash; $thisYear");
}

?>
<p>&copy<?=$output ?></p>