<?php

$cmd = popen('bash script.sh 2>&1', 'r');
if ($cmd) {
    $cFile = fopen('counter.txt', 'w+');
    if (flock($cFile, LOCK_SH)) {
        while (($buffer = fgets($cmd)) !== false) {
            fwrite($cFile, $buffer);
        }
        fclose($cFile);
    }
    pclose($cmd);
}