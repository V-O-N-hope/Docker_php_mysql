<?php

namespace Exceptions\Entities_Errors;

use Exceptions\ErrorsCode;

class InvalidEntityException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message, ErrorsCode::INVALID_ENTITY_PARAM, null);
    }
}