<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Output extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gpio','active'


    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'state' => 'boolean',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];



    public function devices()
    {
        return $this -> belongsTo(Device::class,'device_id');
    }

    public function timers()
    {
        return $this -> hasMany(Timer::class,'output_id');
    }

    public function setState(){

        return $this-> state ==0 ? "غير مفعل": " مفعل ";
    }
}
