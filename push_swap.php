<?php

require_once "tools.php";
function factChecker($la)
{
    $nb = count($la);
    // $timestart = microtime(true);
    $res = "";
    $la = array_slice($la, 1);
    $while = false;
    $lb = [];
    for ($i = 0; $i < count($la) - 1; $i++) {
        if ($la[$i] > $la[$i + 1]) {
            $while = true;
        }
    }
    while ($while == true) {
        $count = 0;
        for ($i = 0; $i < count($la); $i++) {
            // echo $count;
            if ($count == count($la) - 1) {
                pb($la, $lb);
                $res .= " pb";
                rb($lb);
                $res .= " rb";
                $count = 0;
                // print_r($lb);
            } else if ($la[0] < $la[1] || $la[0] == $la[1]) {
                sa($la);
                $res .= " sa";
                ra($la);
                $res .= " ra";

                $count++;
            } else if ($la[0] > $la[1]) {
                ra($la);
                $res .= " ra";

                $count = 0;
            } 
        }
        if (count($la) == 0) {
            // echo "ZIZI" . PHP_EOL;
            $nc = count($lb);
            for ($i = 0; $i < $nc; $i++) {
                rrb($lb);
                $res .= " rrb";
                pa($la, $lb);
                $res .= " pa";
                // echo $i . PHP_EOL;
            // echo "Longueur du tableau : " . count($lb) . PHP_EOL;
            }
            // $timeend = microtime(true);
            // $time = $timeend - $timestart;
            // $page_load_time = number_format($time, 3);
            // echo PHP_EOL;
            // print_r($la);
            // echo PHP_EOL;
            // echo PHP_EOL;
            // echo "Script execute en " . $page_load_time . " sec pour $nb valeurs dans le tableau" . PHP_EOL;
            $while = false;
        }
    }
    echo trim($res) . PHP_EOL;
}


// global $randerino;
// $randerino = 100;
// global $randtotal;
// $randtotal = "";
// for ($i = 0; $i < $randerino; $i++) {
//     $rand2 = rand(1, 1000);
//     $randtotal .= "$rand2 ";
//     // echo "$randtotal";
// }
// $randtotal = explode(" ", $randtotal);


factChecker($argv);
// print_r(array_slice($argv, 1));
