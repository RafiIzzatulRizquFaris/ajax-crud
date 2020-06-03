<?php
include('../connection.php');
$connection = openConn();

$id_siswa = $_POST['id_siswa'];

$query = "DELETE FROM `tbl_siswa` WHERE `tbl_siswa`.`id` = $id_siswa ";

if ($result = mysqli_query($connection, $query)) {
    $response = array(
        'status' => 200,
        'status_message' => 'Success Delete'
    );
}
header('json app');
echo json_encode($response);