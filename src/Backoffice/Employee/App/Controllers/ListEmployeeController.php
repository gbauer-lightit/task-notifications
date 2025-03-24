<?php

namespace Lightit\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Backoffice\Employee\Domain\Actions\ListEmployeeAction;

final class ListEmployeeController
{
    public function __invoke(ListEmployeeAction $listEmployeeAction): JsonResponse
    {
        $employees = $listEmployeeAction->execute();
        return response()
            ->success($employees)
            ->respond();
    }
}
