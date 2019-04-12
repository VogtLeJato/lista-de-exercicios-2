<?php
echo"
********************
e x e r c i c i o 20
********************\n";
echo"
escolha,
[1]=> quadrado\n
[2]=> triangulo retângulo(esquerda)\n
[3]=> triangulo retângulo(direita)\n";

$escolha = (int)fgets(STDIN);

if ($escolha == 1)
{echo"
* * * * * * * *
* * * * * * * *
* * * * * * * *
* * * * * * * *
* * * * * * * *
* * * * * * * *
* * * * * * * *
* * * * * * * *
";}

if ($escolha == 2)
{echo"
*
* *
* * *
* * * *
* * * * *
* * * * * *
* * * * * * *
* * * * * * * *";}

if ($escolha == 3)
{echo"
              *
            * *
          * * *
        * * * *
      * * * * *
    * * * * * *
  * * * * * * *
* * * * * * * *";}


