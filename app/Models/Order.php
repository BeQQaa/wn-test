<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;


/**  @mixin Builder*/
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'id',
        'name',
        'amount',
        'currency',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'updated_at' => 'timestamp:d m Y H:i:s',
        'created_at' => 'timestamp:d m Y H:i:s',
    ];
    final public function orderItems(): HasMany
    {
        return $this->hasMany(related: OrderItem::class, foreignKey: 'order_id', localKey: 'id');
    }
}
