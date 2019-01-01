@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"> <a href="/produkpakaian"><font size="2">Produk Pakaian</font></a> </li>
         <li class="breadcrumb-item active"><font size="2">Create Data Produk</font></li>
      </ol>
   </div>
</div>
@endsection

@section('content')
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <form action="{{route('produkpakaian.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <h2 class="card-title">Create Produk</h2>
            <hr>
            <div class="form-group {{ $errors->has('Nama_Pakaian') ? 'has-error' : '' }}">
               <label class="control-label"><font size="3" color="black">Nama Pakaian</font></label>
               <input type="text" name="Nama_Pakaian" class="form-control" placeholder="masukan nama pakaian" required>
               @if ($errors->has('Nama_Pakaian'))
               <span class="help-block">
               <strong>{{ $errors->first('Nama_Pakaian') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group {{ $errors->has('Spesifikasi_Pakaian') ? 'has-error' : '' }}">
               <label class="control-label"><font size="3" color="black">Keterangan Pakaian</font></label>
               <textarea id="text" type="ckeditor" name="Spesifikasi_Pakaian" class="ckeditor" placeholder="masukan keterangan pakaian" required></textarea>
               @if ($errors->has('Spesifikasi_Pakaian'))
               <span class="help-block">
               <strong>{{ $errors->first('Spesifikasi_Pakaian') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group {{ $errors->has('Harga_Sewa') ? 'has-error' : '' }}">
               <label class="control-label"><font size="3" color="black">Harga Sewa Pakaian</font></label>
               <input type="text" name="Harga_Sewa" class="form-control" placeholder="masukan harga sewa" required>
               @if ($errors->has('Harga_Sewa'))
               <span class="help-block">
               <strong>{{ $errors->first('Harga_Sewa') }}</strong>
               </span>
               @endif
            </div>
            
            <div class="form-group {{ $errors->has('Foto') ? ' has-error' : '' }}">
               <label class="control-label"><font size="3" color="black">Foto</font></label>
               <input type="file" name="Foto" id="input-file-now-custom-3" class="dropify" accept="/img" required>
               @if ($errors->has('Foto'))
               <img src="{{ asset('/img/'.$produks->Foto) }}" style="width: 250px; height: 250px;" alt="">
               <span class="help-block">
               <strong>{{ $errors->first('Foto') }}</strong>
               </span>
               @endif
            </div>
            <input type="hidden" name="Status" value="Tidak">
            <div class="form-group {{ $errors->has('id_kategori') ? ' has-error' : '' }}">
               <label class="control-label"><font size="3" color="black">Kategori Pakaian</font></label>
               <select name="id_kategori" class="form-control">
                  <option disabled selected>Pilih Kategori Pakaian</option>
                  @foreach($kategori as $data)
                  <option value="{{$data->id}}">{{$data->Nama}}</option>
                  @endforeach
               </select>
               @if ($errors->has('id_kategori'))
               <span class="help-block">
               <strong>{{ $errors->first('id_kategori') }}</strong>
               </span>
               @endif
            </div>
            <table id="item_table" class="table table-bordered table-striped">
              <thead>
              <tr id="last">
                <!-- <th><font size="3" color="black">Id</font></th> -->
                <th><font size="3" color="black">Size</font></th>
                <th><font size="3" color="black">Stok</font></th>
                <th><button type="button" name="add" class="btn btn-success btn-sm add" onclick="addrow()"><i class="fa fa-plus-square"></button></th>
              </tr>
              </thead>
            </table>
            <div class="pull-right">
               <div class="form-group">
                  <button type="submit" class="btn btn-success btn-rounded">Save</button>
                  <a href="{{route('produkpakaian.index')}}" class="btn btn-danger btn-rounded">Cancel</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
  function addrow(){
      var no = $('#item_table tr').length;
      var html = '';
      html +='<tr id="row_'+no+'">';
      // html +='<td><input type="hidden" name="id_produk" class="form-control"></td>';
      html +='<td><select name="Nama[]" class="form-control"><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select></td>';
      html +='<td><input type="text" name="Stok[]" class="form-control stok"/></td>';
      html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="fa fa-minus-square"></i></button></td></tr>';
      $('#last').after(html);
      
    }
    function remove(no){
      $('#row_'+no).remove();
    }
</script>
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