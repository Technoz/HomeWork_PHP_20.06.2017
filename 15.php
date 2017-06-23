<?php
$a = 5;
$b = -2;
$operator = '/';
if(($b == 0 || $a == 0) && ($operator == '/' || $operator == '%')){
    echo "На ноль делить нельзя";
}else{
    switch ($operator){
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            echo $a / $b;
            break;
        case "%":
            echo $a % $b;
            break;
    }
}

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.06.2017
 * Time: 4:50
 */