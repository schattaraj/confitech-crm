<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_order_master extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'total_qty',
        'total_amount',
        'status',
    ];
}
