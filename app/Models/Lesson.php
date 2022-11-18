<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable=[
        'ar_name',
        'en_name',
        'ar_descr',
        'en_descr',
        'image',
        'url',
        'duration',
        'is_active',
        'course_id'
    ];
    protected $appends=['active_string'];

    public function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function getActiveStringAttribute()
    {
        $arr=[
            '1'=>'Active',
            '0'=>'In Active',

        ];
        return $arr[$this->is_active];
    }
}
