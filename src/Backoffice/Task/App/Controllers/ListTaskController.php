<?php

namespace Lightit\Backoffice\Task\App\Controllers;


final class ListTaskController
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'List of tasks'
        ]);
    }
}
