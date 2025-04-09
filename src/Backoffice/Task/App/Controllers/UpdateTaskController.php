<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Backoffice\Task\App\Request\UpdateTaskRequest;
use Lightit\Backoffice\Task\App\Transformers\TaskTransformer;
use Lightit\Backoffice\Task\Domain\Actions\UpdateTaskAction;
use Lightit\Backoffice\Task\Domain\Models\Task;

final class UpdateTaskController
{
    public function __invoke(Task $task, UpdateTaskRequest $request, UpdateTaskAction $action): JsonResponse
    {
        $currentTaskDto = $request->toDto($task);

        $updatedTask = $action->execute($task, $currentTaskDto);

        return responder()
            ->success($updatedTask, TaskTransformer::class)
            ->respond();
    }
}
