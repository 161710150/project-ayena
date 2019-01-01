@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"> <a href="/produkpakaian"><font size="2">Produk Pakaian</font></a> </li>
         <li class="breadcrumb-item active"><font size="2">Update Produk</font></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <form action="{{ route('produkpakaian.update', $produks->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
               <h2 class="card-title">Update Produk</h2>
               <hr>
               <input name="_method" type="hidden" value="PATCH">
               @csrf
               <div class="form-group {{ $errors->has('Nama_Pakaian') ? ' has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Nama Kategori</font></label>
                  <input type="text" name="Nama_Pakaian" class="form-control" value="{{ $produks->Nama_Pakaian }}" required>
                  @if ($errors->has('Nama_Pakaian'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Nama_Pakaian') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('Spesifikasi_Pakaian') ? ' has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Spesifikasi Pakaian</font></label>
                  <textarea id="text" type="ckeditor" name="Spesifikasi_Pakaian" class="ckeditor" required="">{{$produks->Spesifikasi_Pakaian}}</textarea>
                  @if ($errors->has('Spesifikasi_Pakaian'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Spesifikasi_Pakaian') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('Harga_Sewa') ? ' has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Harga Sewa</font></label>
                  <input type="text" name="Harga_Sewa" class="form-control" value="{{ $produks->Harga_Sewa }}" required>
                  @if ($errors->has('Harga_Sewa'))
                  <span class="help-block">
                  <strong>{{ $errors->first('Harga_Sewa') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group">
                  <label class="control-label"><font size="3" color="black">Foto</font></label>
                  @if (isset($produks) && $produks->Foto)
                  <input type="file" name="Foto" id="input-file-now-custom-3" class="dropify" data-height="250" data-default-file="{{asset('/img/'.$produks->Foto)}}">
                  @endif
               </div>

               <div class="form-group {{ $errors->has('id_kategori') ? ' has-error' : '' }}">
                  <label class="control-label"><font size="3" color="black">Kategori</font></label>
                  <select name="id_kategori" class="form-control">
                  @foreach($kategori as $data)
                  <option value="{{$data->id}}" {{$kategoriselected == $data->id ?'selected = "selected"': ''}} >{{$data->Nama}}</option>
                  @endforeach 
                  </select>
                  @if ($errors->has('id_kategori'))
                  <span class="help-block">
                  <strong>{{ $errors->first('id_kategori') }}</strong>
                  </span>
                  @endif
               </div>
               <input type="hidden" name="Status" value="Tidak">
               <div class="pull-right">
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-rounded">Save</button>
                     <a href="{{route('produkpakaian.index')}}" class="btn btn-danger btn-rounded">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
@section('scripts')
<script src="{{ asset('/hyrax/assets/vendors/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
@endsection