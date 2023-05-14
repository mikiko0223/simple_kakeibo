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
$title=$_POST['title'];
$amount=$_POST['amount'];
$type=$_POST['type'];

$sql="INSERT INTO records(title,type,amount,date,created_at,updated_at)VALUES(:title,:type,:amount,:date,now(),now())";

//先ほど作成したSQLを実行できるように準備
$stmt=$pdo->prepare($sql);

//値の設定
$stmt->bindParam(':title',$title,PDO::PARAM_STR);
$stmt->bindParam(':type',$type,PDO::PARAM_INT);
$stmt->bindParam(':amount',$amount,PDO::PARAM_INT);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);

//sqlを実行
$stmt->execute();


?>

