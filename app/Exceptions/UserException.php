<?php
namespace App\Exceptions;

use Exception;

class UserException extends Exception
{
    private $errors = [];

    public function __construct($message, $code = 0)
    {
        $this->errors = [
            'code'    => $code,
            'message' => $message
        ] ;
        parent::__construct($message, $code);
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function report()
    {
    }

    public function render()
    {
        return response()->view(sprintf(
            'errors.user.%s',
            $this->errors['code']
        ), $this->errors, $this->errors['code']);
    }
}
