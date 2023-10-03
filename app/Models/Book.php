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
    ];

    public static function sell_books_count()
    {
        return Book::where('count','>',0)->count();
    }


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


    public function sell_count()
    {
        return $this->hasMany(Order::class)->where('busy_id',2)->sum('count');
    }
    public function rent_count()
    {
        return $this->hasMany(Order::class)->where('busy_id',1)->sum('count');
    }

}
