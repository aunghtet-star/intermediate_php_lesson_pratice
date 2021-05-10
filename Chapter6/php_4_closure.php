<?php
$num = 10;
$var = function () use ($num) {
    echo "hello" . $num;
};
$var();