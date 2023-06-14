<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color:rgb(25, 112, 156);">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/mboranLogo.png" class="img-fluid rounded-top" height="30px" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="background-repeat: no-repeat;">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/nasiboran1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <img src="img/mboranLogo.png" alt="">
                <h1 class="text-light fw-bold display-5">Haloo Cah!!</h1>
                <p class="lead text-light">Mboran merupakan website yang dibuat untuk memberikan rekomendasi penjual
                    Nasi Boranan
                    pada pelanggan yang membutuhkan rekomendasi sesuai dengan kriteria yang diinginkan.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                        <a href="/rekomendasi" class="text-light">Rekomendasi Nasi Boranan</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center border border-5 rounded">
            <h1 class="text-center text-light">
                Sejarah Nasi Boranan
            </h1><br><br>
            <div class="col text-light">Nasi Boranan Muncul pertama kali di Dusun Kaotan, Desa Sumberejo,
                Kecamatan/Kabupaten Lamongan. Nama boranan dicomot dari kalimat boran yang berarti 'wakul' sebagai wadah
                atau tempat nasi. Boran sendiri terbuat dari anyaman bambu yang dibentuk sedemikian rupa agar lebih
                praktis dan memudahkan sebagai wadah nasi secara tradisional.
            </div>
            <div class="col text-light">Nasi Boranan memiliki cita rasa yang khas gurih asin pedas dan memiliki banyak
                pilihan lauk mulai dari ayam, tahu, tempe, ikan sili, ikan bandeng, jeroan dan masih banyak lalinnya,
                juga terdapat kulupan (urap-urap) dan disertai rempeyek yang membuatnya lebih enak dinikmati
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid px-4 py-5" id="custom-cards"
        style="background-image: url('img/rempah.jpg'); background-size:100% 100%;">
        <h2 class="pb-2 border-bottom text-center text-light">Nasi Boranan Di Lamongan</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col p-5">
                <div class="card h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang1.jpg'); background-position:center; background-repeat:no-repeat; background-size: cover; background-size:100% 100%;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ibu Lily</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/fotopedagang1.jpg" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col p-5">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang2.jpg'); background-size:100% 100%">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Mbak Ita</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col p-5">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang3.jpg'); background-size:100% 100%">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ibu Nur Aisyah</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col p-5">
                <div class="card h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang4.jpg'); background-position:center; background-repeat:no-repeat; background-size: cover; background-size:100% 100%;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ibu Suharni</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="img/fotopedagang1.jpg" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col p-5">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang5.jpg'); background-size:100% 100%">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ibu Latri</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col p-5">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('img/fotopedagang6.jpg'); background-size:100% 100%">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ibu Hj Sumiah</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Lamongan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 text-light">Tari Boranan Asal Lamongan</h1>
                <p class="lead text-light">Tari Boran adalah tarian tradisional dari Lamongan yang menggambarkan
                    kehidupan para penjual nasi boran yang menjajakan dagangannya dan berinteraksi dengan pembeli.
                    Tarian ini selain kaya akan nilai seni dan budaya, namun juga banyak terdapat nilai filosofis di
                    dalamnya. Tari Boran ini merupakan tarian tradisional yang sangat terkenal di Lamongan dan menjadi
                    salah satu tarian khas disana.
                </p>
                <p class="lead text-light">
                    Tari Boran terinspirasi dari para penjual nasi boran, yaitu makanan tradisional khas dari Lamongan,
                    Jawa Timur. Pada jaman dahulu para penjual nasi boran menjajakan dagangannya dengan cara menggunakan
                    Wakul atau wadah nasi yang terbuat dari bambu dan ditaruh diatas kepala mereka untuk membawanya.
                    Untuk menjajakannya mereka berjalan kaki dan menawarkan dagangannya kepada setiap orang yang
                    dijumpainya. Di bawah panasnya terik matahari dan kerasnya kehidupan mereka berjuang untuk mencari
                    rejeki. Dari perjuangan mereka itulah yang menginspirasi para seniman di Lamongan untuk menciptakan
                    Tari Boran ini.
                </p>
                <p class="lead text-light">
                    Keindahan dari Tari Boran ini terletak pada gerakannya yang indah dan tersusun rapi. Dalam pertunjukannya, Tari Boran ini dilakukan secara berkelompok sehingga formasi dan kekompakan sangat penting di sini. Gerakan Tari Boran ini cenderung gerakan yang sederhana dan penuh makna. Setiap gerakan dalam Tari Boran ini menggambarkan aktivitas para penjual nasi boran pada jaman dahulu, mulai dari menyiapkan makanan sampai menjualkannya kepada pelanggan.
                </p>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-5" src="img/tariboranan.jpg" alt="" width="1080"
                    style="image-rendering: optimizeQuality;">
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center">Surya Indra Permana</h1> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
