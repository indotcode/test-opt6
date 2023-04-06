<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        "id",
        "phone",
        "email",
        "address"
    ];

    public function products(): HasMany
    {
        return $this->hasMany(OrderAndProduct::class, 'order_id', 'id');
    }
}
