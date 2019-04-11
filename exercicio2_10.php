<?php
echo"
********************
e x e r c i c i o 10
********************"

echo"digite um numero ";
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);

$delta = $B . $B - 4 . $A . $C;

if ($delta < 0){

    echo "equação não posssui raizes reais "; }

if ($delta == 0){

    $X = (- $B) / 2*$A;

    echo"o valor de X é apenas $X "; }

if ($delta > 0){

    $X1 = (- $B + sqrt($delta))/2 .$A;

    $X2 = (- $B - sqrt($delta))/2 .$A;

    echo "X pode ser tanto $X1 quanto $X2"; }
