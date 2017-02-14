<?php
$age='test';
if ((is_numeric($age)==false ) or ($age<0)){
    echo "Неизвестный возраст";
}else{
    if ($age>=18 and $age<60 ){
        echo "Вам еще работать и работать";}
    if ($age>59){
        echo "Вам пора на пенсию";}
    if ($age>=0 and $age<=17 ){
        echo "Вам еще рано работать";}
}