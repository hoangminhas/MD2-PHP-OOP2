<?php

class Employee
{
    public string $lastName;
    public string $firstName;
    public string $birth;
    public string $address;
    public string $position;

    /**
     * @param string $lastName
     * @param string $firstName
     * @param string $birth
     * @param string $address
     * @param string $position
     */
    public function __construct(string $firstName, string $lastName, string $birth, string $address, string $position)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birth = $birth;
        $this->address = $address;
        $this->position = $position;
    }


    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getBirth(): string
    {
        return $this->birth;
    }

    /**
     * @param string $birth
     */
    public function setBirth(string $birth): void
    {
        $this->birth = $birth;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }


}