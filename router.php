<?php

$app->get('/hello/{name}', function($params) {
  return 'Meu nome é ' . $params[1];
  // return $params;
});

$app->get('/', function() {
    return 'Olá, Mundo';
});
