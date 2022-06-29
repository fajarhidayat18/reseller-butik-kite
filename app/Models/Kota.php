<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'wl_kota';
    // protected $fillable = [
    //     'id_provinsi',
    //     'nama'
    // ];

    protected $guarded = [];
    public function id_provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }

    public function kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan');
    }
}
