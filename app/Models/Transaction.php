<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    

   
}
