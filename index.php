<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home | Gilang Irmawan Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'inc/navbar.php'; ?>

  <!-- HOME SECTION -->
  <section class="slide-section d-flex align-items-center justify-content-center text-center">
    <div class="profile-card mx-auto text-center">
  <img src="assets/foto/IMG_20230817_160745_190.jpg" class="rounded-circle mb-3 shadow" alt="Gilang Irmawan" style="width:130px;height:130px;object-fit:cover;">
  <h1 class="fw-bold">Gilang Irmawan</h1>
  <a class="d-block mb-3 fw-semibold text-primary" style="text-decoration:none" href="#">Hanya Manusia Biasa</a>
  <p class="profile-desc">
    Mahasiswa aktif Program Studi Informatika di Universitas Peradaban yang memiliki ketertarikan pada pengembangan perangkat lunak dan sistem informasi. <br>
    Pernah mengerjakan beberapa proyek web menggunakan CodeIgniter, Laravel, dan Flask. <br>
    Memiliki kemampuan dasar dalam analisis sistem, pemrograman back-end, dan pengolahan data. <br>
    Terlibat dalam kegiatan organisasi serta terbiasa bekerja secara individu maupun dalam tim. <br>
    Saat ini sedang mencari pengalaman magang untuk mengasah keterampilan dan menambah wawasan di dunia kerja.
  </p>
</div>
  </section>

  <?php include 'inc/footer.php'; ?>
</body>
</html>
