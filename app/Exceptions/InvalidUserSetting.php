<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class InvalidUserSetting extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message ?? 'Invalid user setting', $code, $previous);
    }
}
