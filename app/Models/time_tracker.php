<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time_tracker extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'project_id',
        'job_name',
        'working_date',
        'start_time',
        'end_time',
        'job_description',
        'billable_status'
    ];
}
