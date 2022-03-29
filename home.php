<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Portfolio</title>
</head>

<body>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Rian Maulana</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor02">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end navbar -->

            <!-- home -->
            <div id="home">
                <div class="row">
                    <div class="col-md-3 pt-5"> <br><br><br><br>
                        <h1 class="text-right">Selamat Datang di Halaman Saya</h1>
                    </div>
                    <div class="col-md-9">
                        <center>
                            <object data="svg/home.svg" width="500" height="500"> </object>
                        </center>
                    </div>
                </div>
            </div>
            <!-- end home -->

            <!-- profile -->
            <div id="profile">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/pas_photo.jpg" width="150px" height="auto" alt="Pas Photo" class="float-lg-end rounded">
                    </div>
                    <div class="col-md-8">
                        <h1>Rian Maulana</h1>
                        <p>Perkenalkan saya seorang web developer dengan fokus pada front-end dan memiliki
                            motivasi tinggi dan kreativitas. Selain itu berkeinginan untuk bekerja sebagai pengembang web
                            khususnya dalam pengimplementasikan antarmuka dari wireframe dan mockup menggunakan html css dan javascript.
                            Selain itu saya juga memiliki kemampuan pada bagian back-end, khususnya menggunakan framework laravel.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="nav nav-tabs mt-3">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#pendidikan">Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pengalaman_kerja">Pengalaman Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#skill">Keahlian</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content m-3">
                        <div class="tab-pane fade active show" id="pendidikan">
                            <table class="table table-hover">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Pendidikan</th>
                                </tr>
                                <tr>
                                    <td>2019 - Sekarang</td>
                                    <td>STMIK Amik Bandung</td>
                                </tr>
                                <tr>
                                    <td>2016 - 2019</td>
                                    <td>SMKN 4 Bandung</td>
                                </tr>
                                <tr>
                                    <td>2013 - 2016</td>
                                    <td>SMPN 31 Bandung</td>
                                </tr>
                                <tr>
                                    <td>2007 - 2013</td>
                                    <td>SDN Babakan Jati 2 Bandung</td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pengalaman_kerja">
                            <table class="table">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Pekerjaan</th>
                                    <th>Tempat</th>
                                </tr>
                                <tr>
                                    <td>2020 - Sekarang</td>
                                    <td>Web Developer</td>
                                    <td>BUMY STMIK Amik Bandung</td>
                                </tr>
                                <tr>
                                    <td>Okt 2018 - Des 2018</td>
                                    <td>Web Developer Internship</td>
                                    <td>PT. Sagara Asia</td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="skill">
                            <button type="button" class="btn btn-primary disabled">HTML</button>
                            <button type="button" class="btn btn-primary disabled">CSS</button>
                            <button type="button" class="btn btn-primary disabled">Javascript</button>
                            <button type="button" class="btn btn-primary disabled">PHP</button>
                            <button type="button" class="btn btn-primary disabled">Bootstrap</button>
                            <button type="button" class="btn btn-primary disabled">JQuery</button>
                            <button type="button" class="btn btn-primary disabled">Laravel</button>
                            <button type="button" class="btn btn-primary disabled">MySQL</button>
                            <button type="button" class="btn btn-primary disabled">Git</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end profile -->

            <div id="portfolio">
                <h3 class="mt-5">Portfolio</h3>
                <table class="table">
                    <tr>
                        <td>Fullstack Developer</td>
                        <td>Sistem Keuangan STMIK Amik Bandung</td>
                    </tr>
                    <tr>
                        <td>Front End Developer</td>
                        <td>PMB STMIK Amik Bandung</td>
                    </tr>
                    <tr>
                        <td>Front End Developer</td>
                        <td>SIMAPO (Sistem Informasi Manajemen Apotek)</td>
                    </tr>
                    <tr>
                        <td>Front End Developer</td>
                        <td>Aplikasi Resep Makanan (Apa Resepnya)</td>
                    </tr>
                </table>
                <h3 class="mt-5">Gallery</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card"><img src="data:image/jpeg;base64,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" alt=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"><img src="https://www.tipspintar.com/wp-content/uploads/2019/06/Apa-Itu-Coding.jpg" alt=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqtB2bsjI3zn-uERoyaXkuUZbSSl-gcI5lnWWmfaqNnpDia5RBRX3Yu7CAGdiyDa3uysU&usqp=CAU" alt=""></div>
                    </div>
                </div>
                <h3 class="mt-5">Video</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <iframe src="https://www.youtube.com/embed/WTi7u9q76Kw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <iframe src="https://www.youtube.com/embed/8aO42C6mpMs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <iframe src="https://www.youtube.com/embed/Vjh4DJPTLyE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>

            <!-- footer -->
            <div id="footer">
                <div class="alert alert-dismissible alert-primary mt-5">
                    Copyright &copy; Rian Maulana 2022, All Right Reserved
                </div>
            </div>
            <!-- end footer -->
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>