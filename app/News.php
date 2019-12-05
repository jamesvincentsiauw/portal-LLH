<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'image', 'body', 'author'
    ];
    public function User(){
        $this->belongsTo(User::class);
    }
}
