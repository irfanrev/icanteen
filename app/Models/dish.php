<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    protected $fillable =
    [
        'dish_name',
        'dish_detail',
        'dish_image',
        'dish_status',
    ];
    protected $primaryKey = 'dish_id';
}
