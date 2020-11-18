<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $primaryKey = 'post_id';

    protected $fillable = [
        'user_id',
        'user_name',
        'post_title',
        'post_intro',
        'post_left_text',
        'post_right_text',
        'car_brand',
        'car_model',
        'car_mileage',
        'car_buildyear',
        'car_color',
        'car_horsepower'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }
}
