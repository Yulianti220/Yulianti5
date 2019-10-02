<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='Kategori_artikel';

    protected $fillable=[
    	'nama','users_id'
    ];

    protected $casts=[
    	
    ];
}
