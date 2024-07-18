<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable =[
        'project_name',
        'client_id',
        'currency',
        'commercial',
        'resources',
        'description',
        'document'
    ];
}
