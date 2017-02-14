<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operator = $_GET['operator'];

//echo $a . $operator . $b . '=';

//switch ($operator) {
//    case '+':
//        echo $a + $b;
//        break;
//
//    case '-':
//        echo $a - $b;
//        break;
//
//    case '*':
//        echo $a * $b;
//        break;
//
//    case '/':
//        echo $a / $b;
//        break;
//
//    case '%':
//        echo $a % $b;
//        break;
//}
//if ($operator == '/' and $b == 0){
//
//    echo 'на ноль дельть нельзя';
//}

if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}
elseif ($b==0 and $operator=='%'){
    echo "неверно заданное число";
}
else {
    if ($operator == '+')
         {$result=$a + $b; }

    if ($operator == '-')
         {$result=$a - $b;}

    if ($operator =='/')
         {$result=$a / $b;}

    if ($operator == '*')
         {$result=$a * $b;}

    if ($operator == '%')
         {$result=$a % $b;}

    echo $a .$operator .$b .'='  .$result;
}