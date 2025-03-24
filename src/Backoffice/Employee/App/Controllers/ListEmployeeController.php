<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Backoffice\Employee\Domain\Actions\ListEmployeeAction;

final class ListEmployeeController
{
    public function __invoke(ListEmployeeAction $listEmployeeAction): JsonResponse
    {
        return response()->json([
            'message' => 'List of employees',
        ]);
    }
}
