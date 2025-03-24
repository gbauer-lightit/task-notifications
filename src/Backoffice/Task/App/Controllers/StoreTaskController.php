<?php

namespace Lightit\Backoffice\Task\App\Controllers;

final class StoreTaskController
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Task created'
        ]);
    }
}
