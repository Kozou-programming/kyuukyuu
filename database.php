<?php
require_once 'functions.php';

try {
    $user = "root";
    $password = "mariadb";
    $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=kyuukyuu_db', $user, $password, $opt);
    //会員情報を表示
    $sql = 'SELECT id, name, furigana, sex, email, address, addDay FROM member';
    $statement = $dbh->query($sql);
    while($row = $statement->fetch()){
        echo str($row[0]);
        echo str($row[1]);
        echo str($row[2]);
        echo str($row[3]);
        echo str($row[4]);
        echo str($row[5]);
        echo str($row[6]);
        echo str($row[7]);
        echo str($row[8])."<br>";
    }
}catch(PDOException $e){
    echo "エラー"."<br>";
    exit;
}