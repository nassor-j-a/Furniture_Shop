
<?php

define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'students');

   $dbc = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
   OR die('Could not connect to server!' .
   mysqli_connect_error());
/*if (!$dbc) {
    die("Could not connect to server! " . 
    mysqli_connect_error());
*/


/*
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'jamal190');
   define('DB_DATABASE', 'students');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$db) {
    die("Could not connect to server! " . 
    mysqli_connect_error());
}

$servername = "localhost";
$username = "root";
$password = "jamal190";
$db = "students";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . 
    	mysqli_connect_error());
}

/*
define('DB_USERAME', 'root');
define('DB_PASSWORD', 'jamal190');
define('DB_HOST', 'localhost');
define('DB_NAME', 'students');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to server!' .
mysqli_connect_error());

*/

?>

