<?php
use Curso\Service\Registry;
Registry::register('title','Curso OO em dia de jogo');
Registry::register('countryCode',666);
Registry::register('db', new Pdo('sqlite::memory:'));

$celular = new \Curso\Models\Phone\Mobile();
$celular->setCityCode(11);
//$celular->setCountryCode(1);
$celular->setNumber(87654321);

var_dump($celular);
var_dump($celular->getCountryCode());
