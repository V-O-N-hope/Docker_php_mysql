<?php

class User extends AbstractEntity
{
    private $name;

    public function __construct(int $id, string $name)
    {
        parent::setId($id);
        $this->name = $name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}