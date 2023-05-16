<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
?>

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
$id=$_POST['id'];

$sql="UPDATE records SET title=:title,type=:type,amount=:amount,date=:date,updated_at=now() WHERE id=:id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':title',$title,PDO::PARAM_STR);
$stmt->bindParam(':type',$type,PDO::PARAM_INT);
$stmt->bindParam(':amount',$amount,PDO::PARAM_INT);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);

$stmt->execute();

header('Location:./index.php');
exit;



?>