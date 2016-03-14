<?php

use Symfony\Component\HttpFoundation\Request;

use stpaul\Domain\Sejour;
use stpaul\IHM\Simul;
use stpaul\Form\Type\SimulType;

$app->get('/', function () use ($app) {

    $sejours = $app['dao.sejour']->findAll();

    return $app['twig']->render('index.html.twig', array('sejours' => $sejours));

});