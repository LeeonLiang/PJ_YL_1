<?php

include_once dirname(__DIR__) . "/base/Db.php";

function insert()
{
    $objDb = Db::getInstance();

    $intHtmlNum = intval($_GET["html_num"]);
    $intWechatNum = intval($_GET["wechat_num"]);
    if ($intWechatNum <= 0 || $intWechatNum <= 0) {
        return;
    }

    $objDb->exec("INSERT INTO wechat_num (html_num, wechat_num) VALUES ($intHtmlNum, $intWechatNum)");
}

insert();