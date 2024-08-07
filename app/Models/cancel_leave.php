<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cancel_leave extends Model
{
    use HasFactory;
    protected $fillable =[
        'leave_id',
        'cancel_reason',
        'status',
        'reject_reason'
    ];
}
