<?php

require_once "tools.php";
function factChecker($la)
{
    $nb = count($la);
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
            if ($count == count($la) - 1) {
                pb($la, $lb);
                $res .= " pb";
                rb($lb);
                $res .= " rb";
                $count = 0;
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
            $nc = count($lb);
            for ($i = 0; $i < $nc; $i++) {
                rrb($lb);
                $res .= " rrb";
                pa($la, $lb);
                $res .= " pa";
            }
            $while = false;
        }
    }
    echo trim($res) . PHP_EOL;
}

factChecker($argv);
// print_r(array_slice($argv, 1));
