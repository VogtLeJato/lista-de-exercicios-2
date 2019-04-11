<?php
echo"
*******************
e x e r c i c i o 8
*******************\n";

echo"informe o preço do produto 1\n";
 $preço_produto_um = fgets(STDIN);
 $preço_produto_dois = fgets(STDIN);
 $preço_produto_tres = fgets(STDIN);

 if ($preço_produto_um < $preço_produto_dois and $preço_produto_um < $preço_produto_tres)
     {echo"compre o primeiro produto de preço R$$preço_produto_um";}
 
 if ($preço_produto_dois < $preço_produto_um and $preço_produto_dois < $preço_produto_tres)
     {echo"compre o segundo produto de preço R$$preço_produto_dois";}
 
 if ($preço_produto_tres < $preço_produto_dois and $preço_produto_tres < $preço_produto_um)
     {echo"compre o terceiro produto de preço R$$preço_produto_tres";}
