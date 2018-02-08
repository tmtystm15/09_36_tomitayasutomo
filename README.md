36 富田康友
====

login.php
ログイン、新規ユーザー登録、ログインせずに使用するの３行動ができるようにしました。

ログイン→ユーザー登録済み（gs_user_tableに登録済み）ユーザーはID/PASSの入力でログインができます。ID・PASSが一致しない場合はcant_login.phpでエラーメッセージを出しログイン画面に戻る仕様です。ID・PASSが一致した場合、select.phpに遷移し、一覧を表示します。ログイン後は情報の新規登録、修正、削除をできるようにしました。

新規登録→new_user.phpに遷移し、新規ユーザー登録できるようにしました。
登録ボタンを押してregistration.phpでdbのgs_user_tableに情報を追加。login.phpに戻ってログインさせる流れです。

ログインせずに使用→ログインせずに使用を押すと一覧画面（select2.php)に遷移します。select2.phpはログイン時のselect.phpと違い、情報の登録、修正、削除機能を外し、閲覧のみ可能としています。

index.php → 情報の新規登録
insert.php → 登録情報をdbに追加
delete.php → 削除
update.php → 情報の更新
logout.php → ログアウト

デザインまで手が回りませんでした・・・


