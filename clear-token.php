<?php

session_start();

$_SESSION['access_token'] = null;

ob_start();
header('Location: /event-export/update.php');
ob_end_flush();
die();