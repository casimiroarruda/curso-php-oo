<?php
namespace Curso\Models\Phone;

abstract class AbstractPhone
{
    protected $id;
    protected $countryCode;
    protected $cityCode;
    protected $number;

    public function __construct($fullNumber)
    {
        preg_match(
            '/(?P<country>[0-9]{2})(?P<city>[0-9]{2})(?P<number>[0-9]{8,9})/',
            $fullNumber,
            $matches
        );
        $this->countryCode = $matches['country'];
        $this->cityCode = $matches['city'];
        $this->number = $matches['number'];
    }

    /**
     * @return mixed
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param mixed $cityCode
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

}