<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id',
        'content',
        // Add other fillable attributes as needed
    ];

    // Other model code, such as relationships or additional methods
}
