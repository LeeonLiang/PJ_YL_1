<?php

include_once dirname(__DIR__) . "/base/Db.php";
header('Content-Type:application/json; charset=utf-8');

function selectById($intHtmlNum)
{
    $objDb = Db::getInstance();

    $arrResult = [];
    $arrRes = $objDb->query("select * from wechat_num where html_num = $intHtmlNum order by id asc");
    foreach ($arrRes as $arrItem) {
        $arrResult[] = [
            'html_num' => $arrItem['html_num'],
            'wechat_num' => $arrItem['wechat_num'],
        ];
    }
    return $arrResult;
}

$intHtmlNum = intval($_GET["html_num"]);
if (empty($intHtmlNum)) {
    return;
}
echo json_encode(selectById($intHtmlNum));