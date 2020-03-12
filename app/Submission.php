<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'draft_files','submitterName','submitterITBmail','submitterWorkUnit','status','id','type'
    ];
    public $incrementing = false;
    protected $dates = ['created_at'];

    public function Document(){
        $this->hasOne(Document::class);
    }
}
