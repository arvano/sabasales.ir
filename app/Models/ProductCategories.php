<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $table = 'product_category';

    protected $guarded = [];

    protected $casts = [
    	'id' => 'string',
    	'cover_id' => 'string',
    	'parent_id' => ''
    ];
}
