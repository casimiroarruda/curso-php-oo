<?php
namespace Curso\Models\Phone;

class Mobile extends AbstractPhone
{
    public function __construct($fullNumber)
    {
        parent::__construct($fullNumber);
        $this->number = strlen($this->number) == 9?
            $this->number :
            '9'.$this->number;
    }

    public function getNumber_()
    {
        if($this->isSaoPaulo()){
            return '9'.$this->number;
        }
    }

    protected function isSaoPaulo()
    {
        return $this->countryCode == 55 &&
               $this->cityCode == 11 &&
                strlen($this->number) <= 8;
    }
}