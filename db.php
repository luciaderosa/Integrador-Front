<?php
session_start();

# configuration data for mysql
define('host', 'localhost');
define('user', 'codoacodo');
define('password', '((@yz/o-f9bn3RZg');
define('database', 'conferencias');

mysqli_report(MYSQLI_REPORT_ERROR);
$conn= mysqli_connect(
    host,
    user,
    password,
    database
);

// if(isset($conn)){
//     echo 'DB conectada';
// }

?>
