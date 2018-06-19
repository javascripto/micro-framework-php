<?php                                                                           // Não passar o codigo dessa marcação

require __DIR__ . '/vendor/autoload.php';

use Yuri\Router\Router;

$path_info = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path_info, $request_method);

$router->get('/hello/{name}', function($params) {
    return 'Meu nome é ' . $params[1];
});

$result = $router->run();
print_r($result['callback']($result['params']));
