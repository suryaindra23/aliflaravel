<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/mboranLogo.png" alt="" width="auto"
                        height="30"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Home <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rekomendasi">Rekomendasi Boranan</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <div class="container-fluid">
            <h1 class="text-center">Hii Silahkan Pilih Rekomendasi Nasi Boranan yang ada di kota Lamongan</h1>
        </div>

        <form method="GET" action="{{ route('hasilRekomendasi') }}" class="form-horizontal">
            <div class="form-check">
                <label class="col-sm-2 control-label form-check-label" for="form-field-1">
                    Rasa Sambal
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="pedas" name="rasa_sambal" <?php echo isset($_POST['rasa_sambal']) ? ($_POST['rasa_sambal'] == 'pedas' ? "checked" : "") : ""; ?> required="">
                        Pedas
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="tidak pedas" name="rasa_sambal" <?php echo isset($_POST['rasa_sambal']) ? ($_POST['rasa_sambal'] == 'tidak pedas' ? "checked" : "") : ""; ?> required="">
                        Tidak Pedas
                    </label>
                </div>
            </div>
            <div class="form-check">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Warna Sambal
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="merah" name="warna_sambal" <?php echo isset($_POST['warna_sambal']) ? ($_POST['warna_sambal'] == 'merah' ? "checked" : "") : ""; ?> required="">
                        Merah
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="oranye" name="warna_sambal" <?php echo isset($_POST['warna_sambal']) ? ($_POST['warna_sambal'] == 'oranye' ? "checked" : "") : ""; ?> required="">
                        Oranye
                    </label>
                </div>
            </div>
            <div class="form-check">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Harga
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="sangat murah" name="harga" <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'sangat murah' ? "checked" : "") : ""; ?> required="">
                        Sangat Murah
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="murah" name="harga" <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'murah' ? "checked" : "") : ""; ?> required="">
                        Murah
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="mahal" name="harga" <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'mahal' ? "checked" : "") : ""; ?> required="">
                        Mahal
                    </label>
                </div>
            </div>
    
            <div class="form-check">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Porsi Makan
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="cukup" name="porsi_makan" <?php echo isset($_POST['porsi_makan']) ? ($_POST['porsi_makan'] == 'cukup' ? "checked" : "") : ""; ?> required="">
                        Cukup
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="banyak" name="porsi_makan" <?php echo isset($_POST['porsi_makan']) ? ($_POST['porsi_makan'] == 'banyak' ? "checked" : "") : ""; ?> required="">
                        Banyak
                    </label>
                </div>
            </div>
            <div class="form-check">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Parkir
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="tidak" name="parkir" <?php echo isset($_POST['parkir']) ? ($_POST['parkir'] == 'tidak' ? "checked" : "") : ""; ?> required="">
                        Tidak
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="ya" name="parkir" <?php echo isset($_POST['parkir']) ? ($_POST['parkir'] == 'ya' ? "checked" : "") : ""; ?> required="">
                        Ya
                    </label>
                </div>
            </div>
            <div class="form-check">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Tempat Makan
                </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="tidak" name="tempat_makan" <?php echo isset($_POST['tempat_makan']) ? ($_POST['tempat_makan'] == 'tidak' ? "checked" : "") : ""; ?> required="">
                        Tidak
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="square-black" value="ya" name="tempat_makan" <?php echo isset($_POST['tempat_makan']) ? ($_POST['tempat_makan'] == 'ya' ? "checked" : "") : ""; ?> required="">
                        Ya
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 pull-right">
                    <input name="submit" type="submit" value="Submit" class="control-label btn btn-success">
                </div>
            </div>    
            @if (isset($penjual))
        <h2>Hasil Rekomendasi</h2>
        @if ($penjual->isEmpty())
            <p>P</p>
        @else
            <ul>
                @foreach ($penjual as $namaPenjual)
                    <li>{{ $namaPenjual }}</li>
                @endforeach
            </ul>
            <ul>
                @foreach ($alamat as $alamatPenjual)
                    <li>{{ $alamatPenjual }}</li>
                @endforeach
            </ul>
        @endif
    @endif
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
