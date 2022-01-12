<?php

class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function __construct()
    {
        $this->role = 2;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    public function getInfo(){
        return "Name: " .$this->name ."<br>" ."Email: " .$this->email ."<br>";
    }

    public function isAdmin(){
        if ($this->role == 1) {
            return "Admin";
        } return "Normal User";
    }
}