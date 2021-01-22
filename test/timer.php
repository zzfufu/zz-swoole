<?php
//Swoole\Timer::tick(1000, function (int $timer_id, $param1, $param2) {
//    echo "timer_id #$timer_id, after 1000ms.\n";
//    echo "param1 is $param1, param2 is $param2.\n";
//    Swoole\Timer::tick(4000, function ($timer_id) {
//        echo "timer_id #$timer_id, after 4000ms.\n";
//    });
//}, "A", "B");

$str = "Swoole";
Swoole\Timer::after(3000, function () use($str) {
    echo "Hello, $str\n";
});