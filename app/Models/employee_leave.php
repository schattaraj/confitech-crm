<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_leave extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'leaves_available'
    ];
}
