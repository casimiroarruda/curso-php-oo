<?php
use Curso\Models\Contato;
use Curso\Models\Favorito;

$agenda = array();
$agenda[] = new Contato;
$agenda[] = new Contato;
$agenda[] = new Favorito;

$agenda[0]->setName('Fulano');
$agenda[1]->setName('Cliclano');
$agenda[2]->setName('Beltrano');

foreach ($agenda as $contato) {
echo "Nome: ".$contato->getName()." <br/>";
}
