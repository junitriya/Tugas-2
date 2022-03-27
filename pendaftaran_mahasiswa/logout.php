<?php  

// Lampirkan dbconfig 

require_once "config-db.php"; 

// Logout! hapus session user 

$user->logout(); 

// Redirect ke login 

header('location: index.php'); 

?> 