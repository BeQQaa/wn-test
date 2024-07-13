<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Rules\ExistInDatabaseRule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class ExistInDatabaseRuleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    final public function test_is_pass_when_the_record_exist(): void
    {
        $order = Order::factory()->create();

        $data = ['id' => $order->id];
        $rule = ['id' => new ExistInDatabaseRule(Order::class)];

        $validator = Validator::make($data, $rule);

        $this->assertTrue($validator->passes());

    }

    final public function test_is_failed_when_the_record_does_not_exist(): void
    {

        $data = ['id' => -1];
        $rule = ['id' => new ExistInDatabaseRule(Order::class)];

        $validator = Validator::make($data, $rule);

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('id', $validator->failed());


    }
}
