<?php
use Curso\Models\Factory\Contato as ContatoFactory;

$contato1 = ContatoFactory::buildContact(
  array(
      'id' => 888,
      'name' => 'Josefina',
      'profissao' => 'Sei la',
      'job' => 'unknown',
      'alisa' => 'zefa',
      'alias' => 'zefa'
  )
);

var_dump($contato1);

$db = \Curso\Services\Db::getInstance();
var_dump($db);
echo spl_object_hash($db),'<br/>';
$db2 = \Curso\Services\Db::getInstance();
echo spl_object_hash($db2);
