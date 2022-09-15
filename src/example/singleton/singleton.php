<?php

require_once(__DIR__.'/DealershipSingleton.php');
require_once(__DIR__.'/../Car.php');
require_once(__DIR__.'/../../util/Util.php');

$util = new Util('Singleton');
$storage = [
  new Car('Honda', 'Civic', '2018', 'Chumbo'),
  new Car('Toyota', 'Corolla', '2017', 'Branco'),
  new Car('Chevrolet', 'Cruze', '2019', 'Preto'),
  new Car('Volkswagen', 'Jetta', '2015', 'Prata')
];

/**
 * 3 concessionárias compartilham do mesmo estoque, só que estão
 * em lugares diferentes. O sistema delas permite isso.
 * 
 * Então, é necessário que tudo sempre esteja em sincronia.
 */
$util->log('Creating dealeaship from Costa e Silva');
$costaSilva = DealershipSingleton::getInstance();
$costaSilva->setStorage($storage);

$util->log('Creating dealeaship from Iririú');
$iririu = DealershipSingleton::getInstance();
$iririu->setStorage($storage);

$util->log('Creating dealeaship from América');
$america = DealershipSingleton::getInstance();
$america->setStorage($storage);