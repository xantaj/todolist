<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //

    protected $fillable = ['title', 'is_done', 'user_id','description'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
