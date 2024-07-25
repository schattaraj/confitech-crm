<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_poc extends Model
{
    use HasFactory;
    protected $table = 'client_poc';
    protected $fillable =[
        'client_name',
        'client_autoid',
        'poc_name',
        'poc_email',
        'poc_number',
        
    ];
    protected $casts = [
        'poc_name' => 'array',
        'poc_email' => 'array',
        'poc_number' => 'array',
    ];
}
