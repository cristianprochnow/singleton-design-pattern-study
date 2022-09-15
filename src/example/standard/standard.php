<?php

require_once(__DIR__.'/DealershipStandard.php');
require_once(__DIR__.'/../Car.php');
require_once(__DIR__.'/../../util/Util.php');

$util = new Util('Standard');
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
$costaSilva = new DealershipStandard();
$costaSilva->setStorage($storage);

$util->log('Creating dealeaship from Iririú');
$iririu = new DealershipStandard();
$iririu->setStorage($storage);

$util->log('Creating dealeaship from América');
$america = new DealershipStandard();
$america->setStorage($storage);