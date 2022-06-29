<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Reseller extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guard = 'reseller';
    protected $table = 'reseller';
    protected $fillable = [
        'nama',
        'name',
        'nama_toko',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'no_hp',
        'email',
        'password',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'foto',
        'foto_kronologi',
        'deskripsi'
    ];
    public function Stok()
    {
        return $this->belongTo('App\Models\Stok');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}