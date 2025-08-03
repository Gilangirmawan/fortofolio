<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow" id="navbar-example">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Halo, Selamat Datang di Portofolio Gilang Irmawan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'home') ? 'active' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'about') ? 'active' : '' ?>" href="about.php">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
