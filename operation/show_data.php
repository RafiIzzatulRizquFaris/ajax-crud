<?php
include('../connection.php');
$connection = openConn();

$query = "SELECT * FROM `tbl_siswa`";

$response = array();
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $response[] = $row;
}
header('json app');
echo json_encode($response);