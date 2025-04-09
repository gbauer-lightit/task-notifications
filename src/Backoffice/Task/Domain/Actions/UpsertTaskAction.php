<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\Domain\Actions;

use Lightit\Backoffice\Employee\App\Notifications\NewTaskAssignmentNotification;
use Lightit\Backoffice\Employee\Domain\Models\Employee;
use Lightit\Backoffice\Task\Domain\Dto\UpsertTaskDto;
use Lightit\Backoffice\Task\Domain\Models\Task;

final class UpsertTaskAction
{
    public function execute(UpsertTaskDto $dto): Task
    {
        $task = Task::updateOrCreate(
            [
                'title' => $dto->title,
                'description' => $dto->description,
                'status' => $dto->status->value,
                'employee_id' => $dto->employee_id,
            ]
        );

        $employee = Employee::findOrFail($dto->employee_id);

        $notification = new NewTaskAssignmentNotification($task);

        $employee->notify($notification);

        return $task;
    }
}
