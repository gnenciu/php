<?php
$i= rand(1,7);
$zi= array();
$zi['1'] = 'Luni';
$zi['2'] = 'Marti';
$zi['3'] = 'Miercuri';
$zi['4'] = 'Joi';
$zi['5'] = 'Vineri';
$zi['6'] = 'Sambata';
$zi['7'] = 'Duminica';

switch ($i) {
    case 1:
        echo "Azi este $zi[$i]";
        break;

    case 2:
        echo "Azi este $zi[$i]";
        break;
    case 3:
        echo "Azi este $zi[$i]";
        break;
    case 4:
        echo "Azi este $zi[$i]";
        break; 
    case 5:
        echo "Azi este $zi[$i]";
        break;
    case 6:
        echo "Azi este $zi[$i]";
        break;
    default:
    echo "Azi este $zi[$i]";;
    break;
}

