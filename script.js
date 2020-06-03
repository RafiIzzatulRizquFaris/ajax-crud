$(document).ready(function () {
    $.get('operation/show_data.php', function (data, status) {
        $.each(JSON.parse(data), function (key, value) {
            $('#tableBody').append('<tr><th scope="row" class="id">' + value.id + '</th><td class="nama">' + value.nama_siswa + '</td><td>' + value.alamat + '</td><td>' + value.jenis_kelamin + '</td><td>' + value.tgl_masuk + '</td><td>' + value.jurusan + '</td><td>' + value.biodata + '</td><td><button type="button" class="btn btn--radius-2 btn--red" onclick="deleteData(' + value.id + ')">Hapus</button></td></tr>')
        })

    })

    $('#tableBody').on('click', 'tr', function () {
        let nama_siswa = $(this).children('.nama').text()
        console.log(nama_siswa)
    })
})

function deleteData(id) {
    $.post('operation/delete_data.php', {
        id_siswa: id
    }, function (data, status) {
        $.each(JSON.parse(data), function (key, value) {
            console.log(value.status_message)
        })
    })
}