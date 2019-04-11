<?php 
echo"
*******************
e x e r c i c i o 7
*******************"
 echo"digite tres numeros\n";
 $numero_um = fgets(STDIN);
 $numero_dois = fgets(STDIN);
 $numero_tres = fgets(STDIN);
 
 if ($numero_um > $numero_dois and $numero_um > $numero_tres)
     {echo"o $numero_um é o maior dos tres numeros\n";}
 
 if ($numero_dois > $numero_um and $numero_dois > $numero_tres)
     {echo"o $numero_dois é o maior dos tres numeros\n";}
 
 if ($numero_tres > $numero_dois and $numero_tres > $numero_um)
     {echo"o $numero_tres é o maior dos tres numeros\n";}

     //bloco um do algoritmo, numero maior//;



       if ($numero_um < $numero_dois and $numero_um < $numero_tres)
         {echo"o $numero_um é o menor dos tres numeros";}
 
       if ($numero_dois < $numero_um and $numero_dois < $numero_tres)
         {echo"o $numero_dois é o menor dos tres numeros";}
 
       if ($numero_tres < $numero_dois and $numero_tres < $numero_um)
         {echo"o $numero_tres é o menor dos tres numeros";}


    //bloco dois do algoritmo, numero menor//;
 
     
 
 
 
    
