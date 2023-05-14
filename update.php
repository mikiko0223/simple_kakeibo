<?php

include_once("./dbconnect.php");

//処理の流れ
//1.画面に表示された値の取得
//2.phpからMySQLへ接続
//3.SQL文を作成して、画面に表示された値でrecordsテーブルを更新
//4.index.phpに画面遷移する
$date=$_POST['date'];
$title=$_POST['title'];
$amount=$_POST['amount'];
$type=$_POST['type'];

echo $_POST['id'];


?>