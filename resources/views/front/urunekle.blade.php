@extends('front.layouts.master')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                     <div class="row align-items-center">

                     </div>
                    </div>
                 </div>
                 <!-- end page title -->    


                <form action="{{ route('eklePost') }}" method="post" class="p-5" style="background-color:rgb(255, 255, 255); border-radius:20px;margin-bottom:20px">
                    <div class="container-fluid">
                            <div style="margin-top: 0.1cm;width:20cm;">
                                <label style="font-size: 17px;" for="floatingInput">Ürün Adı</label>
                                <input name="urun_adi" type="rich-text" class="form-control">
                            </div>

                            <div style="margin-top: 0.3cm;width:20cm;">
                                <label style="font-size: 17px;" for="floatingInput"> Ürün açıklama</label>
                            </div>
                            <textarea name="urun_aciklama" name="tr-urun-aciklama" style="width: 20cm;" maxlength="400" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="5"></textarea>

                            <div style="margin-top: 0.2cm;width:20cm;">
                                <label style="font-size: 17px;" for="floatingInput">Ürün Fiyat</label>
                                <input type="rich-text" name="urun_fiyat" class="form-control">
                            </div>

                            <div style="margin-top: 0.4cm;width:20cm;">
                                <label style="font-size: 17px;" for="floatingInput">Ürün Kategori
                                <span>
                                <div class="row mb-3">
                                    <div style="width:20.6cm;">
                                        <select name="urun_kategori" class="form-select" aria-label="Default select example">
                                            <option  selected=""></option>
                                            @foreach ($kategoriler as $kategori)
                                                <option value="{{ $kategori->kategori_adi }}">{{ $kategori->kategori_adi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                </span>
                                </label>
                            </div>

                            <div style="width: 20cm; height: 7cm;margin-top: 0.1cm;" >
                                <label style="font-size: 17px;" for="floatingInput">Resimi Bu Alana Atın</label>
                                
                                <input name="urun_resim" type="file" class="dropify" data-max-file-size="2M" />
                            </div>
                            <button style="width: 20cm;" type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </div> <!-- container-fluid -->
                </form>
            </div>
            <!-- End Page-content -->
            @endsection 

            @section('js')
            <script>
                $(document).ready(function() {
                    $('.dropify').dropify({
                        messages: {
                            default: 'Dosyayı buraya sürükleyin veya tıklayın',
                            replace: 'Değiştir',
                            remove: 'Kaldır',
                            error: 'Dosya yüklenemedi'
                        },
                        error: {
                            fileSize: 'Maksimum dosya boyutu 2MiB '
                        },
                        events: {
                            drop: function(event, data) {
                                var input = data.input[0];
                                var file = data.files[0];
                                var formData = new FormData();
                                formData.append('urun_resim', file);
                            }
                        }
                    });
                });
            </script>
            @endsection