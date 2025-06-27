<?php

$datas = [1, 2, 3, 4];
foreach ($datas as $data) {
    echo $data . PHP_EOL;
}

foreach ($datas as $data) :
    echo $data . PHP_EOL;
endforeach;

if (isset($datas[1])) {
    echo "Element existant";
}

if (isset($datas[1])):
    echo "Element existant";
endif;
