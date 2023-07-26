@extends('front.layouts.master')
@section('content')
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">

                            </div>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">




                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Ürün Resmi</th>
                                                <th>Ürün Adı</th>
                                                <th>Ürün Kategorisi</th>
                                                <th>Ürün Açıklaması</th>
                                                <th>Ürün Fiyatı</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($urunler as $urun)
                                                <tr style="height: 100px">
                                                    <td class="text-center"><img style="height: 90px"
                                                            src="{{ asset('dist/_upload') }}/{{ $urun->urun_resim }}"
                                                            alt=""></td>
                                                    <td class="text-center">{{ $urun->urun_adi }}</td>
                                                    <td class="text-center">{{ $urun->urun_kategori }}</td>
                                                    <td class="text-center">{{ $urun->urun_aciklama }}</td>
                                                    <td class="text-center">{{ $urun->urun_fiyat }}</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="{{ route('urunDuzenle', $urun->id) }}">
                                                                <button type="button"  class="btn btn-primary">
                                                                    <span class="iconify-inline"
                                                                        data-icon="fa-solid:edit"></span>
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group">
                                                    
                                                                <button type="button" data-id={{ route('urunDelete',$urun->id) }}" class="btn btn-danger delete">
                                                                    <span class="iconify-inline"
                                                                        data-icon="material-symbols:delete-sharp"></span>
                                                                </button>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                                    <script>
                                        $('.delete').click(function() {
                                            var url = $(this).attr('data-id');
                                            Swal.fire({
                                                title: 'Silmek İstediğinize eiasdfaisdf',
                                                showCancelButton: true,
                                                confirmButtonText: 'Sil',
                                                confirmButtonColor: 'Red',
                                            }).then((result) => {
                                                /* Read more about isConfirmed, isDenied below */
                                                if (result.isConfirmed) {
                                                    window.location.href = url;
                                                }
                                            })
                                        });
                                    </script>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                @endsection
