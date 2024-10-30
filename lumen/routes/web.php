$router->get('/login', 'AuthController@showLoginForm');
$router->post('/login', 'AuthController@login');
$router->get('/dashboard', function () {
    return 'Bienvenido al Dashboard';
})->middleware('auth'); // Requiere autenticación
