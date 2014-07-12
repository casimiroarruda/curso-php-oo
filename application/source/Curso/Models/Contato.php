<?php
namespace Curso\Models;

use Curso\Service\PrintableInterface;

class Contato implements PrintableInterface
{
    protected $id;
    protected $alias;
    protected $name;
    protected $job;

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return array(
            'title'=>'Contato: '.$this->name,
            "Apelido: ".$this->alias,
            "Você não deveria repetir isso em casa",
            "Isso não é uma impressora"
        );
    }


}