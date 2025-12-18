<?php
session_start(); //เริ่มใช้งาน Session

$_SESSION['username'] = "Jantharaporn";
$_SESSION['role'] = "admin";

echo "สร้าง Session เรียบร้อย";

?>