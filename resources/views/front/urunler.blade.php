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
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Ürün Resmi</th>
                                                    <th>Ürün Adı</th>
                                                    <th>Ürün Kategorisi</th>
                                                    <th>Ürün Açıklaması</th>
                                                    <th>Ürün Fiyatı</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                @foreach ($urunler as $urun)
                                                <tr>
                                                    <td><img style="height: 100px" src="{{ $urun->urun_resim }}" alt=""></td>
                                                    <td>{{ $urun->urun_adi }}</td>
                                                    <td>{{ $urun->urun_kategori }}</td>
                                                    <td>{{ $urun->urun_aciklama }}</td> 
                                                    <td>{{ $urun->urun_fiyat }}</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
@endsection