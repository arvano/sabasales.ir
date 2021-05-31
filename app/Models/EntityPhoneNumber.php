<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityPhoneNumber extends Model
{
    use HasFactory;
    protected $table = 'entity_phone_number';

    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'id' => 'string',
    ];


    public $timestamps = false;
}
