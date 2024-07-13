<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class NotFoundException extends Exception
{
    public function report()
    {

    }

    public function render(): JsonResponse
    {
        return new JsonResponse(
            ['message' => $this->getMessage()], $this->code);
    }
}
