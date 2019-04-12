<?php
echo"
********************
e x e r c i c i o 19
********************\n"
$num1=1;
$num2=0;

print "sequqencia de Fibonacci até pouco mais de 500";
sleep(1);

while ($num1<=500){
$num3=$num2+$num1;
print "$num3\n";
$num2=$num1;
$num1=$num3;
}
