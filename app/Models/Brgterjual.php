<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brgterjual extends Model
{
    protected $table = 'tb_barang_terjual';
    protected $guarded = [];

    public function toko()
    {
        return $this->hasOne('App\Models\Toko','id','toko_id');
    }
    public function kategori()
    {
        return $this->hasOne('App\Models\Kategori','id','kategori_id');
    }
    public function barang()
    {
        return $this->hasOne('App\Models\Barang','id_barang','barang_id');
    }
    public function stok()
    {
        return $this->hasOne('App\Models\Stok','id','stok_id');
    }
}
