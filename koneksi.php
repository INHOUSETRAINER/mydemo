
<?php
$serverName = "tcp:192.168.56.1,50369"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"dbcustomer", "UID"=>"hery", "PWD"=>"purnama");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

/*if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
?>
