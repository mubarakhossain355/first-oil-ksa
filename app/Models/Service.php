<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function getStatusAttribute()
    {
        return $this->attributes['status'] === 0 ? 'Draft' : 'Published';
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value === 'Draft' ? false : true;
    }

    public function scopePublished($query)
    {
        return $query->whereStatus(true);
    }

}
