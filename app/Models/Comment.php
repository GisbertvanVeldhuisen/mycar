<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'user_id',
        'comment_content',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}


