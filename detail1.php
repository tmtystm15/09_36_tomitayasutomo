<?php
include("functions.php");
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）

$id = $_GET["id"];

//1.  DB接続します
$pdo = db_con();
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_table WHERE id=:id");
  $stmt->bindvalue(":id",$id,PDO::PARAM_INT);
  $status = $stmt->execute();
  
  //３．データ表示
  $view="";
  if($status==false){
    //execute（SQL実行時にエラーがある場合）
    error_db_info($stmt);
  }else{
    $row = $stmt->fetch();
    
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;margin:10px;}</style>
</head>
<body>

  <!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select2.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>映画日記の内容</legend>
     <label>タイトル：<input type="text" name="title" value="<?=$row["title"]?>" readonly="readonly"></label><br>
     <label>見た日：<input type="date" name="day" value="<?=$row["day"]?>"readonly="readonly"></label><br>
     <label>主演：<input type="text" name="starring" value="<?=$row["starring"]?>"readonly="readonly"></label><br>
     <label>監督：<input type="text" name="director" value="<?=$row["director"]?>"readonly="readonly"></label><br>
     <label>感想：<input type="text" name="impression" value="<?=$row["impression"]?>"readonly="readonly"></label><br>
     <label>関連URL：<input type="url" name="url" value="<?=$row["url"]?>"readonly="readonly"></label><br>
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>

<a href="select2.php">戻る</a>





