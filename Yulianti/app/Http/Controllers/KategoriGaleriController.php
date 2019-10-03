<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listKategoriGaleri=KategoriGaleri::all();  //select * from kategori_artikel

    	//blade
    	return view('kategori_galeri.index',compact('listKategoriGaleri'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$KategoriGaleri=KategoriGaleri::find($id);

    	return view('kategori_galeri.show',compact('KategoriGaleri'));
    }
}
