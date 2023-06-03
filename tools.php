<?php
$la = [2, 1, 3, 6, 5, 7];
// $la = $argv;
// array_shift($la);
$res = "";

function sa(&$la){
    //Permet d'échanger le premier et le dernier élément dans le tableau $la
    $t = $la[0];
    $la[0] = $la[1];
    $la[1] = $t;
}
function sb(&$lb){
    //Permet d'échanger le premier et le dernier élément dans le tableau $lb
    $t = $lb[0];
    $lb[0] = $lb[1];
    $lb[1] = $t;
    $res .= " sb";
}

function sc($la, $lb){
    //Permet d'appeler sa() et sb()
    sa($la);
    sb($lb);
    $res .= " sc";
}


function pa(&$la, &$lb){
    //Permet d'envoyer la première donnée de $la dans $lb
    array_unshift($la, $lb[0]);
    $lb = array_slice($lb, 1);
}

function pb(&$la, &$lb){
    //Permet d'envoyer la première donnée de $lb dans $la
    array_unshift($lb, $la[0]);
    $la = array_slice($la, 1);
}

function ra(&$la){
    //Permet d'envoyer la première donnée de $la à la fin, en faisant la dernière
    array_push($la, $la[0]);
    $la = array_slice($la, 1);
}

function rb(&$lb){
    //Permet d'envoyer la première donnée de $lb à la fin, en faisant la dernière
    array_push($lb, $lb[0]);
    $lb = array_slice($lb, 1);
}

function rr($la, $lb){
    //Permet d'appeler ra() et rb()
    rb($lb);
    ra($la);
    $res .= " rr";
}

function rra(&$la){
    //Permet d'envoyer la dernière donnée de $la au début , en faisant la première
    array_unshift($la, $la[array_key_last($la)]);
    array_pop($la);
    $res .= " rra";
}

function rrb(&$lb){
    //Permet d'envoyer la dernière donnée de $lb au début , en faisant la première
    array_unshift($lb, $lb[array_key_last($lb)]);
    array_pop($lb);
}

function rrr($la, $lb){
    //Permet d'appeler rra() et rrb()
    rra($lb);
    rrb($la);
    $res .= " rrr";
}

// ra($la);
// pb($la, $lb);
// print_r($la);
// print_r($lb);
// var_dump(pb($la, $lb));
// var_dump($lb);
// rrr($la, $lb);
// actvid.com
// moviejoy.tv