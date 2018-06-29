<?php

include_once dirname(__DIR__) . "/base/Db.php";

function select()
{
    $objDb = Db::getInstance();

    return $objDb->exec("select * from wechat_num order by id asc");
}

$arrRes = select();
header('Content-Type:application/json; charset=utf-8');
echo json_encode($arrRes);