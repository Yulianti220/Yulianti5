<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table='Kategori_berita';

    protected $fillable=[
    	'nama','users_id'
    ];

    protected $casts=[
    	
    ];
}
