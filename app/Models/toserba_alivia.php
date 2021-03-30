<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\toserba_alivia as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class toserba_alivia extends Model
{
    protected $table = 'toserba_alivia';
    public $timestamps= false;
    protected $primaryKey = 'id_barang';
    /**
     * The attributes that are mass assignable. *
     * @var array
     */
    protected $fillable = [
        'id_barang',
        'kode_barang',
        'nama_barang',
        'kategori',
        'harga',
        'jumlah',
    ];
}
