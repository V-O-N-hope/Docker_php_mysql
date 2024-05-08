<?php

namespace Exceptions\Database_Errors;

use Exceptions\ErrorsCode;

class ConnectionError extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message, ErrorsCode::FAILED_DATABASE_CONNECTION, null);
    }
}