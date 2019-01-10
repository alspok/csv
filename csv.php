<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// echo '<pre>';

$data = [];
$file = fopen ('artist.csv', 'r');
while (($line =fgetcsv($file)) != FALSE){
   $data [] = $line;
}
fclose($file);
// print_r($data);

$keyArray = $data[0];
$artistArray = [];
$i = 0;

foreach($data as $key => $element){
   if($i > 0){
       foreach ($element as $index => $item) {
           $artistArray[$i][$keyArray[$index]] = $item;
       }
   }
   $i++;
}

// print_r($artistArray);

?>

<html>
   <head>
       <style>
           .wrapper{
               width: 80%;
               margin: 0 auto;
               background: #ccc;
           }
           .box{
               width: 30%;
               float: left;
               padding: 10xp;
               overflow: hidden;
           }
           .artist{
               font-size: 16px;
               color: #888;
           }
           .special-price{
                font-size: 20px;
                color: red;
           }
           .line-throught{
                text-decoration: line-through;
           }
       </style>
   </head>
   <body>
   <div class="wrapper">
        <?php
        foreach ($artistArray as $artist): ?>
            <div class="box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/CD-ROM.png/220px-CD-ROM.png">
                <div class="album">
                    <?php echo $artist['album_name'] ?>
                </div>
                <div class="artist">
                    <?php echo trim($artist['artist']) . '('.$artist['years'] . ')' ?>
                </div>
                <div class="price line-throught">
                    <?php echo $artist['price'] ?>
                </div>
                <div class="special-price">
                    <?php echo $artist['special_price'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
   </body>
</html>