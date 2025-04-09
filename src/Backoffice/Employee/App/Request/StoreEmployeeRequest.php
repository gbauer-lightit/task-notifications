<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Lightit\Backoffice\Employee\Domain\Dto\EmployeeDto;

final class StoreEmployeeRequest extends FormRequest
{
    public const string NAME = 'name';

    public const string EMAIL = 'email';

    public function rules(): array
    {
        return [
            self::NAME => ['required', 'string', 'max:255'],
            self::EMAIL => ['required', 'email', 'unique:employees'],
        ];
    }

    public function toDto(): EmployeeDto
    {
        return new EmployeeDto(
            name: $this->string(self::NAME)->toString(),
            email: $this->string(self::EMAIL)->toString(),
        );
    }
}
