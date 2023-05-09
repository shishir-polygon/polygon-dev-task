<?php
namespace FullName;

class fullName{
    public $firstName;
    public $lastName;
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(): string{
        return $this->firstName.' '.$this->lastName;
    }
}
