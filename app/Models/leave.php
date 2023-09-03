<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_date',
        'to_date',
        'type_of_leave',
        'day',
        'reason',
        'user_id',
        'file',
        'status'
    ];
}
