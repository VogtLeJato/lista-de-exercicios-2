<?php
echo"
     *******************
     e x e r c í c i o 4
     *******************";

sleep(2);

echo"Agora digite uma letra do alfabeto.\n";

sleep(2);

echo"Eu vou dizer se é uma vogal ou uma consoante.\n";

 print "Digite uma letra: ";
 $letra = (string)fgetc(STDIN);
 $a ='a';
 $e ='e';
 $i ='i';
 $o ='o';
 $u ='u';

     if ($letra == $a or $letra == $e or $letra == $i or $letra == $o or $letra == $u)
     {print "a letra $letra é uma vogal\n";}

         else {print "a letra $letra é uma consoante\n";}
