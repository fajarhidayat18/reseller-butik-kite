<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peluncur extends Model
{
    protected $table = 'slider-peluncur';
    protected $fillable = [
        'foto',
        'toko',
        'describsi'
    ];
}
