<?php

echo "[Database] > Exemplificando...".PHP_EOL;

require_once(__DIR__.'/class/DatabaseAccess.php');
require_once(__DIR__.'/interface/Client.php');

$rodolfo = new Client('Rodolfo', 'rodolfo@contato.com');
$ronaldo = new Client('Ronaldo', 'ronaldo@contato.com');
$roberto = new Client('Roberto', 'Roberto@contato.com');
$rogerio = new Client('Rogerio', 'rogerio@contato.com');
$roseini = new Client('Roseini', 'roseine@contato.com');
$rosario = new Client('Rosário', 'rosario@contato.com');

echo "[Database] > Criando primeira instância... ".PHP_EOL;
$firstInstance = DatabaseAccess::getInstance();
$firstInstance->setRows([$rodolfo, $roberto]);

echo "[Database] > Criando segunda instância... ".PHP_EOL;
$secondInstance = DatabaseAccess::getInstance();
$secondInstance->setRows([$ronaldo, $rogerio]);

echo "[Database] > Criando terceira instância... ".PHP_EOL;
$thirdInstance = DatabaseAccess::getInstance();
$thirdInstance->setRows([$rosario, $roseini]);

print_r($firstInstance->getRows());
print_r($secondInstance->getRows());
print_r($thirdInstance->getRows());

echo 'Primeira comparação... '.PHP_EOL;
var_dump($firstInstance === $secondInstance);
echo 'Segunda comparação... '.PHP_EOL;
var_dump($secondInstance === $thirdInstance);
echo 'Terceira comparação... '.PHP_EOL;
var_dump($thirdInstance === $firstInstance);