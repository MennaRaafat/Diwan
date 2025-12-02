<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(InquiryType::class, 'inquiry_type_id');
    }
    
}
