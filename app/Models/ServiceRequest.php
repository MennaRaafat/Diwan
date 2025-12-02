<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }
}
