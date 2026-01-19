<?php
$nilai = 91;

switch ($nilai) {
    case 100:
        echo "A ";
        echo "nilai sempurna!";
        break;
    case 90;
        echo"A ";
        echo "nilai sempurna!";
        break;
    case 80:
        echo"8 ";
        echo "nilai baiki";
        break;
        case  75:
            echo"c ";
            echo "nilai cukup!";
            break;
        default:

        if ($nilai >= 90){
            echo"A ";
            echo "nilai sempurna!";
        }elseif ($nilai >= 80){
            echo"8 ";
            echo "nilai baik!";
        }elseif ($nilai >= 75){
            echo"c ";
            echo "nilai cukup!";
        } else {
            echo "nilai kurang!";
        }
        break;
    }
    ?>