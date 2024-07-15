<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Mutiara Ilmu</title>
    <link rel="icon" href="dist/img/library.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- FontAwesome  -->
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="dist/img/library.png" alt="" width="50" height="40" />
            </a>
            <a class="navbar-brand" href="#">Perpustakaan Mutiara Ilmu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Dashbaord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fasilitas">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- !Navbar -->

    <!-- Banner -->

    <section class="hero">


        <div class="content text-center">
            <h1 class=" fw-bold ">Perpustakaan Mutiara Ilmu</h1>
            <a href="">Explore</a>
        </div>

        <div class="content text-center">
            <h2 class=" fw-bold ">mari belajar dengan lebih giat dan semoga kelak bisa </h2>
            
        </div>
    </section>

    <!-- !Banner -->


    <!-- Fasilitas -->
    <div class="container-fluid pt-5 pb-5 bg-light ">
        <div class="container text-center ">
            <h2 class="display-3 " id="fasilitas">Buku Kami</h2>
            <p>berikut merupakan buku buku yang popouler di perpustakaan kami , seperti :</p>
            <div class="row pt-4 gx-4 gy-4 ">

            <!-- BBUKU1 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bumi.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BUMI</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>
            
            <!-- BBUKU2 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bulan.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BULAN</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>


                <!-- BBUKU3 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bintang.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BINTANG</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU4 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/madilog.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">MADILOG</h5>
                            <h6 class="card-text">Penulis: Tan Malaka</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU5 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/aksimasa.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">AKSI MASA</h5>
                            <h6 class="card-text">Penulis: Tan Malaka</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU5 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/ekonomi.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">PENGANTAR EKONOMI</h5>
                            <h6 class="card-text">Penulis: sUUGIANTO</h6>
                            <button class="card-title-btn">Baca</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- !Fasilitas -->

    <!-- Tentang -->
    <div class="container-fluid pt-5 pb-5 ">
        <div class="container ">
            <h2 class="display-3 text-center " id="tentang">Tentang</h2>
            <p class="text-center ">Perpustakaan Online</p>
            <div class="clearfix pt-5">
                <img src="dist/img/perpusonline.jpg" class="col-md-6 float-md-end mb-3 crop-img bg-perpus" width="400" height="300" />
                <p>Pada dasarnya, Perpustakaan adalah sebuah tempat di mana seseorang bisa menemukan dan meminjam berbagai jenis buku dan media lainnya, seperti majalah, jurnal, koran, dan DVD. Perpustakaan umumnya memiliki koleksi buku yang luas dan beragam,
                    dari berbagai genre dan topik seperti fiksi, non-fiksi, sejarah, sains, teknologi, dan banyak lagi.</p>
                <p>Selain sebagai tempat untuk meminjam buku, perpustakaan mutiara ilmu juga berfungsi sebagai pusat informasi dan sumber daya untuk pendidikan dan penelitian. Di dalam perpustakaan, terdapat meja dan kursi untuk membaca dan belajar, serta
                    komputer dan akses internet untuk mencari informasi online.</p>
                <p>Perpustakaan online merupakan sumber daya yang sangat berharga bagi para pembaca. Dengan memiliki akses ke perpustakaan, siapapun dapat meningkatkan pengetahuan dan pemahaman tentang dunia, meningkatkan keterampilan membaca, menemukan
                    inspirasi, serta mengeksplorasi minat dan bakat mereka.</p>

            </div>
        </div>
    </div>
    <!-- !Tentang -->

    

    <!-- Client -->
    <div class="container-fluid pt-5 pb-5 client ">
        <div class="container text-center ">
            <div class="row pt-4 gx-4 gy-4 ">
                <div class="col ">
                    <img src="assets/image/logo_perpus_smk6.png " alt=" " />
                </div>
                <div class="col ">
                    <img src="assets/image/smk6.png " alt=" " />
                </div>
                <div class="col ">
                    <img src="assets/image/pku.png " alt=" " />
                </div>
            </div>
        </div>
    </div>
    <!-- !Client -->

    <!-- Contact -->
    <div class="container-fluid pt-5 pb-5 kontak ">
        <div class="container ">
            <h2 class="display-3 text-center " id="contact">Kontak Kami</h2>
            <p class="text-center ">Saran, komentar dan penilaian yang dapat membantu kami </p>
            <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                <strong>Terimakasih ! </strong> Saran anda adalah Motivasi bagi kami
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form action=" " name="myForm">
                <div class="row pb-3 ">
                    <div class="col-md-6 ">
                        <input type="text " class="form-control form-control-lg mb-3 " placeholder="Nama " name="nama" id="nama " />
                        <input type="email " class="form-control form-control-lg mb-3 " placeholder="Email " name="email" id="email " />
                        <input type="number " class="form-control form-control-lg " placeholder="No Handphone " name="nohp" id="nohp " />
                    </div>
                    <div class="col-md-6 ">
                        <textarea placeholder="Komentar " id=" " class="form-control form-control-lg mt-2 " cols="30 " rows="5 " name="komentar" id="komentar "></textarea>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <button type="submit " id="" class="form-control btn btn-success btn-kirim">Kirim</button>
                        <button class="btn btn-success btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                          </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- !Contact -->
    <div class="container text-center pt-5 pb-5 ">All Right Reserved RMZ &copy; 2023</div>
    <!-- SpreadSheet -->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbztSbRv6xypfSBKyWvjoOMUQl2rZH1ktkLFaFs6nXx_G9vcVKyQ4W5ujbpjjHTwUUuMpA/exec'
        const form = document.forms['myForm'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.alert');


        form.addEventListener('submit', e => {
            e.preventDefault()
                // Ketika tombol submit diklik
                // Tampilkan tombol loadin hilangkan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    myAlert.classList.toggle('d-none');
                    form.reset();
                    console.log('Success!', response)
                })

            .catch((error => console.error('Error!', error.message)))
        });
    </script>
    <!-- Boostraps JS -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="assets/Poppins-Regular.ttf"></script>

</body>

</html>
