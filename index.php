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
    <div>
      <img src="assets/foto/IMG_20230817_160745_190.jpg" alt="Foto Profil" class="rounded-circle shadow mb-3 profile-img">
      <h1 class="fw-bold mb-1">Gilang Irmawan</h1>
      <h4 class="text-primary mb-3">Frontend Developer</h4>
      <p class="lead">Membangun website modern, responsif & interaktif.</p>
    </div>
  </section>

  <?php include 'inc/footer.php'; ?>
</body>
</html>
