<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki
 * Date: 08-12-2016
 * Time: 14:27
 */

$method = $_SERVER['REQUEST_METHOD'];

if ($method != 'GET') {
    echo '{
        "code":"404",
        "msg":"This API only takes GET methods"
    }';
    die();
}

if (!isset($_GET['number']) || strlen(trim($_GET['number']))==0) {
    echo '{
        "code":"404",
        "msg":"number is missing."
    }';
    die;
}
$number = $_GET['number'];
$newNumber = $number * 10;
$randomNumber = rand(1,10);
echo '{
        "code":"200",
        "msg":"Here is your data",
        "number":"' . $_GET['number'] . '",
        "newNumber":"' . $newNumber . '",
        "randomNumber":"' . $randomNumber . '"
    }';
