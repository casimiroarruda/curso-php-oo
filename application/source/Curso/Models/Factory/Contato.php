<?php
namespace Curso\Models\Factory;

use Curso\Models\Contato as Model;


abstract class Contato
{
    public static function buildContact(array $info = array())
    {
        $defaults = array(
            'id'=>null,
            'alias'=>null,
            'name'=>null,
            'job'=>null
        );
        $info = array_intersect_key(
            $info, $defaults
        );
        $contato = new Model;
        $contato->setId($info['id']);
        $contato->setName($info['name']);
        $contato->setAlias($info['alias']);
        $contato->setJob($info['job']);
        return $contato;
    }
}