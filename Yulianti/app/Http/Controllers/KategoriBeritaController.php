<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listKategoriBerita=KategoriBerita::all();  //select * from kategori_artikel

    	//blade
    	return view('kategori_berita.index',compact('listKategoriBerita'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$KategoriBerita=KategoriBerita::find($id);

    	return view('kategori_berita.show',compact('KategoriBerita'));
    }
}