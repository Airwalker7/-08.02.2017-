<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operator = $_GET['operator'];

echo $a . $operator . $b . '=';

switch ($operator) {
    case '+':
        echo $a + $b;
        break;

    case '-':
        echo $a - $b;
        break;

    case '*':
        echo $a * $b;
        break;

    case '/':
        echo $a / $b;
        break;

    case '%':
        echo $a % $b;
        break;
}
if ($operator == '/' and $b == 0){

    echo 'на ноль дельть нельзя';
}

