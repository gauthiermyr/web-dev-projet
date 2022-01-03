<?php

$success = session_start();
$success = session_destroy();
if($success) $_SESSION = array();
header('Location: ../../index.php');

