<?php

echo"
     *******************
     e x e r c í c i o 3
     *******************\n";

sleep(2);

echo"Escreva f ou m, e eu vou completar pra você\n";
  $letra = (string) fgetc(STDIN);

  if ($letra == "F" or $letra == "f")
  {sleep(2);
    print "feminino\n";}
     

    if ($letra == "M" or $letra == "m")
    {sleep(2);
      print "masculino\n";}

    elseif($letra != "M" & $letra != "m" & $letra != "F" & $letra != "f" )
    {sleep(2);
      print "sexo invalido\n";}
