<?php
//データベースに接続
function db_open() :PDO{
    $user = "root";
    $password = "mariadb";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
    ];
    $dbh = new PDO('mysql:host=localhost; dbname=kyuukyuu', $user, $password, $opt);
    return $dbh;
}

//XSS対策
function str(String $string) :string{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

