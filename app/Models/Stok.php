<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok_barang';
    protected $guarded = [];
    
    public function barang()
    {
        return $this->hasOne('App\Models\Barang','id_barang','id_barang');
    }
    public function reseller()
    {
        return $this->hasOne('App\Models\Reseller','id','reseller_id');
    }
    public function toko()
    {
        return $this->hasOne('App\Models\Toko','reseller_id','reseller_id');
    }
    public function kategori()
    {
        return $this->hasOne('App\Models\Kategori','id','kategori_id');
    }

}
