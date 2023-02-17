<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'image',
        'category_id',
        'cover_id',
        'price',
        'price_daily',
        'page',
        'count',
        'sell_count',
    ];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cover()
    {
        return $this->belongsTo(Cover::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
