<?php
namespace Curso\Models;

class Contato
{
    protected $id;
    protected $alias;
    protected $name;
    protected $job;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function qualSeuNome(Contato $contato)
    {
        echo 'Oi, eu sou '.$contato->getName();
    }
}