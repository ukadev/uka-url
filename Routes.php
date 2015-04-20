<?php

$app['router']->get('/', 'HomeController@getIndex');
$app['router']->get('/notFound', 'HomeController@getNotFound');
$app['router']->get('{id}', 'HomeController@goToLink');
$app['router']->post('/create', 'HomeController@postIndex');