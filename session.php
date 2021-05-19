<?php
session_start();

$name = $_POST['msg'];
$_SESSION['msg'] = $name;

header('Location: editMsg.php');