<?php
require '../data/setting.php';
session_destroy();
header("location: adminlogin.php" );
exit();
?>