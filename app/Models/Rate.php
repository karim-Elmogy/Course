<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable=[
        'comment',
        'value',
        'user_id',
        'course_id'
    ];

    public function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
