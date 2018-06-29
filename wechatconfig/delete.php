<?php

include_once dirname(__DIR__) . "/base/Db.php";

function delete()
{
    $objDb = Db::getInstance();

    $intHtmlNum = intval($_GET["html_num"]);
    $intWechatNum = intval($_GET["wechat_num"]);
    if ($intWechatNum <= 0 || $intWechatNum <= 0) {
        return;
    }

    $objDb->exec("DELETE from wechat_num where html_num = $intHtmlNum and wechat_num = $intWechatNum");
}

delete();