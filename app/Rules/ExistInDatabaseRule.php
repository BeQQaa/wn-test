<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExistInDatabaseRule implements ValidationRule
{


    protected string $modelClass;
    private string $column;
    private string $table;

    public function __construct(string $modelClass, string $table = 'Entity', string $column = 'id')
    {
        $this->modelClass = $modelClass;
        $this->column = $column;
        $this->table = $table;
    }

    /**
     * Run the validation rule.
     *
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->modelClass::where($this->column, $value)->exists()) {
            $fail("{$this->table} not found");
        }
    }
}
