<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Urun;
use App\Models\Kategori;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function eklePost(Request $request){
        $urun = new Urun;
        $urun->urun_adi = $request->urun_adi;
        $urun->urun_aciklama = $request->urun_aciklama;
        $urun->urun_fiyat = $request->urun_fiyat;
        $urun->urun_kategori = $request->urun_kategori;
        $urun->urun_resim = '/public/_upload/'. $request->urun_resim;

        $file_tmp = $_FILES[$request->urun_resim]['tmp_name'];
        $file_name = $_FILES[$request->urun_resim]['name'];
        $upload_dir = 'public/dist/_upload'; // Yüklenen resimlerin kaydedileceği klasör

        // Örneğin dosya adını rastgele oluşturabiliriz:
        $random_name = uniqid(). '_'. $file_name;

        // Resmi kaydedin
        move_uploaded_file($file_tmp, $upload_dir. $random_name);

        $urun->urun_resim = '/public/dist/_upload/'. $random_name;

        $urun->save();
    
        return redirect()->route('urunler');
    }
    public function create()
    {
    $kategoriler = Kategori::all();

    return view('front.urunekle', compact('kategoriler'));
    }
    public function urunler()
    {
        $urunler = Urun::orderBy('urun_adi','DESC')->paginate(9);
        return view('front.urunler', compact('urunler'));
    }
}
