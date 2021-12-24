<?php

$success = session_destroy();
if($success) $_SESSION = array();
echo json_encode(['success' => $success]);