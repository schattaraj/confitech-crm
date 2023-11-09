<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable =[
        'client_name',
        'poc_name',
        'poc_email',
        'client_address1',
        'client_address2',
        'client_address3',
        'client_state',
        'client_country',
        'gstin',
        'state_code',
        'description',
    ];
}
