<?php
echo"
*******************
e x e r c i c i o 5
*******************"
print"digite a primeira nota do aluno";
  $nota_parcial_1 = fgets(STDIN);

print"digite a segunda nota do aluno";
  $nota_parcial_2 = fgets(STDIN);

     $nota_final = ($nota_parcial_1 + $nota_parcial_2)/2;
     $nota_final = (float)($nota_final);
     
     if ($nota_final==10)
     {print"Situação do aluno: Aprovado com distinção";}
            
            elseif($nota_final==7 or $nota_final > 7)
            {print"Situação do aluno: Aprovado";}

                 else {print "Situação do aluno: Não aprovado";}
