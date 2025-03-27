<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\Domain\Actions;

use Lightit\Backoffice\Employee\Domain\Dto\EmployeeDto;
use Lightit\Backoffice\Employee\Domain\Models\Employee;

final class StoreEmployeeAction
{
    public function execute(EmployeeDto $dto): Employee
    {
        return Employee::create([
            'name' => $dto->name,
            'email' => $dto->email,
        ]);
    }
}
