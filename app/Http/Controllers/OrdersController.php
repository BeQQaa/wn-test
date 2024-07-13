<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nette\NotImplementedException;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *      title="wn-test API",
 *      version="1.0.0",
 * )
 */
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        throw new NotImplementedException('not implemented');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        throw new NotImplementedException('not implemented');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        throw new NotImplementedException('not implemented');

    }
    public function show(ShowOrderRequest $request, string $id)
    {
        $orderModel = Order::with('orderItems')->find($id);

        return response($orderModel, Response::HTTP_OK);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        throw new NotImplementedException('not implemented');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        throw new NotImplementedException('not implemented');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        throw new NotImplementedException('not implemented');

    }
}
