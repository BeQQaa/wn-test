<?php

namespace App\Http\Controllers\Swagger;

use OpenApi\Annotations as OA;

class OrderControllerAnnotations
{
    /**
     * Get order by ID.
     *
     * @OA\Get(
     *      path="/api/orders/{id}",
     *      operationId="getOrderById",
     *      tags={"Orders"},
     *      summary="Get order by ID",
     *      description="Returns a single order by ID",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the order",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="id",
     *                  type="integer",
     *                  example="1"
     *              ),
     *              @OA\Property(
     *                  property="created_at",
     *                  type="string",
     *                  format="date-time",
     *                  example="2024-07-12T17:15:37.000000Z"
     *              ),
     *              @OA\Property(
     *                  property="updated_at",
     *                  type="string",
     *                  format="date-time",
     *                  example="2024-07-12T17:15:37.000000Z"
     *              ),
     *              @OA\Property(
     *                  property="name",
     *                  type="string",
     *                  example="test"
     *              ),
     *              @OA\Property(
     *                  property="amount",
     *                  type="number",
     *                  format="float",
     *                  example=11.11
     *              ),
     *              @OA\Property(
     *                  property="currency",
     *                  type="string",
     *                  example="usd"
     *              ),
     *              @OA\Property(
     *                  property="status",
     *                  type="string",
     *                  example="pending"
     *              ),
     *              @OA\Property(
     *                  property="order_items",
     *                  type="array",
     *                  @OA\Items(
     *                      @OA\Property(
     *                          property="id",
     *                          type="integer",
     *                          example="1"
     *                      ),
     *                      @OA\Property(
     *                          property="order_id",
     *                          type="integer",
     *                          example="1"
     *                      ),
     *                      @OA\Property(
     *                          property="created_at",
     *                          type="string",
     *                          format="date-time",
     *                          example="2024-07-12T17:33:21.000000Z"
     *                      ),
     *                      @OA\Property(
     *                          property="updated_at",
     *                          type="string",
     *                          format="date-time",
     *                          example="2024-07-12T17:33:21.000000Z"
     *                      ),
     *                      @OA\Property(
     *                          property="name",
     *                          type="string",
     *                          example="12"
     *                      ),
     *                      @OA\Property(
     *                          property="amount",
     *                          type="number",
     *                          format="float",
     *                          example=1.323
     *                      )
     *                  )
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Order not found"
     *      )
     * )
     */
    private function showOrderById() :void
    {}
}
