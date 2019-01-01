@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/produkpakaian"><font size="2">Produk Pakaian</font></a></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-12">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   @include('sweet::alert')
   <div class="card">
      <div class="card-body">
         <h2 class="card-title">Data Table Produk Pakaian</h2>
         <hr>
         <a href="{{route('produkpakaian.create')}}"><button class="btn btn-success btn-rounded"><i class="fa fa-plus-circle"> Create Data</i></button></a>
         <div class="table-responsive mt-10">
            <table id="myTable" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th><font size="3" color="black">Nomor</font></th>
                     <th><font size="3" color="black">Nama Pakaian</font></th>
                     <th><font size="3" color="black">Detail Baju</font></th>
                     <th><font size="3" color="black">Harga Sewa</font></th>
                     <th><font size="3" color="black">Foto</font></th>
                     <th><font size="3" color="black">Kategori Pakaian</font></th>
                     <th><font size="3" color="black">Action</font></th>
                  </tr>
               </thead>
               <tbody>
                  @php $no=1 @endphp
                  @foreach($produk as $data)
                  <tr>
                     <td><font size="3" color="black">{{$no++}}</font></td>
                     <td><font size="3" color="black">{{$data->Nama_Pakaian}}</font></td>
                     <td><font size="3" color="black">{!! $data->Spesifikasi_Pakaian !!}</font></td>
                     <td><font size="3" color="black">{{number_format($data->Harga_Sewa,2,',','.')}}</font></td>
                     <td><img src="{{ asset('/img/'.$data->Foto.'')}}" width="70" height="70"></td>
                     <td><font size="3" color="black">{{$data->kategori->Nama}}</font></td>
                     <td>
                        <form action="{{route('produkpakaian.destroy',$data->id)}}" method="post">
                           <input type="hidden" name="_method" value="Delete">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn btn-success" href="{{route('produkpakaian.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                           <a data-toggle="tooltip" data-placement="top" title="Show Produk" class="btn btn-warning" href="{{route('produkpakaian.show',$data->id)}}"><i class="fa fa-info"></i></a>
                           <button data-toggle="tooltip" data-placement="top" title="Hapus Data" type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus ?')"><i class="fa fa-trash"></i></button>
                           {{csrf_field()}}
                        </form>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection