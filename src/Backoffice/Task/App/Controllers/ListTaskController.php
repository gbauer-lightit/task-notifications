<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\App\Controllers;

final class ListTaskController
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'List of tasks',
        ]);
    }
}
