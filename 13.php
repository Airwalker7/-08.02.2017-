<?php
    $s = 100; //Длина участка (км)
    $S = $s*1000; // Длина участа (м)

    $t = 2; // Время движения (ч)
    $T = $t*3600; // Время движения (с)

    $v = $s/$t; // Скорость движения автомобиля (км/ч)
    echo "Скорость движения автомобиля $v км/ч";

    echo '<br>';

    $V = $S/$T; // Скорость движения автомобиля (м/c)
    echo "Скорость движения автомобиля $V м/с";
