<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // protected $table = 'pets';
    protected $fillable = [
        'name',
        'status',
        'photo_urls',
        'category_id'
    ];
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
