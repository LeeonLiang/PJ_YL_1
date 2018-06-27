<?php

class Db
{
    private static $dbConfig = [
        'dbms'  => 'mysql',
        'host'  => '127.0.0.1',
        'user'  => 'root',
        'pass'  => 'root',
        'dbname'=> 'project_yl_1',
    ];

    //私有静态属性
    private static $objDbConn;

    //私有构造
    private function __construct()
    {

    }

    //私有克隆
    private function __clone()
    {

    }

    /**
     * 获取数据库连接实例
     * @throws Exception
     */
    public static function getInstance()
    {
        if (empty(self::$objDbConn)) {
            self::$objDbConn = self::newPdoMysqlConn();
        }
        return self::$objDbConn;
    }

    /**
     * PDO连接
     * @return null|PDO
     * @throws Exception
     */
    private static function newPdoMysqlConn()
    {
        $strDsn = sprintf('%s:host=%s;dbname=%s', self::$dbConfig['dbms'], self::$dbConfig['host'], self::$dbConfig['dbname']);

        $objPdoConn = null;
        try {
            $objPdoConn = new PDO($strDsn, self::$dbConfig['user'], self::$dbConfig['pass']);
        } catch (Exception $e) {
            throw new Exception('PDO连接失败');
        }

        return $objPdoConn;
    }

}