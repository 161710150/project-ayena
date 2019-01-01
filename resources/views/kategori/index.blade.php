@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item active"><font size="2"><a href="#">Kategori Pakaian</a></font></li>
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
         <h2 class="card-title">Data Table Kategori</h2>
         <hr>
         <a href="{{route('kategoripakaian.create')}}"><button class="btn btn-success btn-rounded"><i class="fa fa-plus-circle"> Create Data</i></button></a>
         <div class="table-responsive mt-10">
            <table id="myTable" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th><font size="4" color="black">Nomor</font></th>
                     <th><font size="4" color="black">Nama Kategori</font></th>
                     <th><font size="4" color="black">Action</font></th>
                  </tr>
               </thead>
               <tbody>
                  @php $no=1 @endphp
                  @foreach($kategori as $data)
                  <tr>
                     <td><font size="4" color="black">{{$no++}}</font></td>
                     <td><font size="4" color="black">{{$data->Nama}}</font></td>
                     <td>
                        <form action="{{route('kategoripakaian.destroy',$data->id)}}" method="post">
                           <input type="hidden" name="_method" value="Delete">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn btn-success" href="{{route('kategoripakaian.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
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
 
