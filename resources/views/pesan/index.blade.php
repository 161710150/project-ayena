@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/pesanan"><font size="2">Produk Pakaian</font></a></li>
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
         <h2 class="card-title">Data Pemesanan</h2>
         <hr>
         <div class="table-responsive mt-10">
            <table id="myTable" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th><font size="3" color="black">No</font></th>
                     <th><font size="3" color="black">Nama Produk</font></th>
                     <th><font size="3" color="black">Nomor Identitas</font></th>
                     <th><font size="3" color="black">Nama Pemesan</font></th>
                     <th><font size="3" color="black">Total Sewa</font></th>
                     <th><font size="3" color="black">Status</font></th>
                     <th><font size="3" color="black">Action</font></th>
                  </tr>
               </thead>
               <tbody>
                  @php $no=1 @endphp
                  @foreach($pesans as $data)
                  <tr>
                     <td><font size="3" color="black">{{$no++}}</font></td>
                     <td><font size="3" color="black">{{$data->produk->Nama_Pakaian}}</font></td>
                     <td><font size="3" color="black">{{$data->No_Identitas}}</font></td>
                     <td><font size="3" color="black">{{$data->Nama_Pemesan}}</font></td>
                     <td><font size="3" color="black">{{number_format($data->Total_Sewa,2,',','.')}}</font></td>
                     <td><font size="3" color="black">{{$data->Status}}</font></td>
                     <td>
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <a data-toggle="tooltip" data-placement="top" title="Kembalikan" class="btn btn-success" href="{{route('kembali.edit',$data->id)}}"><i class="fa fa-check"></i></a>
<!--                            <a data-toggle="tooltip" data-placement="top" title="Detail Pesanan" class="btn btn-warning" href="{{route('pesanan.show',$data->id)}}"><i class="fa fa-info"></i></a>
                           <button data-toggle="tooltip" data-placement="top" title="Hapus Data" type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus ?')"><i class="fa fa-trash"></i></button> -->
                           {{csrf_field()}}
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