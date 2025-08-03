<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us | Gilang Irmawan Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .bg-contact {
      background: #e5e7eb;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .contact-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.07);
      padding: 2.5rem;
      max-width: 500px;
      margin: 2rem auto;
    }
  </style>
</head>
<body>
  <?php include 'inc/navbar.php'; ?>

  <section class="bg-contact py-5">
    <div class="container">
      <div class="contact-card">
        <h2 class="mb-3 text-primary fw-bold text-center">Contact Us</h2>
        <form method="post" action="">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat email" required>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tuliskan pesan anda..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
        </form>
        <hr class="my-4">
        <div class="text-center">
          <div class="mb-1">
            <strong>Email:</strong> <a href="mailto:irmawangilang9@gmail.com">irmawangilang9@gmail.com</a>
          </div>
          <div class="mb-1">
            <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/gilang-irmawan-094b72363" target="_blank">linkedin.com/in/gilang-irmawan-094b72363</a>
          </div>
          <div class="mb-1">
            <strong>GitHub:</strong> <a href="https://github.com/Gilangirmawan" target="_blank">github.com/Gilangirmawan</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/footer.php'; ?>
</body>
</html>
