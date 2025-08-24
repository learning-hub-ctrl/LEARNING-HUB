!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0072ff, #00c6ff);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    .card {
      border-radius: 20px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
    }
    .btn-custom {
      border-radius: 50px;
      font-weight: bold;
      padding: 10px 20px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <div class="card p-5 bg-white">
      <h1 class="mb-4 text-primary">📚 Student Portal</h1>
      <p class="mb-4">Karibu kwenye mfumo wa wanafpunzi. Tafadhali chagua kitufe hapa chini:</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="register.php" class="btn btn-success btn-custom">📝 Register</a>
        <a href="login.php" class="btn btn-primary btn-custom">🔑 Login</a>
      </div>
      <hr class="my-4">
      <small class="text-muted">© <?php echo date("Y"); ?> Student Management System</small>
    </div>
  </div>
</body>
</hwanafunziunzi
