<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_order_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'new_order_id',
        'item_id',
        'price',
        'qty',
        'amount'        
    ];

    public function productName()
    {
        return $this->belongsTo(food_item::class, 'item_id');
    }
}
