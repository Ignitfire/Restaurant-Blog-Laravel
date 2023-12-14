<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function restaurants() {
        return $this->belongsToMany(Restaurant::class, 'restaurant_tag', 'tags_id', 'restaurants_id');
    }

}
