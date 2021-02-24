<?php

include_once 'UserMapper.php';
include_once 'SimpleUser.php';
$userId = $_GET['id'];
$username = $_GET['username'];
$simpleUser = new SimpleUser($username, "", 0, "");
$mapper = new UserMapper();
$mapper->edit($simpleUser, $userId);
header("Location:Dashboard.php");
