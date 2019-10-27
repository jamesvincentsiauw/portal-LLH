<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'draft_files', 'supporting_files', 'submitterName','submitterITBmail','submitterWorkUnit','status'
    ];

    public function Document(){
        $this->hasOne(Document::class);
    }
}
