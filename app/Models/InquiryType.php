<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryType extends Model
{
    protected $guarded = [];

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class, 'inquiry_type_id');
    }
}
