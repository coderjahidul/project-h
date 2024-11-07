<?php 
session_name('mygrocoder');
session_start();
echo "Session: " . $_SESSION['name'] . "\n";