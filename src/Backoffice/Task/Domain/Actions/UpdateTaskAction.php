<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\Domain\Actions;

use Lightit\Backoffice\Task\Domain\Dto\UpsertTaskDto;
use Lightit\Backoffice\Task\Domain\Models\Task;

final class UpdateTaskAction
{
    public function execute(Task $task, UpsertTaskDto $dto): Task
    {
        $task->update([
            'title' => $dto->title,
            'description' => $dto->description,
            'status' => $dto->status,
            'employee_id' => $dto->employee_id,
        ]);

        return $task;
    }
}
