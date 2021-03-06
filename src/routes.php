<?php
// Routes

$app->get('/', function($request, $response, $args) {
    $this->logger->info("Homepage loaded '/' route");

    return $this->renderer->render($response, 'office-home.phtml', $args);
});
/*
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/
