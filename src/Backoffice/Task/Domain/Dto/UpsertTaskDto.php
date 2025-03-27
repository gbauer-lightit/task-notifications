<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Task\Domain\Dto;

use Lightit\Backoffice\Task\Domain\Enums\TaskStatus;

final class UpsertTaskDto
{
    public function __construct(
        public string     $title,
        public string     $description,
        public TaskStatus $status,
        public int        $employee_id,
        public int|null   $id = null,
    )
    {
    }
}
