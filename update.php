<?php
include("functions.php");

//入力チェック(受信確認処理追加)
if(
    !isset($_POST["title"]) || $_POST["title"]=="" ||
    !isset($_POST["day"]) || $_POST["day"]=="" ||
    !isset($_POST["starring"]) || $_POST["starring"]=="" ||
    !isset($_POST["director"]) || $_POST["director"]=="" ||
    !isset($_POST["impression"]) || $_POST["impression"]=="" ||
    !isset($_POST["url"]) || $_POST["url"]=="" ||
    !isset($_POST["id"]) || $_POST["id"]==""
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
$id      = $_POST["id"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_table SET title=:title,day =:day,impression=:impression,url=:url,starring=:starring,director=:director WHERE id=:id");
$stmt->bindValue(":title",$title,PDO::PARAM_STR);
$stmt->bindValue(":day",$day,PDO::PARAM_STR);
$stmt->bindValue(":impression",$impression,PDO::PARAM_STR);
$stmt->bindValue(":url",$url,PDO::PARAM_STR);
$stmt->bindValue(":starring",$starring,PDO::PARAM_STR);
$stmt->bindValue(":director",$director,PDO::PARAM_STR);
$stmt->bindValue(":id",$id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");
  exit;
}
?>

