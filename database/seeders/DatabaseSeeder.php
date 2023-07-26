<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $kategori1 = new Kategori;
        $kategori1->kategori_adi = 'Ana Yemek';
        $kategori1->save();

        $kategori2 = new Kategori;
        $kategori2->kategori_adi = 'Çorba';
        $kategori2->save();

        $kategori3 = new Kategori;
        $kategori3->kategori_adi = 'Atıştırmalıklar';
        $kategori3->save();

        $kategori3 = new Kategori;
        $kategori3->kategori_adi = 'İçecekler';
        $kategori3->save();
    }
}
