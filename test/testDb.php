<?php

include_once dirname(__DIR__) . "/base/Db.php";

$objDb = Db::getInstance();

$objDb->exec("INSERT INTO test (user_name,phone,comment) VALUES ('leeon', '666666', 'test1')");
$objDb->exec("INSERT INTO test (user_name,phone,comment) VALUES ('alin', '888888', 'test2')");

$arrRes = $objDb->query('select * from test');

var_dump($arrRes);
