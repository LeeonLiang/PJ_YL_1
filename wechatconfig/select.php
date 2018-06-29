<?php

include_once dirname(__DIR__) . "/base/Db.php";
header('Content-Type:application/json; charset=utf-8');

function select()
{
    $objDb = Db::getInstance();

    $arrResult = [];
    $arrRes = $objDb->query("select * from wechat_num order by id asc");
    foreach ($arrRes as $arrItem) {
        $arrResult[] = [
            'html_num' => $arrItem['html_num'],
            'wechat_num' => $arrItem['wechat_num'],
        ];
    }
    return $arrResult;
}

echo json_encode(select());