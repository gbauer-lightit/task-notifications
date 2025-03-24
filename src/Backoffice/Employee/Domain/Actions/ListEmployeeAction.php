<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\Domain\Actions;

use Illuminate\Database\Eloquent\Collection;
use Lightit\Backoffice\Employee\Domain\Models\Employee;
use Spatie\QueryBuilder\QueryBuilder;

final class ListEmployeeAction
{
    /**
     * List all employees
     *
     * @return Collection
     */
    public function execute(): Collection
    {
        return QueryBuilder::for(Employee::class)
            ->allowedFilters(['name', 'email'])
            ->allowedSorts(['name', 'email'])
            ->get();
    }
}
