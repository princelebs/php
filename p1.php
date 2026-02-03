<?php
    $n1=$_GET['n1'];
    $n2=$_GET['n2'];

    $a=$n1+$n2;
    $s=$n1-$n2;
    $m=$n1*$n2;
    $d=$n1/$n2;

    echo "addi = $a";
    echo "sub = $s";
    echo "mul = $m";
    echo "div = $d";
?>