<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listBerita=Berita::all();  //select * from kategori_artikel

    	//blade
    	return view('berita.index',compact('listBerita'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$Berita=Berita::find($id);

    	return view('berita.show',compact('Berita'));
    }
}
