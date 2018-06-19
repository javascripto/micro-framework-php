<?php                                                                           // Não passar o codigo dessa marcação

require __DIR__ . '/vendor/autoload.php';

$app = new Yuri\App();
$app->setRenderer(new Yuri\Renderer\PHPRenderer);

require __DIR__ . '/router.php';

$app->run();
