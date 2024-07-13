<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

/**  @mixin Builder*/
class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'id',
        'order_id',
        'name',
        'amount',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'updated_at' => 'timestamp:d m Y H:i:s',
        'created_at' => 'timestamp:d m Y H:i:s',
    ];

    final public function order(): BelongsTo
    {
        return $this->belongsTo(related: Order::class, foreignKey: 'order_id', ownerKey: 'id');
    }
}
