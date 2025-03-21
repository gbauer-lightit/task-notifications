<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Lightit\Backoffice\Task\Domain\Models\Task;

final class Employee extends Model
{
    protected $guarded = ['id'];

    /**
     * @return HasMany<Task, $this>
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
