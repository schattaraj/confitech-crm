<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_gstin extends Model
{
    use HasFactory;
    protected $table = 'client_gstin';
    protected $fillable =[
        'gstin',
        'client_autoid',       
        'state_code',
        'client_address1',
        'client_address2',
        'client_address3',
        'client_state',
        'client_country',
    ];
}
