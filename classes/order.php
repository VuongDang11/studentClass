<?php

//TODO: Add a description to each method

class Order
{
    private $_sid;
    private $_last;
    private $_first;
    private $_birthdate;
    private $_gpa;
    private $_advisor;



    /**
     * Order constructor.
     * @param $_last
     * @param $_first

     */
    public function __construct($sid = "", $last = "", $first = "", $birthdate = "", $gpa = "", $advisor = "")
    {
        $this->_sid = $sid;
        $this->_last = $last;
        $this->_first = $first;
        $this->_birthdate = $birthdate;
        $this->_gpa = $gpa;
        $this->_advisor = $advisor;

    }

    /**
     * @return string
     */
    public function getSid(): string
    {
        return $this->_sid;
    }

    /**
     * @param string $sid
     */
    public function setSid(string $sid): void
    {
        $this->_sid = $sid;
    }

    /**
     * Return the food item for the order
     * @return string
     */
    public function getLast(): string
    {
        return $this->_last;
    }

    /**
     * Set the selected food for the order
     * @param string $last
     */
    public function setLast(string $last): void
    {
        $this->_last = $last;
    }

    /**
     * Return the food item for the order
     * @return string
     */
    public function getFirst(): string
    {
        return $this->_first;
    }

    /**
     * Set the selected food for the order
     * @param string $first
     */
    public function setFirst(string $first): void
    {
        $this->_first = $first;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->_birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->_birthdate = $birthdate;
    }

    /**
     * @return mixed|string
     */
    public function getGpa(): string
    {
        return $this->_gpa;
    }

    /**
     * @param string $gpa
     */
    public function setGpa(string $gpa): void
    {
        $this->_gpa = $gpa;
    }

    /**
     * @return string
     */
    public function getAdvisor(): string
    {
        return $this->_advisor;
    }

    /**
     * @param mixed|string $advisor
     */
    public function setAdvisor(string $advisor): void
    {
        $this->_advisor = $advisor;
    }






}