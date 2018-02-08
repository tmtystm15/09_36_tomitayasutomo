<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>映画日記登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>映画日記</legend>
    <ul>
      <li class="form-item">
        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" class="uk-input" required>
      </li>
      <li class="form-item">
        <label for="day">見た日</label>
        <input type="date" name="day" id="day" class="uk-textarea"></input>
      </li>
      <li class="form-item">
        <label for="starring">主演</label>
        <input type="text" name="starring" id="starring" cols="30" rows="10" class="uk-textarea" required></input>
      </li>
      <li class="form-item">
        <label for="director">監督</label>
        <input type="text" name="director" id="director" cols="30" rows="10" class="uk-textarea" required></input>
      </li>
      <li class="form-item">
        <label for="impression">感想</label>
        <textarea name="impression" id="impression" cols="30" rows="10" class="uk-textarea" required></textarea>
      </li>
      <li class="form-item">
        <label for="url">関連URL</label>
        <input type="text" name="url" id="url" class="uk-textarea"></input>
      </li>
        </ul>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<a href="select.php">一覧へ</a>


</body>
</html>
