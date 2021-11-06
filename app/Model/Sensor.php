<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sensor extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tempValue', 'humValue', 'soilHumValue',
        'weatherValue',

    ];

    public function devices()
    {
        return $this -> belongsTo(Device::class,'device_id');
    }
}
