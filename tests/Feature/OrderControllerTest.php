<?php

namespace Tests\Feature;

use App\Models\Order;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
   final public function test_return_order_when_valid_id_provided(): void
    {
        $order = Order::factory()->create();

        $response = $this->get('/api/orders/' . $order->id);

        $response->assertStatus(200)
            ->json([
                'id' => $order->id,
            ]);
//        $order->destroy($order->id);
    }

    final public function test_return_on_not_valid_order_id(): void
    {
        $response = $this->get('/api/orders/-1');

        $response->assertStatus(404);
    }
}
