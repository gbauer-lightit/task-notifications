<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\App\Controllers;

final class StoreEmployeeController
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Employee created',
        ]);
    }
}
