$(document).ready(function () {
    $.get('operation/show_data.php', function (data, status) {
        $.each(JSON.parse(data), function (key, value) {
            $('#tableBody').append('<tr><th scope="row">' + value.id + '</th><td class="nama">' + value.nama_siswa + '</td><td>' + value.alamat + '</td><td>' + value.jenis_kelamin + '</td><td>' + value.tgl_masuk + '</td><td>' + value.jurusan + '</td><td>' + value.biodata + '</td></tr>')
        })

    })

    $('#tableBody').on('click', 'tr', function () {
        let nama_siswa = $(this).children('.nama').text()
        console.log(nama_siswa)
    })
})