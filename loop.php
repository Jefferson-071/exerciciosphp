<?php
//loop while
/*
$numero = 1;

while($numero <= 10) {
echo 'numero: ' . $numero++ . "</br>";
}


//loop for

for($i = 0; $i <= 10; $i++) {
echo 'numero: ' . $i . "</br>";
}
*/
//loop foreach
/*
$ingredientes = [
'açucar',
'ovo',
'leite',
'farinha de trigo',
'corante',
'chocolate em pó',
'margarina',
'fermento'
];

foreach($ingredientes as $chaves => $valor) {
echo "item " . $chaves.": ".$valor . "</br>";
}
*/

//exercicio loop 01

$traco = '-';
for($R = 0; $R < 10; $R++) {
    for($i = 0; $i < 10; $i++) {
        echo $traco;
    }
   echo '</BR>';
}

//exercicio loop 02

$traco = '';
    for($i = 0; $i < 20; $i++) {
    echo '</BR>';
    echo $traco = $traco . '-';
        
}
