<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'wl_kecamatan';
    protected $guarded = [];

    public function id_provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }


    public function id_kota()
    {
        return $this->belongsTo('App\Models\Kota');
    }
    
}

