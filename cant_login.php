<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">LOGIN</nav>
</header>
<p style="color:red;">IDもしくはパスワードに誤りがあります。</p>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
  登録者ID:<input type="text" name="u_id" />
  PW:<input type="password" name="pass" />
  <input type="submit" value="LOGIN" />
</form>
<a class="navbar-brand" href="new_user.php">新規登録</a>
<a class="navbar-brand" href="select2.php">ログインせずに使う</a>
</body>
</html>