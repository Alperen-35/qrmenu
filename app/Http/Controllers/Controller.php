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
        try{
            $urun = new Urun;
            $urun->urun_adi = $request->urun_adi;
            $urun->urun_aciklama = $request->urun_aciklama;
            $urun->urun_fiyat = $request->urun_fiyat;
            $urun->urun_kategori = $request->urun_kategori;
            $name = uniqid();
            $fileEx = $request->img->extension();
            $type = $request->img->getClientMimeType();
            $new_name = $name . '.' . $fileEx;
            $request->img->move('dist/_upload', $new_name);
            // Resmi kaydedin

            $urun->urun_resim = $new_name;

            $urun->save();
            toastr()->success('Ürün sepetinizden çıkarıldı', 'Başarılı');
            return redirect()->route('urunler');
        }
        catch(\Exception $th){
            toastr()->error('Beklenmedik bir hata meydana geldi', 'Hata');
        }
    }
    public function create()
    {
    $kategoriler = Kategori::all();

    return view('front.urunekle', compact('kategoriler'));
    }
    public function urunler()
    {
        $urunler = Urun::orderBy('urun_adi','DESC')->paginate(100);
        return view('front.urunler', compact('urunler'));
    }

    public function urunDelete($id)
    {
        try {
            $urun=Urun::whereId($id)->first();
            $urun->delete();
            toastr()->success('Ürün sepetinizden çıkarıldı', 'Başarılı');

        } catch (\Exception $th) {
            toastr()->error('Beklenmedik bir hata meydana geldi', 'Hata');
        }
        return redirect()->back();
    }

    public function update($id)
    {
        $kategoriler = Kategori::all();
        $urun=Urun::whereId($id)->first();
        return view('front.update', compact('urun','kategoriler'));
    }

    public function updatePost(Request $request, $id){
        $urun=Urun::whereId($id)->first();
        $eResim=$urun->urun_resim;
        $urun->urun_adi = $request->urun_adi;
        $urun->urun_fiyat = $request->urun_fiyat;
        $urun->urun_aciklama = $request->urun_aciklama;
        $urun->urun_kategori = $request->urun_kategori;
        $name = uniqid();
        $fileEx = $request->img->extension();
        $type = $request->img->getClientMimeType();
        $new_name = $name . '.' . $fileEx;
        $request->img->move('dist/_upload', $new_name);
        // Resmi kaydedin

        $urun->urun_resim = $new_name;

        $urun->save();
    }

    public function urunDuzenle(Request $request, $id){
        $urun=Urun::whereId($id)->first();
        $eResim=$urun->urun_resim;
        $urun->urun_adi = $request->urun_adi;
        $urun->urun_fiyat = $request->urun_fiyat;
        $urun->urun_aciklama = $request->urun_aciklama;
        $urun->urun_kategori = $request->urun_kategori;
        $name = uniqid();
        $fileEx = $request->img->extension();
        $type = $request->img->getClientMimeType();
        $new_name = $name . '.' . $fileEx;
        $request->img->move('dist/_upload', $new_name);
        // Resmi kaydedin

        $urun->urun_resim = $new_name;

        $urun->save();
    }
}
