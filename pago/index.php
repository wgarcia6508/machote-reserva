<?php

use Pago\GetOrder;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Selective\BasePath\BasePathDetector;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate App
$app = AppFactory::create();

$basePath = (new BasePathDetector($_SERVER))->getBasePath();
$app->setBasePath("$basePath/pago");

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('Pago de Hotel');
    return $response;
});

$app->post('/pagohotel', function (Request $request, Response $response, $args) {

    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $orderID = $data->orderID;

    GetOrder::getOrder($orderID, true);

    return $response->withStatus(201);

});


$app->run();