<?php
$day = 6; // Если без if, то срабатывает условие при $age = true

if(is_int($day)) {
    switch ($day) {
        case 1:
            echo "Это рабочий день";
            break;
        case 2:
            echo "Это рабочий день";
            break;
        case 3:
            echo "Это рабочий день";
            break;
        case 4:
            echo "Это рабочий день";
            break;
        case 5:
            echo "Это рабочий день";
            break;
        case 6:
            echo "Это выходной день";
            break;
        case 7:
            echo "Это выходной день";
            break;
        default:
            echo "Неизвестный день";
    }
}
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.06.2017
 * Time: 4:09
 */