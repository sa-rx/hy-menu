<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'content',
        'img',
        'price',
        'offer_price',
        'calories',
        'available',
        'status',
        'user_id',

        'price_lg',
        'price_xl',
        'price_xxl',

        'offer_lg',
        'offer_xl',
        'offer_xxl'
      ];





    public function user(){
        return $this->belongsTo(User::class);
    }



    public function category(){
        return $this->belongsTo(Category::class);
    }



}
