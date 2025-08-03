<?php $page = 'about'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Me | Gilang Irmawan Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'inc/navbar.php'; ?>

  <!-- ABOUT ME SECTION -->
  <section id="about" class="slide-section py-5 bg-dark text-white" style="padding-top:120px;">
    <div class="container">
      <h2 class="mb-4 text-primary fw-bold">About Me</h2>
      <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="assets/foto/IMG-20250803-WA0016.jpg" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="width:100%; max-width:350px;">
        </div>
        <div class="col-md-8">
          <ul class="list-unstyled fs-5 mb-3">
            <li><strong>Nama:</strong> Gilang Irmawan</li>
            <li><strong>Tempat, Tanggal Lahir:</strong> Brebes, 18 September 2003</li>
            <li><strong>Alamat:</strong> Dk. Karangnangka, Desa Manggis, Sirampog, Brebes, Jawa Tengah</li>
            <li><strong>Email:</strong> <a href="mailto:irmawangilang9@gmail.com">irmawangilang9@gmail.com</a></li>
            <li><strong>No. HP:</strong> 0858-6642-6295</li>
          </ul>
          <p>
            Saya adalah seorang<strong> Mahasiswa Program Studi Informatika</strong> yang sedang menempuh pendidikan sarjana di Universitas Peradaban Bumiayu.<br>
            Saat ini saya sedang menempuh semester 6, dan memiliki ketertarikan dalam bidang pengembangan perangkat lunak.
          </p>
          
          <!-- PROGRESS BAR SKILL -->
          <div class="mt-4">
            <h5 class="fw-bold mb-3 text-info">Kemampuan Bahasa Pemrograman</h5>
            <div class="mb-2">
              <span class="d-flex justify-content-between">
                <span>PHP</span><span>90%</span>
              </span>
              <div class="progress skill-progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="mb-2">
              <span class="d-flex justify-content-between">
                <span>PYTHON</span><span>80%</span>
              </span>
              <div class="progress skill-progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="mb-2">
              <span class="d-flex justify-content-between">
                <span>HTML</span><span>70%</span>
              </span>
              <div class="progress skill-progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="mb-2">
              <span class="d-flex justify-content-between">
                <span>CSS</span><span>60%</span>
              </span>
              <div class="progress skill-progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- Tambahkan bahasa lain jika ingin -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/footer.php'; ?>
</body>
</html>
