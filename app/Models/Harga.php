<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'harga';
    protected $fillable = [
        'harga_modal',
        'harga_jual',
        'barang_id'
    ];
    public function barang()
    {
        return $this->hasOne('App\Models\Barang','id_barang','barang_id');
    }
}
