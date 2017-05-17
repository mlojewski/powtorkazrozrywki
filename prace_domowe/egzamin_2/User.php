<?php

class User{
    private $name;
    private $surname;
    private $mail;

    public function __construct($mail, $surname, $name)
    {
        $this->setMail($mail);
        $this->setSurname($surname);
        $this->setName($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function sayHello()
    {
        return "User ".$this->name." ".$this->surname." says hello!";
    }
}
