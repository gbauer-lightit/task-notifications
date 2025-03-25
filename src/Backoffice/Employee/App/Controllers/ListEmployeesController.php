<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;

final class ListEmployeesController
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'message' => 'List of employees',
        ]);
    }
}
