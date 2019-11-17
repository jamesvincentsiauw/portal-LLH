<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'submissionID', 'title', 'files'
    ];
    public $incrementing = false;
    public function Submission(){
        $this->belongsTo(Submission::class);
    }
}
