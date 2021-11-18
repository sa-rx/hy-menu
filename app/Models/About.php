<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    
    protected $fillable = [
        'number',
        'snap',
        'inst',
        'location',
        'title',
        'worktime',
        'address'
    ];



    use HasFactory;
}
