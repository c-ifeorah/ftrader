<?php
// mysql hostname
$hostname = 'xxx ';
// mysql database name
$dbname = 'db_xxx';
// mysql username
$username = 'ft_xxx';
// mysql password
$password = 'ft_xxx';
// Database Connection using PDO
try {
	$r_Db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);	// Creating new PDO - Database connection
	$r_Db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	// Setting PDO attributes
} catch(PDOException $e) {
    	echo "Connection to server failed, plelase contact the administrator ";
}
//If we will not use catch statement, then in case of error zend engine terminate the script and display a back trace. This back trace will likely reveal the full database connection details, including the username and password.  
?>