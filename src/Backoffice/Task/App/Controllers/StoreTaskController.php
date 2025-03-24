<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\App\Controllers;

final class StoreTaskController
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Task created',
        ]);
    }
}
