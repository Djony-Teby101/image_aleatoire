<?php

$images=[
    ['file'=>'1', 'caption'=>'image 1'],
    ['file'=>'2', 'caption'=>'image 2'],
    ['file'=>'3', 'caption'=>'image 3'],
    ['file'=>'4', 'caption'=>'image 4'],
    ['file'=>'5', 'caption'=>'image 5'],
    ['file'=>'6', 'caption'=>'image 6'],
    ['file'=>'7', 'caption'=>'image 7'],
];

$i=random_int(0, count($images)-1);
$selectedImage="images/{$images[$i]['file']}.jpg";
$caption=$images[$i]['caption'];

?>

<caption>
    <img src="<?= $selectedImage ?>" alt="error" width="300" height="350">
    <figcaption><?= $caption ?></figcaption>
    
</caption>