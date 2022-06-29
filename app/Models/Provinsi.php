<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'wl_provinsi';
    protected $guarded = [];

    public function kota()
    {
        return $this->hasMany('App\Models\Kota');
    }
    
    public function kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan');
    }
}
