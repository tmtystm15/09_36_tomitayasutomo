<?php
//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）
function db_con(){
        try {
            $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
            return $pdo;
            } catch (PDOException $e) {
            exit('データベースに接続できませんでした。'.$e->getMessage());
        }
    }

//SQL処理エラー
function error_db_info($stmt){
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }

//XSS:htmlspecialchars
function h($str){
        return htmlspecialchars($str,ENT_QUOTES);
    }

function logincheck(){
        if(
            !isset($_SESSION["chk_ssid"])||
            $_SESSION["chk_ssid"] != session_id()){
            header("Location: cant_login.php");
            exit();
            }else{
            session_regenerate_id(true);
            $_SESSION["chk_ssid"] = session_id();
            
            }
}

?>
