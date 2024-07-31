<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\client_gstin;

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
    public function client_gstin()
    {
        return $this->hasMany(client_gstin::class, 'client_autoid'); // Adjust 'client_id' if necessary
    }
}
