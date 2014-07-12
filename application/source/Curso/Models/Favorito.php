<?php
namespace Curso\Models;

class Favorito extends Contato
{
    protected $favChar = '*';

    public function getName()
    {
        return $this->name.' '.$this->favChar;
    }
}