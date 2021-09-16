<?php
$words = [
    'red',
    'blue',
    'green',
    'yellow',
    'lime',
    'magenta',
    'black',
    'gold',
    'gray',
    'tomato'
];
function form_massive($length = 5, $row = 5){
    global $words;
    $arr=[];
    for($i = 0; $i < $row; $i++){
        shuffle($words);
        $arr[] = (array_slice($words,0,$length));
    }
return call_user_func_array('array_merge',$arr);
}

function paint_massive($arr){
    global $words;
    $colorMassive = [];
    foreach($arr as $v){
    $color = $words[array_rand($words, 1)];
    while($color==$v){
        $color = $words[array_rand($words, 1)];
    }
       $colorMassive[] = [
           'word'  => $v,
           'color' => $color
       ];
    }
    return $colorMassive;
}