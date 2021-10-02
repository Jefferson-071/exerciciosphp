<?php
//condicional switch

$tipo = 'video';

switch($tipo) {
    case 'foto':
        echo 'exibindo um foto';
        break;
    case 'video':
        echo 'exibindo um video';
        break;
    case 'texto':
        echo 'exibindo um texto';
        break; 
}