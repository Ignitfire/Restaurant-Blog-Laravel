<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'rating',
        'message',
    ];
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }


}
