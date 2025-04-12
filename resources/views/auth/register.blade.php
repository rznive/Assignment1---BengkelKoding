<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGlht9nvKMYPo-zFSAeTdQWIE4jdoF_ywKTw&s">
  <title>Registrasi - Medicanism</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #e5f9e1;
      font-family: 'Roboto', sans-serif;
    }

    .navbar {
      background-color: #38b24e;
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

    .register-box {
      width: 100%;
      max-width: 380px;
      padding: 40px;
      margin: 10% auto;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .register-logo {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #38b24e;
      margin-bottom: 30px;
    }

    .input-group-text {
      background-color: #38b24e;
      color: #fff;
      font-size: 1.1rem;
    }

    .form-control {
      background-color: #f1f1f1;
      border: 1px solid #ddd;
      font-size: 1rem;
      border-radius: 10px;
      padding: 15px;
    }

    .form-control:focus {
      background-color: #fff;
      border-color: #38b24e;
      box-shadow: 0 0 5px rgba(56, 178, 78, 0.5);
    }

    .btn-custom {
      background-color: #38b24e;
      color: #fff;
      border: 2px solid #38b24e;
      text-transform: uppercase;
      font-weight: bold;
      padding: 12px 25px;
      transition: 0.3s ease;
      width: 100%;
      border-radius: 5px;
    }

    .btn-custom:hover {
      background-color: #32a44d;
      border: 2px solid #32a44d;
      box-shadow: 0 0 10px rgba(50, 164, 77, 0.8);
    }

    footer {
      background-color: #38b24e;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top: 1px solid #fff;
    }

    @media (max-width: 576px) {
      .register-logo {
        font-size: 2rem;
      }

      .form-control, .btn-custom {
        font-size: 0.9rem;
      }

      .register-box {
        padding: 25px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Medicanism</a>
  </div>
</nav>

<!-- Register Box -->
<div class="register-box">
  <div class="register-logo">Medicanism</div>
  <form action="/register" method="POST">
    @csrf
    <div class="input-group mb-3">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
    </div>
    <div class="input-group mb-3">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="input-group mb-3">
      <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
    </div>
    <button type="submit" class="btn btn-custom mt-3">Sign Up</button>
  </form>
</div>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Medicanism. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
