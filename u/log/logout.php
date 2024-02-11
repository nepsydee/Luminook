<?php
require '../data/setting.php';
session_destroy();
header("location: login.php" );
exit();
?>