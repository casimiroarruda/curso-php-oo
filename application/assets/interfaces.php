<?php
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