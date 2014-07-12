<?php
use Curso\Models\Phone\Land;
use Curso\Models\Phone\Mobile;
$printer = new \Curso\Service\Printer;

$contato = Curso\Models\Factory\Contato::buildContact(
  array(
      'id'=>'4',
      'name'=>'Bolodório',
      'alias'=>'Bolão',
      'job' => 'VASP'
  )
);

$printer->putOnTheScreen($contato);
$celular = new Mobile;
$celular->setCityCode(11);
$celular->setCountryCode(55);
$celular->setNumber(87654321);
echo $celular->getCountryCode();
