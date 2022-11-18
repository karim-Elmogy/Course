<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'ar_name',
        'en_name',
        'ar_descr',
        'en_descr',
        'image',
        'price',
        'is_active',
        'category_id'
    ];
    protected $appends=['active_string'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function lessons(){
        return $this->hasMany(Course::class,'course_id');
    }
    public function rates(){
        return $this->hasMany(Rate::class,'course_id');
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
