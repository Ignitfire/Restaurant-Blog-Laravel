<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RestaurantTag extends Pivot
{
    use HasFactory;

    protected $table = 'restaurant_tag';

    protected $fillable = [
        'restaurants_id',
        'tags_id'
    ];
}
