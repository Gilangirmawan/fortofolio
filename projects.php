<?php
$page = 'projects';
$github_username = 'Gilangirmawan';

// Fetch data dari GitHub API
$api_url = "https://api.github.com/users/$github_username/repos";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // penting agar tidak error di localhost
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$repos_json = curl_exec($ch);
curl_close($ch);

$repos = json_decode($repos_json);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Projects | Gilang Irmawan Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .bg-card-custom {
      background: #202020ff !important;   /* Abu-abu tua */
      transition: box-shadow 0.2s, transform 0.2s, background 0.2s;
      color: #fff;
      border: none;
    }
    .project-card {
      transition: box-shadow 0.25s, transform 0.2s, background 0.2s, color 0.2s;
    }
    .project-card:hover, .project-card:focus-within {
      box-shadow: 0 8px 32px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.08);
      transform: translateY(-7px) scale(1.03);
      background: #eceff1 !important;
      color: #222 !important;
    }
    .project-card:hover .card-title,
    .project-card:hover .card-text,
    .project-card:hover .btn {
      color: #222 !important;
    }
    .project-card:hover .btn-outline-primary {
      border-color: #222;
      color: #222 !important;
      background: #f7fafc;
      font-weight: 600;
    }
    .project-card:hover .btn-outline-primary:hover {
      background: #222 !important;
      color: #fff !important;
      border-color: #222;
    }
    .project-card .btn-outline-primary {
      transition: background 0.2s, color 0.2s, border-color 0.2s;
    }
    /* Sertifikat */
    .certificate-card {
      background: #f5f6fa;
      border: none;
      box-shadow: 0 1px 8px rgba(0,0,0,0.09);
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .certificate-card:hover {
      transform: translateY(-6px) scale(1.04);
      box-shadow: 0 8px 32px rgba(0,0,0,0.11);
      background: #eceff1;
    }
    .img-certificate {
      width: 100%;
      height: 170px;
      object-fit: cover;
      border-radius: 8px 8px 0 0;
      background: #fff;
    }
  </style>
</head>
<body>
  <?php include 'inc/navbar.php'; ?>

  <!-- SECTION PROJECTS -->
  <section id="projects" class="slide-section py-5 bg-dark text-white" style="padding-top:120px;">
    <div class="container">
      <h2 class="mb-5 text-primary fw-bold mt-5">My GitHub Projects</h2>
      <div class="row g-4">
        <?php if (is_array($repos)): ?>
          <?php foreach ($repos as $repo): ?>
            <div class="col-md-4 col-lg-3">
              <div class="card project-card h-100 shadow-sm bg-card-custom">
                <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" class="card-img-top" alt="GitHub Repo Logo">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title"><?= htmlspecialchars($repo->name) ?></h5>
                  <p class="card-text flex-grow-1">
                    <?= $repo->description ? htmlspecialchars($repo->description) : '<span class="text-muted">Tanpa deskripsi</span>' ?>
                  </p>
                  <a href="<?= htmlspecialchars($repo->html_url) ?>" target="_blank" class="btn btn-outline-primary btn-sm mt-auto">Lihat di GitHub</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="col-12 text-center text-danger">
            Gagal mengambil data dari GitHub. Coba refresh atau cek koneksi internet.
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- SECTION SERTIFIKAT -->
  <section id="certificates" class="py-5 bg-dark text-white">
    <div class="container">
      <h2 class="mb-4 text-primary fw-bold mt-5">Sertifikat Saya</h2>
      <div class="row g-4">
        <!-- Sertifikat 1 -->
        <div class="col-md-4 col-lg-3">
          <div class="card certificate-card h-100">
            <img src="assets/sertificate/Screenshot 2025-08-03 112229.png" class="img-certificate" alt="Sertifikat 1">
            <div class="card-body">
              <h6 class="card-title mb-1">Code Generation and Optimization Using IBM Granite</h6>
              <small class="text-muted">IBM Skills Build, 2025</small>
            </div>
          </div>
        </div>
        <!-- Sertifikat 2 -->
        <div class="col-md-4 col-lg-3">
          <div class="card certificate-card h-100">
            <img src="assets/sertificate/Screenshot 2025-08-03 112456.png" class="img-certificate" alt="Sertifikat 2">
            <div class="card-body">
              <h6 class="card-title mb-1">Use Generative AI for Software Development</h6>
              <small class="text-muted">IBM Skills Build, 2025</small>
            </div>
          </div>
        </div>
        <!-- Tambahkan sertifikat lain sesuai kebutuhan -->
        <!-- Sertifikat 3 -->
        <div class="col-md-4 col-lg-3">
          <div class="card certificate-card h-100">
            <img src="assets/sertificate/Screenshot 2025-08-03 112806.png" class="img-certificate" alt="Sertifikat 3">
            <div class="card-body">
              <h6 class="card-title mb-1">IBM Granite Models for Software Development</h6>
              <small class="text-muted">IBM Skills Build, 2025</small>
            </div>
          </div>
        </div>
        <!-- Creadly Badge 4 -->
        <div class="col-md-4 col-lg-3">
          <div class="card certificate-card h-100">
            <img src="assets/sertificate/Screenshot 2025-08-03 113147.png" class="img-certificate" alt="Sertifikat 2">
            <div class="card-body">
              <h6 class="card-title mb-1">Creadly Badge</h6>
              <small class="text-muted">Hactiv8 Indonesia, 2025</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/footer.php'; ?>
</body>
</html>
