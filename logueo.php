<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title>
  <link rel="stylesheet" href="src/output.css">
  <link rel="icon" href="img/logoemp.webp" type="image/webp">
</head>
<body>
<header class="container-fluid py-3 text-center">
        <div class="row">
            <div class="col-12">
                <a href="/industrias/index.html"><img class="logo" src="img/logoemp.webp" alt="Logo" width="100" height="100"></img></a>
                <h1 class="text-7xl font-serif ">Fracaso</h1>
                <h3 class="frase font-sans">Somos tan transparentes como nuestras hojas</h3>
            </div>
        </div>
    </header>
  <div class="container rounded-lg space-y-6">
    <h2 class="text-center">Inicia Sesión</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Nombre de usuario</label>
        <input type="text" class="
        form-control
        border-2 
        border-gray-100
        rounded-md
        hover:border-b-green-300
        duration-200
        transition-colors"
        id="username" name="username" placeholder="Pepitogamer" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="
        form-control
        border-2 
        border-gray-100
        rounded-md
        hover:border-b-green-300
        duration-200
        transition-colors" 
        id="password" name="password" placeholder="contraseñaseg...">
      </div>
      <button type="submit" class="
      border-2
      rounded-full
      px-5
      py-3 
     hover:border-green-300
     duration-200
     transition-colors
     ">Login</button>
    </form>
  </div>
  <script>
  document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    try {
        const response = await fetch('/industrias/lumen/public/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, password }),
        });

        const data = await response.json();

        if (response.ok) {
            // Redirect to /plantilla/index.html on successful login
            window.location.href = 'plantilla/index.html';
        } else {
            alert(data.message || 'Login failed');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred');
    }
  });
</script>

</body>
</html>