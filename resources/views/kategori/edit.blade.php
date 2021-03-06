@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/kategoripakaian"><font size="2">Kategori Pakaian</font></a> </li>
         <li class="breadcrumb-item active"><font size="2">Update Data Kategori</font></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <form action="{{ route('kategoripakaian.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-body">
               <h2 class="card-title">Update Produk</h2>
               <hr>
               <input name="_method" type="hidden" value="PATCH">
               {{ csrf_field() }}
               <div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
                  <label class="control-label"><font size="4" color="black">Nama Kategori</font></label>
                  <input type="text" name="Nama" class="form-control" value="{{ $kategori->Nama }}" required>
                  @if ($errors->has('Nama'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Nama') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="pull-right">
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-rounded">Save Change</button>
                     <a href="{{route('kategoripakaian.index')}}" class="btn btn-danger btn-rounded">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection