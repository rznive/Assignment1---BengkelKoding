<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGlht9nvKMYPo-zFSAeTdQWIE4jdoF_ywKTw&s">
  <title>Homepage - Medicanism</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f2f7f6;
      color: #333;
      font-family: 'Roboto', sans-serif;
    }

    .navbar {
      background-color: #4CAF50; /* Hijau yang lembut */
      color: #fff;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .navbar-nav .nav-link {
      color: #fff !important;
    }

    .hero {
      height: 100vh;
      background: url('https://images.unsplash.com/photo-1583283607943-bd39516972d5?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4M3wwfDF8c2VhY2h8NHx8aGVhbHRoY2FyZWR8ZW58MHx8fHwxNjY4ODg2NjQz&ixlib=rb-1.2.1&q=80&w=1080') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      text-align: center;
      color: #fff;
    }

    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero h1 {
      font-size: 3rem;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
      position: relative;
      z-index: 1;
    }

    .hero p {
      font-size: 1.2rem;
      color: #fff;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
      position: relative;
      z-index: 1;
    }

    .btn-custom {
      background-color: #4CAF50; /* Hijau */
      color: #fff;
      border: 2px solid #4CAF50;
      text-transform: uppercase;
      font-weight: bold;
      padding: 10px 30px;
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #45a049;
      border: 2px solid #45a049;
      box-shadow: 0 0 15px rgba(72, 186, 72, 0.8);
    }

    .section {
      padding: 80px 0;
    }

    .card-custom {
      background: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
      text-align: center;
      color: #333;
    }

    .card-custom:hover {
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    footer {
      background-color: #4CAF50;
      color: #fff;
      padding: 30px 0;
      text-align: center;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">CyberHealth</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1 class="mb-3">Sistem Manajemen Kesehatan</h1>
    <p class="mb-4">Solusi digital untuk kemudahan layanan kesehatan yang lebih baik</p>
  </div>
</section>

<!-- Features -->
<section id="features" class="section">
  <div class="container">
    <div class="text-center mb-5">
      <p class="text-muted">Layanan kesehatan digital untuk dokter dan pasien yang lebih efisien</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card-custom">
          <h4>👨‍⚕️ Untuk Dokter</h4>
          <p>Dokter dapat memeriksa pasien dan menambah obat dengan cepat dan efisien melalui sistem digital.</p>
          <ul class="list-unstyled">
            <li>💊 Tambah Obat</li>
            <li>🩺 Periksa Pasien</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-custom">
          <h4>🧑‍💼 Untuk Pasien</h4>
          <p>Pasien dapat membuat janji dengan dokter secara online dan mengakses layanan medis dari rumah.</p>
          <ul class="list-unstyled">
            <li>📅 Buat Janji Temu</li>
            <li>📅 TBA</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Medicanism. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
