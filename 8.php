<?php
$age = NULL;
if($age >= 18 && $age <= 59 ){
    echo "Вам еще работать и работать";
}   elseif ($age > 59){
    echo "Вам пора на пенсию";
}   elseif ($age >= 0 && $age <= 17 && (is_int($age) || is_float($age))){
    echo "Вам еще рано работать";
}   else{
    echo "Неизвестный возраст";
}
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.06.2017
 * Time: 3:16
 */