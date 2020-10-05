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
        'post_title', 'post_intro', 'post_left_text', 'post_right_text'
    ];
}
