<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityEmailAddress extends Model
{
    use HasFactory;
    protected $table = 'entity_email_address';

    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'id' => 'string',
    ];

    public $timestamps = false;
}
