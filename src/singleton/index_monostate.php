<?php

require_once(__DIR__.'/ConcessionariaMonostate.php');
require_once(__DIR__.'/Carro.php');
require_once(__DIR__.'/../util/Util.php');

$util = new Util('Singleton');
$jetta = new Carro(2016, 'Volkswagen', 'Jetta');
$civic = new Carro(2017, 'Honda', 'Civic');
$corolla = new Carro(2015, 'Toyota', 'Corolla');
$t_cross = new Carro(2021, 'Volkswagen', 'T-Cross');
$azera = new Carro(2015, 'Hyundai', 'Azera');
$bmw = new Carro(2022, 'BMW', 'X6');

$util->log('Criando concessionária do América');
$concessionariaAmerica = new ConcessionariaMonostate();
$concessionariaAmerica->preencheEstoque([$jetta, $civic]);

$util->log('Criando concessionária do Iririú');
$concessionariaIririu = new ConcessionariaMonostate();
$concessionariaIririu->preencheEstoque([$corolla, $t_cross]);

$util->log('Criando concessionária do Costa e Silva');
$concessionariaCostaSilva = new ConcessionariaMonostate();
$concessionariaCostaSilva->preencheEstoque([$azera, $bmw]);

$util->log('Estoque do América');
print_r($concessionariaAmerica->pegarEstoque());

$util->log('Estoque do Iririú');
print_r($concessionariaIririu->pegarEstoque());

$util->log('Estoque do Costa e Silva');
print_r($concessionariaCostaSilva->pegarEstoque());
