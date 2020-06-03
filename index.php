<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Input Warehouse</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="style.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Data Siswa</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="invoice.php">
                        <div class="form-row">
                            <div class="name">Nama Siswa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama_siswa">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="alamat_siswa">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Biodata</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="biodata_siswa">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Tanggal Masuk</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tahun_siswa"
                                                placeholder="1999">
                                            <label class="label--desc">Tahun</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="bulan_siswa"
                                                placeholder="12">
                                            <label class="label--desc">Bulan</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tanggal_siswa"
                                                placeholder="31">
                                            <label class="label--desc">Tanggal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kejuruan</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="kejuran_siswa">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Rekayasa Perangkat Lunak</option>
                                            <option>Multimedia</option>
                                            <option>Teknik Elektronik Informasi</option>
                                            <option>Broadcast</option>
                                            <option>Teknik Komputer Jaringan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Jenis Kelamin</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Laki - laki
                                    <input type="radio" name="gender_siswa">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Perempuan
                                    <input type="radio" name="gender_siswa">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                    <br>
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
                            </tr>
                        </thead>
                        <tbody id="tableBody"></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->