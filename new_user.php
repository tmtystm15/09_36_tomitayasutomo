<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>新規登録</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">新規登録</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="registration.php" method="post">
  USER NAME:<input type="text" name="u_id" />
  PW:<input type="password" name="pass" />
  <input type="submit" value="登録" />
</form>
<a class="navbar-brand" href="select2.php">ログインせずに使う</a>
</body>
</html>