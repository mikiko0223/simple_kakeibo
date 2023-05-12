<?php

include_once('./dbconnect.php');

//新しいレコードに追加する処理
//処理の流れ
//最終のゴール：新しい家計簿が追加されてトップに戻る
//1.画面で入力された値の取得
//2.PHPからmysqlへ接続
//3.SQL文を作成して、画面に入力された値をrecordsテーブルに追加
//4.index.phpに移動

$date=$_POST['date'];
$date=$_POST['title'];
$date=$_POST['amount'];
$date=$_POST['type'];




?>

