<?php
include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["u_id"]) || $_POST["u_id"]=="" ||
  !isset($_POST["pass"]) || $_POST["pass"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$u_id      = $_POST["u_id"];
$pass      = $_POST["pass"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, u_id, pass)
VALUES(NULL,:u_id,:pass)");
$stmt->bindvalue(":u_id",$u_id,PDO::PARAM_STR);
$stmt->bindvalue(":pass",$pass,PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: login.php");
  exit;
}
?>
