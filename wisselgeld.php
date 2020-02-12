<?php
$change = (int) $argv[1];
define("geldeenheid", [50, 20, 10, 5, 2, 1]);
foreach (geldeenheid as $coin) {
    if (floor($change / $coin) > 0) {
        $times = floor($change / $coin);
        echo "$times X $coin" . PHP_EOL;
        $change = $change - ($times * $coin);
    }
}
