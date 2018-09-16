<?php

include_once("koneksi.php");

$callbackrespon = $_GET['callback'];

$sql = "SELECT * FROM tbcustomer";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt,  SQLSRV_FETCH_ASSOC) ) {
      $cust_row['cust'][] = $row;
}

echo $callbackrespon."(".json_encode($cust_row).")";
sqlsrv_free_stmt( $stmt);
?>


