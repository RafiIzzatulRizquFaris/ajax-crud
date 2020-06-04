<?php
include('../connection.php');
$connection = openConn();

$query = "SELECT * FROM `tbl_siswa`";

$result = mysqli_query($connection, $query);
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Biodata</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        <?php
        while ($a = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <th scope="row" class="id"><?php echo $a['id'] ?></th>
            <td class="nama"><?php echo $a['nama_siswa'] ?></td>
            <td><?php echo $a['alamat'] ?></td>
            <td><?php echo $a['jenis_kelamin'] ?></td>
            <td><?php echo $a['tgl_masuk'] ?></td>
            <td><?php echo $a['jurusan'] ?></td>
            <td><?php echo $a['biodata'] ?></td>
            <td><button type="button" class="btn btn--radius-2 btn--red btn-delete"
                    id="<?php echo $a['id'] ?>">Hapus</button>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>