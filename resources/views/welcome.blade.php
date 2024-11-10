<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya | ERGUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/profil.jpg" type="image/x-icon">
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('.navbar-toggler');
    button.addEventListener('click', function() {
        const target = document.querySelector(this.getAttribute('data-bs-target'));
        if (target) {
            target.classList.toggle('show');
        }
    });
});
</script>
</head>
<body id="Home">

<!-- Halaman CSS -->
<style>
    body {
        min-height: 2000px;
    }
    .jumbotron {
        padding-top: 8rem;
        background-color: rgb(70, 203, 215);
    }
    section {
        padding-top: 6rem;
    }
    #Contact {
        padding-top: 6rem;
    }
    a {
        text-decoration: none;
        color: inherit !important;
    }
    .name {
        color: white !important;
    }

</style>
<!-- Akhir CSS -->

<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-3 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand name" href="#">ERGUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container-fluid">
        <a class="navbar-brand name" href="#">ERGUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="navbar-collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!--awal Jumbtron -->
    <section class="jumbotron text-center">
    <img src="img/profil.jpg" alt="Profile" width="150" class="rounded-circle img-thumbnail">
  <h1 class="display-4">ERGUS</h1>
  <p class="lead">Student | Programmer | Developer</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,64C384,53,480,75,576,96C672,117,768,139,864,154.7C960,171,1056,181,1152,170.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!-- Awal About -->
<section id="about">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-6 text-center">
            <div class="col-md-4">
                <p>Perkenalkan Nama saya Ergus, Asal saya dari desa Tanjung Keracut dusun Sembua' Segantong Kecamatan Teluk Keramat dan sekarang saya berkuliah di Politeknik Negeri Sambas.</p>
            </div>
            <div class="col-md-4">
                <p>Untuk Riwayat pendidikan saya, saya pernah sekolah di SDN 36 Sembuak Segantong Kemudian SMP di SMPN 5 Teluk keramat kemudian melanjutkan ke MAN 1 SAMBAS</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,288L48,261.3C96,235,192,181,288,170.7C384,160,480,192,576,224C672,256,768,288,864,250.7C960,213,1056,107,1152,90.7C1248,75,1344,149,1392,186.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!-- Akhir About -->

<!-- Awal Project -->
<section id="projects" style="background-color: #a2d9ff;">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>My Project</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <p class="card-text"><a href="https://egsstore.rf.gd/" target="_blank">Projek Website E-Commerce,Mata Kuliah E-commerce.</a></p>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/2.png" class="card-img-top" alt="..." width="400">
            <div class="card-body text-center">
                <p class="card-text"><a href="https://youtu.be/5U610GqNWJ4?si=cTfpmDHpcuXasPvx" target="_blank">Projek Aplikasi Data Desa Tanjung Keracut, Mata Kuliah Pemrograman Visual.</a></p>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/3.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <p class="card-text"><a href="https://youtu.be/OuddH2kV3M0?si=Jx40CxVCEryXEY5Y" target="_blank">Projek CRUD reservasi Hotel, Mata Kuliah Dasar Pemrograman Web.</a></p>
            </div>
            </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L48,261.3C96,235,192,181,288,170.7C384,160,480,192,576,224C672,256,768,288,864,250.7C960,213,1056,107,1152,90.7C1248,75,1344,149,1392,186.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!-- Akhir Project -->

<!-- Awal Kontak -->
        <div id="contact">
            <div class="container mt-auto">
                <div class="row text-center">
                    <div class="col">
                        <h2>Contact Me</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"/>
                        <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label></label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,229.3C672,235,768,213,864,192C960,171,1056,149,1152,160C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
<!-- Akhir Kontak -->

<!-- Awal Footer -->
    <footer class="bg-primary text-white text-center pb-3">
        <p><i class="bi bi-c-circle"></i> 2024 Copyright by <a href="https://wa.me/6283140063145" class="text-white fw-bold mb-5 gap-5" target="_blank">Ergus</a></p>
        <div class="d-flex justify-content-center gap-3">
        <div>
            <a href="https://wa.me/6283140063145" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>
        <div>
            <a href="https://www.facebook.com/profile.php?id=100077115692940&locale=id_ID" target="_blank"><i class="bi bi-facebook" ></i></a>
        </div>
        <div>
            <a href="https://www.instagram.com/ergus136/profilecard/?igsh=YTNrczQ0YTkyZGdn" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
        </div>
    </footer>
<!-- Akhir Footer -->
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6sAmH0uaCPC93hE5HE1KwIO2FuZ3" crossorigin="anonymous"></script>
</body>
</html>