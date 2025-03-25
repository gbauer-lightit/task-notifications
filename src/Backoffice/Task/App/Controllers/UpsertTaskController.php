<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;

final class UpsertTaskController
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'message' => 'Task created',
        ]);
    }
}
