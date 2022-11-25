<?php
require_once __DIR__ . '/../vendor/autoload.php';

evaluateTest("isAnAdult");

function evaluateTest( string $test) {
    if(true === call_user_func($test)){
        echo "Sucess - Green: ".(string) $test;
    }
    else{
        echo "Fail - Red: ".(string) $test;
    }
    echo("");
}