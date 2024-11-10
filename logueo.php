<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="img/logoemp.webp" type="image/webp">
</head>
<body>
<header class="container-fluid py-3 text-center">
        <div class="row">
            <div class="col-12">
                <img class="logo" src="img/logoemp.webp" alt="Logo" width="100" height="100">
                <h1 class="titulo">Fracaso</h1>
                <h3 class="frase">Somos tan transparentes como nuestras hojas</h3>
            </div>
        </div>
    </header>
  <div class="container">
    <h2 class="text-center">Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <?php if (isset($error)) { echo '<p class="text-danger">' . $error . '</p>'; } ?>
  </div>
</body>
</html>