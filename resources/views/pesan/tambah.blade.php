@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/daftar"><font size="2">Daftar Pakaian</font></a> </li>
         <li class="breadcrumb-item active"><font size="2">Pesanan</font></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <form action="{{ route('pesanan.update', $produks->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-body">
               <h2 class="card-title">Pesanan</h2>
               <hr>
               <input name="_method" type="hidden" value="PATCH">
               {{ csrf_field() }}
               <input type="hidden" name="id_produk" value="{{$produks->id}}">
               <div class="form-group">
                  <label class="control-label"><font size="3" color="black">Produk Pakaian</font></label>
                  <input class="form-control" type="text" value="{{ $produks->Nama_Pakaian }}" readonly="">
               </div>

               <div class="form-group {{ $errors->has('No_Identitas') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Nomor Identitas</font></label>
                  <input type="number" name="No_Identitas" class="form-control" placeholder="masukan nomor KTP" required>
                  @if ($errors->has('No_Identitas'))
                  <span class="help-block">
                  <strong>{{ $errors->first('No_Identitas') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('Nama_Pemesan') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Nama Pemesan</font></label>
                  <input type="text" name="Nama_Pemesan" class="form-control" placeholder="masukan nama lengkap" required>
                  @if ($errors->has('Nama_Pemesan'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Nama_Pemesan') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('Jenis_Kelamin') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Jenis Kelamin</font></label>
                  <p>
                  <font color="black" size="3"><input type="radio" name="Jenis_Kelamin" value="Laki-Laki" required> Laki Laki &nbsp;
                  <input type="radio" name="Jenis_Kelamin" value="Perempuan" required> Perempuan</font></p>
                  @if ($errors->has('Jenis_Kelamin'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Jenis_Kelamin') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('Alamat') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Alamat</font></label>
                  <textarea type="text" name="Alamat" class="form-control" placeholder="masukan alamat lengkap" required></textarea>
                  @if ($errors->has('Alamat'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Alamat') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('No_Hp') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Nomor Handphone</font></label>
                  <input type="number" name="No_Hp" class="form-control" placeholder="masukan nomor handphone" required>
                  @if ($errors->has('No_Hp'))
                  <span class="help-block">
                  <strong>{{ $errors->first('No_Hp') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('Tgl_Sewa') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Tanggal Sewa</font></label>
                  <input type="date" name="Tgl_Sewa" value="{{ carbon\carbon::today()->toDateString() }}" class="form-control" required>
                  @if ($errors->has('Tgl_Sewa'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Tgl_Sewa') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('Tgl_Haruskembali') ? 'has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Tanggal Harus Kembali</font></label>
                  <input type="date" name="Tgl_Haruskembali" value="{{ carbon\carbon::today()->addDays(2)->toDateString() }}" class="form-control" required>
                  @if ($errors->has('Tgl_Haruskembali'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Tgl_Haruskembali') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="pull-right">
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-rounded">Sewa</button>
                     <a href="{{route('daftar')}}" class="btn btn-danger btn-rounded">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection