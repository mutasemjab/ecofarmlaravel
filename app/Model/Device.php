<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Device extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',

    ];


    public function sensors()
    {
        return $this -> hasMany(Sensor::class,'device_id');
    }

    public function users()
    {
        return $this -> hasMany(Userfarm::class,'device_id');
    }
    public function outputs()
    {
        return $this -> hasMany(Output::class,'device_id');
    }
}
