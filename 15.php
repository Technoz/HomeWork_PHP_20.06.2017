<?php
$a = -10;
$b = 2;
$operator = '%';
if($b == 0 && $operator == '/'){
    echo "На ноль делить нельзя";
}
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
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.06.2017
 * Time: 4:50
 */