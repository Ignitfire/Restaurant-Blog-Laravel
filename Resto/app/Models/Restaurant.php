<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'owner_id',
        'content',
        'food_type',
        'price',
        'url',
        'status'
    ];

    /**
    * Get the user that owns the restaurant.
    */
   public function user()
   {
       return $this->belongsTo(User::class,'owner_id');
   }

    /**
     * Get the images for the restaurant.
     */
   public function images()
   {
       return $this->hasMany(Image::class);
   }

    /**
     * Get the tags for the restaurant.
     */
    public function tags() {
        return $this->belongsToMany(Tag::class, 'restaurant_tag', 'restaurants_id', 'tags_id');
    }


    /**
     * Get the comments for the restaurant.
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
