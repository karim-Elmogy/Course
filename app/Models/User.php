<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'is_active'
    ];

    protected $appends=['role_string','active_string'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleStringAttribute()
    {
        $arr=[
            'super_admin'=>'Super Admin',
            'admin'=>'Admin',
            'client'=>'Client'
        ];
        return $arr[$this->role];
    }
    public function getActiveStringAttribute()
    {
        $arr=[
            '1'=>'Active',
            '0'=>'In Active',

        ];
        return $arr[$this->is_active];
    }

    public function rates(){
        return $this->hasMany(Rate::class,'user_id');
    }
}
