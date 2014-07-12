<?php
require __DIR__.'/../vendor/autoload.php';

use Curso\Service\Registry;


$fileDriver = new Drakojn\Io\Driver\File('/tmp/');

$map = new Drakojn\Io\Mapper\Map(
    'Curso\\Models\\Contato', //local class
    'contato', // remote entity, the table
    'id', //local attribute used to identify this object through remote part
    [
        'id' => 'id_user',
        'alias' => 'login',
        'name' => 'name',
        'job' => 'job'
    ] //map between local class and remote presistency part
);

$contatoMapper = new \Drakojn\Io\Mapper($fileDriver,$map);
Registry::register('contatoMapper',$contatoMapper);

$router = new \Respect\Rest\Router();
$router->get('/','\\Curso\\Controllers\\Contato');
$router->post('/contato','\\Curso\\Controllers\\Contato');
$router->get('/contato/create','\\Curso\\Controllers\\Create\\Contato');
