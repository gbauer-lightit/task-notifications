<?php

declare(strict_types=1);


namespace Lightit\Backoffice\Task\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Lightit\Backoffice\Task\Domain\Dto\UpsertTaskDto;
use Lightit\Backoffice\Task\Domain\Enums\TaskStatus;

final class UpsertTaskRequest extends FormRequest
{
    public const ID = 'id';

    public const TITLE = 'title';

    public const DESCRIPTION = 'description';

    public const STATUS = 'status';

    public const EMPLOYEE_ID = 'employee_id';

    public function rules(): array
    {
        return [
            self::ID => ['sometimes', 'exists:tasks,id'],
            self::TITLE => ['required', 'string', 'max:255'],
            self::DESCRIPTION => ['required', 'string'],
            self::STATUS => ['sometimes', 'string', Rule::enum(TaskStatus::class)],
            self::EMPLOYEE_ID => ['required', 'exists:employees,id'],
        ];
    }

    public function toDto(): UpsertTaskDto
    {
        $status = $this->has(self::STATUS)
            ? TaskStatus::from(
                $this->string(self::STATUS)->toString()
            )
            : TaskStatus::Pending;

        return new UpsertTaskDto(
            title: $this->string(self::TITLE)->toString(),
            description: $this->string(self::DESCRIPTION)->toString(),
            status: $status,
            employee_id: $this->integer(self::EMPLOYEE_ID),
            id: $this->integer(self::ID),
        );
    }
}
