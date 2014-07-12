<?php
namespace Curso\Controllers;

use Curso\Service\Registry;
use Drakojn\Io\Mapper;
use Respect\Rest\Routable;
use Curso\Models\Contato as Model;

class Contato implements Routable
{
    public function get()
    {
        $mapper = Registry::get('contatoMapper');

        $html = array(
            '<fieldset>',
            "<legend>Agenda</legend>",
            "<ul>"
        );
        foreach($mapper->findAll() as $contato){
            $html[] = '<li>'.$contato->getName().' - '.$contato->getJob().'</li>';
        }
        $html[] = '</ul></fieldset><a href="/contato/create">Novo Contato</a>';
        return implode('',$html);

    }

    public function post()
    {
        $contato = new Model();
        $contato->setName($_POST['name']);
        $contato->setAlias($_POST['alias']);
        $contato->setJob($_POST['job']);
        Registry::get('contatoMapper')->save($contato);
        header('Location:/');
    }
}