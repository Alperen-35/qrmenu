<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;

    protected $table = 'urunler';

    protected $fillable = [
        'urun_adi',
        'urun_aciklama',
        'urun_fiyat',
        'urun_kategori',
        'urun_resim'
    ];
    

    public function getProducts()
    {
        return $this->all();
    }
}