<?php

namespace App;

interface UserInterface
{
    public function getCart(): CartInterface;
}

class User implements UserInterface
{
    private $cart;
    private $name;

    public function __construct(Name $name)
    {
        $this->cart = new Cart();
        $this->name = $name->getFullName();
    }

    public function getCart(): CartInterface
    {
        return $this->cart;
    }

    public function getName()
    {
        return $this->name;
    }
}
