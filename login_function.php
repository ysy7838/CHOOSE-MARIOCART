<?php
require_once("tmp/database.php");

$login_id = isset($_POST['login_id']) ? $_POST['login_id'] : null;
$login_pw = isset($_POST['login_pw']) ? $_POST['login_pw'] : null;

if ($login_id == null || $login_pw == null){
    header("Location: /login.php");
    exit();
}

$member_data = database_existing("select * from tbl_member where login_id = ?", array($login_id));

if ($member_data == null || count($member_data) == 0){
    header("Location: /login.php");
    exit();
}

$is_match_password = password_verify($login_pw, $member_data[0]['login_pw']);

if ($is_match_password === false){
    header("Location: /login.php");
    exit();
}

session_start();
$_SESSION['member_id'] = $member_data[0]['member_id'];

header("Location: /list.php");
