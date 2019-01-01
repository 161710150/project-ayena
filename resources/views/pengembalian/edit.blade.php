@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/daftar"><font size="2">Daftar Pakaian</font></a> </li>
         <li class="breadcrumb-item active"><font size="2">Pengembalian</font></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <form action="{{ route('kembali.update', $pesan->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-body">
               <h2 class="card-title">Pengembalian</h2>
               <hr>
               <input name="_method" type="hidden" value="PATCH">
               {{ csrf_field() }}
               
               <div class="col-md-12">
                  <center><b><font size="5px" color="black">Data Pesanan</font></b></center>
                  <font size="4" color="black">Nama Produk Pesanan <a style="margin-left: 10px">: <b>{{$pesan->produk->Nama_Pakaian}}</b></font><br>
                  <font size="4" color="black">Nomor Identitas <a style="margin-left: 60px">: <b>{{$pesan->No_Identitas}}</b></font><br>
                  <font size="4" color="black">Nama Pemesan <a style="margin-left: 62px">: <b>{{$pesan->Nama_Pemesan}}</b></font><br>
                  <font size="4" color="black">Jenis Kelamin <a style="margin-left: 75px">: <b>{{$pesan->Jenis_Kelamin}}</b></font><br>
                  <font size="4" color="black">Alamat <a style="margin-left: 126px">: <b>{{$pesan->Alamat}}</b></font><br>
                  <font size="4" color="black">Nomor Telephone <a style="margin-left: 49px">: <b>{{$pesan->No_Hp}}</b></font><br>
                  <font size="4" color="black">Tanggal Sewa <a style="margin-left: 77px">: <b>{{$pesan->Tgl_Sewa}}</b></font><br>
                  <font size="4" color="black">Tanggal Harus Kembali <a style="margin-left: 10px">: <b>{{$pesan->Tgl_Haruskembali}}</b></font><br>
                  <p>
                  <div class="form-group {{ $errors->has('Tgl_kembali') ? 'has-error' : '' }}">
                     <label class="control-label"><font size="3" color="black"><b>Tanggal Kembali</b></font></label>
                     <input type="date" name="Tgl_kembali" value="{{ carbon\carbon::today()->toDateString() }}" class="form-control" required>
                     @if ($errors->has('Tgl_kembali'))
                     <span class="help-block">
                     <strong>{{ $errors->first('Tgl_kembali') }}</strong>
                     </span>
                     @endif
                  </div>
                  <input type="hidden" name="Status" value="Disewa">
               </div>
               <div class="pull-right">
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-rounded">Kembalikan</button>
                     <a href="{{route('pesanan.index')}}" class="btn btn-danger btn-rounded">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection