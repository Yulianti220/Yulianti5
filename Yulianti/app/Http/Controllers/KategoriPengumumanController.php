<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listKategoriPengumuman=KategoriPengumuman::all();  //select * from kategori_artikel

    	//blade
    	return view('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$KategoriPengumuman=KategoriPengumuman::find($id);

    	return view('kategori_pengumuman.show',compact('KategoriPengumuman'));
    }
}
