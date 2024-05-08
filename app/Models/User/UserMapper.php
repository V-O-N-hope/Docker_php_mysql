<?php

use Exceptions\Entities_Errors\InvalidEntityException;

class UserMapper implements IMapper
{

    /**
     * @throws InvalidEntityException
     */
    public function entityToDto($entity)
    {
        if ($entity instanceof User) {
            return new UserDTO(
                $entity->getId(),
                $entity->getName()
            );
        } else {
            throw new InvalidEntityException("
            entity must be instance of [" . get_class((object)User::class) . "] but have [" . get_class($entity) . "] ");
        }
    }

    public function dtoToEntity($dto)
    {
        if ($dto instanceof UserDTO) {
            return new User(
                $dto->getId(),
                $dto->getName()
            );
        } else {
            throw new InvalidEntityException("
            entity must be instance of [" . get_class((object)UserDTO::class) . "] but have [" . get_class($dto) . "] ");
        }
    }
}