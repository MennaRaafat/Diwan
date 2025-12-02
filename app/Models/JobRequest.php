<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    protected $guarded = [];

     public function type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

}
