<?php
$name= 'Lorince';

$age=26;
$boolean=true;
$money=1400.5;
var_dump($money);
echo('<br />');
var_dump($boolean);
echo('<br />');
// echo($name.' is always'.$boolean);

// syntaxe est obsolete.
echo "${name} i'm ${age}";

// Checking Data type.
echo('<br>');

var_dump($name);

echo('<br>');
// convert data type.
$input='coffee';
$drink=(array)$input;

var_dump($drink);

$book=[
    'title'=>'La racine du mal',
    'author'=>'Lorince'
];
echo('<br>');

$book1=array('title'=>"les écris reste",
                'author'=>"Lorince" );

var_dump($book1['title']);
echo('<br>');

// combiner array and str
echo("{$book['title']} was written by {$book['author']}");
echo('<br>');
echo($book['title'].' was written by '.$book['author'] );

echo('<br>');
echo('<br>');
$day=date('d/m/y');

// multidimension Arrays

// database
$book3=[
    [
        'title'=>"le roi gogole",
        'author'=>'Lorince',
        'publish'=>$day,
        'emotion'=>'😃'
        
    ],
    [
        'title'=>"La merde du monde",
        'author'=>'Lorince',
        'publish'=>$day,
        'emotion'=>'🤗'
    ],
    [
        'title'=>"Une perte soudaine",
        'author'=>'Lorince',
        'publish'=>$day,
        'emotion'=>'😇'
    ]

];

echo('<br>'); 

foreach($book3 as $livre){
    ?>
    <hr>
    <div style="text-align:center">
        <p style="color:#d1d1d1"><?= $livre['author'] ?></p>
        <p><?= $livre['title'] ?></p>
        <p><?= $livre['publish'] ?></p>
        <p><?= $livre['emotion'] ?></p>
    </div>
    <?php
}

// $result=match($things){
//     1=>'$things is 1',
//     'apple','orange'=>'$things is a fruit',
//     default=>'$thing is neither 1 or fruit'
// };
// echo $result;


// do while
// $i=4;
// do{
//     echo "$i <br>"; 
//     $i++;
// }while($i<= 10);

// for loop.
// for($i=1; $i<=10; $i++){
//     echo("$i <br>");
// }


// var_dump($number);
// echo'<pre>';
// var_dump($book1);
// echo'</pre>';

$title=$_SERVER['SCRIPT_FILENAME'];
$title=str_replace('_','', $title);
$title=ucwords($title);
var_dump($title);









?>