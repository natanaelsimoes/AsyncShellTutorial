<?php

$cFile = fopen('counter.txt', 'r');
if (flock($cFile, LOCK_SH)) {
    while (($buffer = fgets($cFile)) !== false) {
        echo $buffer . '<br>';
    }
}