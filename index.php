<?php
require_once "functions.php";
$word = paint_massive(form_massive());
$i=1;
?>
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <title> Тест струпа </title>
    <style>
        .container{
            margin-left: 20% ;
            margin-right: 20%;
            margin-top: 10%;
            background-color: whitesmoke;
            padding: 25px;
            font-size: 4em;
            font-weight: bold;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class = "container">
        <?php foreach ($word as $k=>$v):?>
        <?php if(($k%5)==0 && $k != 0)  echo '<br>';?>
        <span style="color: <?=$v['color'];?>;"><?=$v['word'];?> </span>
        <?php endforeach;?>
    </div>
</body>

</html>