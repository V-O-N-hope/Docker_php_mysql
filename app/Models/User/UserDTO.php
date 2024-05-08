<?php

class UserDTO extends AbstractEntity
{
    private string $name;

    function __construct(int $id, string $name)
    {
        parent::setId($id);
        $this->name = $name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
