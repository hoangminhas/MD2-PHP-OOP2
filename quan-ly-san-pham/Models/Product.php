<?php

namespace Models;

class Product
{
    private string $name;
    private int $price;

    public function __construct($name = '', $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed|string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|mixed
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }


}