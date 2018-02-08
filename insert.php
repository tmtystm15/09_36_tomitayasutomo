<?php
include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["day"]) || $_POST["day"]=="" ||
  !isset($_POST["starring"]) || $_POST["starring"]=="" ||
  !isset($_POST["director"]) || $_POST["director"]=="" ||
  !isset($_POST["impression"]) || $_POST["impression"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$title    = $_POST["title"];
$day      = $_POST["day"];
$starring = $_POST["starring"];
$director = $_POST["director"];
$impression = $_POST["impression"];
$url      = $_POST["url"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_table(id, title, day, impression,url,starring,director,time)
VALUES(NULL,:title,:day,:impression,:url,:starring,:director,sysdate())");
$stmt->bindvalue(":title",$title,PDO::PARAM_STR);
$stmt->bindvalue(":day",$day,PDO::PARAM_STR);
$stmt->bindvalue(":impression",$impression,PDO::PARAM_STR);
$stmt->bindvalue(":url",$url,PDO::PARAM_STR);
$stmt->bindvalue(":starring",$starring,PDO::PARAM_STR);
$stmt->bindvalue(":director",$director,PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
?>
