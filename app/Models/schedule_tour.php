<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule_tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'meeting_type',
        'meeting_date',
        'time_from',
        'time_until',
        'no_of_people',
        'room_id'
    ];
    public $timestamps = false;
}
