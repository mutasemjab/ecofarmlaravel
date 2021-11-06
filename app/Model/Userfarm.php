<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Userfarm extends Model
{
    protected $table = 'userfarms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'place', 'phone',
        'email', 'password', 'note',
        'price', 'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getActive(){

        return $this-> is_active ==0 ? "غير مفعل": " مفعل ";
    }

    public function devices()
    {
        return $this -> belongsTo(Device::class,'device_id');
    }
}
