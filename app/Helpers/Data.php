<?php

namespace App\Helpers;

use App\Models\Stok;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public static function stok($id_barang){
        $stok = Stok::where('id_barang', $id_barang)->sum('stok_akhir');
        return $stok;
    }
}
