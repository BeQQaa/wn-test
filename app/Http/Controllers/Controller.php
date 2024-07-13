<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;

abstract class Controller
{
    /**
     * @OA\Info(
     * title="Swagger test",
     * version="1.0.0",
     * )
     * @OA\SecurityScheme(
     * type="http",
     * )
     */
}
