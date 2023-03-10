<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'book_id',
        'user_name',
        'phone',
        'busy_id',
        'count',
        'price',
        'is_active',
        'is_paid',
        'is_returned',
    ];

    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function busy()
    {
        return $this->belongsTo(Busy::class);
    }
}
