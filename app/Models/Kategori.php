<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = [
        // 'main_kategori',
        // 'kategori'
    ];
    
    public function barang()
    {
        return $this->hasMany('App\Models\Barang','kategori_id');
    }
}
