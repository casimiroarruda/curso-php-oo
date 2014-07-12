<?php
use Curso\Models\Phone\Land;
use Curso\Models\Phone\Mobile;

$fixo = new Land;
$fixo->setCountryCode(55);
$fixo->setCityCode(11);
$fixo->setNumber(5252525);

$celular = new Mobile;
$celular->setCityCode(11);
$celular->setCountryCode(55);
$celular->setNumber(87654321);

$celular2 = new Mobile('551198765432');
echo $fixo->getNumber(),'<br/>';
echo $celular->getNumber(),'<br/>';
echo $celular2->getNumber();
