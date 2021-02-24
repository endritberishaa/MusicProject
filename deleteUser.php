<?php
include_once 'UserMapper.php';
$userId = $_GET['id'];
$mapper = new UserMapper();
$mapper->deleteUser($userId);
header("Location:Dashboard.php");


