<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'body', 'author'
    ];
    public function User(){
        $this->belongsTo(User::class);
    }
}
