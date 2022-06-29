<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tb_toko';
    // protected $castes = ['reseller_id' => 'string'];
    protected $guarded = [];

    public function reseller()
    {
        return $this->hasOne('App\Models\Reseller','id','reseller_id');
    }
}
