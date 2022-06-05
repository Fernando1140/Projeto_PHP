<?php
$categorias = [];
$categorias[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';
$categoria[] = 'bebe';

$nome = 'Eduardo';
$idade = 21;

if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
     {
         if($categoria [$i]  == 'infantil')
         echo "O nadador ".$nome. " compete na categoria infantil";
     }



}
else if($idade >=13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categoria [$i]  == 'adolescente')
        echo "O nadador ".$nome. " compete na categoria adolescente";
    }

}
else if($idade <=5)

{
    for($i = 0; $i <= count($categorias); $i++)
     {
         if($categoria [$i]  == 'bebe')
         echo "O nadador ".$nome. " compete na categoria bebe";
     }

}


else
{
    for($i = 0; $i <= count($categorias); $i++)
     {
         if($categoria [$i]  == 'adulto')
         echo "O nadador ",$nome, " compete na categoria adulto";
     }
}

