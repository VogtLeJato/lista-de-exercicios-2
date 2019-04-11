<?php
echo"
     *******************\n
     e x e r c í c i o 2\n
     *******************\n";

sleep(2);

echo"Agora digite um número qualquer.\n";

sleep(2);

echo"E eu lhe direi se o número é positivo ou negativo\n";

sleep(2);

  $numero = fgets(STDIN);
  
   if ($numero>0) 
   {sleep(2);
     "o número $numero é positivo\n";}
 
     else {sleep(2);
      print "o número $numero é negativo\n";}
