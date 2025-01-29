<?php
session_start(); // เริ่มต้น session
session_destroy();
header("Location: login.php");

?>