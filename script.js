$(document).ready(function () {
    $.ajaxSetup({
        cache: false
    })

    $('.data').load('operation/show_data.php')

    $(document).on('click', '.btn-delete', function () {
        let id = $(this).attr('id')
        console.log(id)
        $.post('operation/delete_data.php', {
            id_siswa: id
        }, function (data, status) {
            console.log(status)
            $('.data').load('operation/show_data.php')
        })
    })


    $('#tableBody').on('click', 'tr', function () {
        let nama_siswa = $(this).children('.nama').text()
        console.log(nama_siswa)
    })
})