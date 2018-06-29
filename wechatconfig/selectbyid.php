<?php

include_once dirname(__DIR__) . "/base/Db.php";
header('Content-Type:application/json; charset=utf-8');

function selectById($intHtmlNum)
{
    $objDb = Db::getInstance();

    $arrResult = [];

    if (empty($intHtmlNum)) {
        $arrRes = $objDb->query("select * from wechat_num order by html_num asc");
    } else {
        $arrRes = $objDb->query("select * from wechat_num where html_num = $intHtmlNum order by html_num asc");
    }
    foreach ($arrRes as $arrItem) {
        $arrResult[] = [
            'html_num' => $arrItem['html_num'],
            'wechat_num' => $arrItem['wechat_num'],
        ];
    }
    return $arrResult;
}

$intHtmlNum = intval($_GET["html_num"]);
echo json_encode(selectById($intHtmlNum));