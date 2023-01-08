<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    //可変項目
    protected $fillable = [
        'postcode',
        'prefecture',
        'address_city',
        'address_street',
        'building',
        'tell',
        'updated_at'
    ];

}
