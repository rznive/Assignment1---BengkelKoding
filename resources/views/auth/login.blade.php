<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGlht9nvKMYPo-zFSAeTdQWIE4jdoF_ywKTw&s">
  <title>Login - Medicanism</title>
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

    .login-box {
      width: 400px;
      padding: 40px;
      margin: 10% auto;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .login-logo {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #4CAF50;
      margin-bottom: 30px;
    }

    .input-group-text {
      background-color: #4CAF50;
      color: #fff;
    }

    .form-control {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      font-size: 1rem;
    }

    .form-control:focus {
      background-color: #fff;
      border-color: #4CAF50;
    }

    .btn-custom {
      background-color: #4CAF50;
      color: #fff;
      border: 2px solid #4CAF50;
      text-transform: uppercase;
      font-weight: bold;
      padding: 10px 30px;
      transition: 0.3s ease;
      width: 100%;
    }

    .btn-custom:hover {
      background-color: #45a049;
      border: 2px solid #45a049;
      box-shadow: 0 0 15px rgba(72, 186, 72, 0.8);
    }

    footer {
      background-color: #4CAF50;
      color: #fff;
      padding: 30px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
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

<!-- Login Box -->
<div class="login-box">
  <form action="/login" method="POST">
    @csrf
    <div class="input-group mb-3">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-custom mt-3">Sign In</button>
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
