<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='Kategori_galeri';

    protected $fillable=[
    	'nama','users_id'
    ];

    protected $casts=[
    	
    ];
}
