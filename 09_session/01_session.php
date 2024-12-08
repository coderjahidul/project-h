<?php
// session_start();
// $_SESSION['count'] = $_SESSION['count'] ?? 0;
// $_SESSION['count']++;
// echo "Session: " . $_SESSION['count'] . "\n";
// session_destroy();

session_name('mygrocoder');
session_start([
    'cookie_lifetime' => 60,
]);
$_SESSION['name'] = 'Jahidul Islam';
echo "Session: " . $_SESSION['name'] . "\n";