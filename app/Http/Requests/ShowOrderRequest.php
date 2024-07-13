<?php

namespace App\Http\Requests;

use App\Exceptions\NotFoundException;
use App\Models\Order;
use App\Rules\ExistInDatabaseRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class ShowOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $rule = new ExistInDatabaseRule(modelClass: Order::class, table: 'Order');
        $rule->validate(
            'id',
            $this->route('id'),
            function ($message) {
                throw new NotFoundException($message, Response::HTTP_NOT_FOUND);
            });
    }
}
