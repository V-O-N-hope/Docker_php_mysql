<?php

interface IMapper
{
    public function entityToDto($entity);

    public function dtoToEntity($dto);
}