<?php                                                                           // Não passar o codigo dessa marcação

require __DIR__ . '/vendor/autoload.php';

use Yuri\Router\Router;
use Yuri\DI\Resolver;
use Yuri\Renderer\PHPRenderer;

$path_info = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path_info, $request_method);

require __DIR__ . '/router.php';

$result = $router->run();

$data = (new Resolver)->method($result['callback'], [
    'params' => $result['params']
]);
// print_r($result['callback']($result['params']));

$renderer = new PHPRenderer();
$renderer->setData($data);
$renderer->run();

// var_dump($data);