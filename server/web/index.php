<?php
$frontendUrl = 'http://localhost:8088';
session_start();
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin:' . $frontendUrl);
if (!$_SESSION['TIME']) {
    $_SESSION['TIME'] = date('H:i:s');
}
echo "Время, берется из сессии - " . $_SESSION['TIME'];