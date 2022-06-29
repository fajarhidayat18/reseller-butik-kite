<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'tb_barang';
    protected $primaryKey = 'id_barang';
    protected $guarded = [];
    public function kategori()
    {
        return $this->hasOne('App\Models\Kategori', 'id', 'kategori_id');
    }

    public function stok()
    {
        return $this->hasMany('App\Models\Stok', 'id');
    }

    public function reseller()
    {
        return $this->belongsTo('App\Models\Reseller', 'id', 'reseller_id');
    }
}
