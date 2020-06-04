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

// INSERT INTO `tbl_siswa` (`id`, `nama_siswa`, `alamat`, `jenis_kelamin`, `tgl_masuk`, `jurusan`, `biodata`, `avatar`) VALUES (NULL, 'Rafi Izzatul Rizqu Faris', 'Jl. Pemancar II No. 1', 'Laki - laki', '2020-06-03', 'Rekayasa Perangkat Lunak', 'just a guy who love to code', NULL);