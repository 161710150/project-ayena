@extends('layouts.template')
@section('breadcrumb')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
      	<li class="breadcrumb-item"><a href="/daftarproduk"><font size="2">Daftar Produk Pakaian</font></a></li>
      	<li class="breadcrumb-item active"><font size="2">Detail Produk</font></li>
      </ol>
   </div>
</div>
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
	  <!-- Column -->
	  <div class="col-lg-12 col-md-12">
	    <div class="card">
	      <div class="card-body">
	        <h2 class="card-title mb-20 mt-0 align-self-center">Detail Produk</h2>
	        <hr>
	        <div class="row">
	          <div class="col-lg-4 col-md-4">
	                <li><img src="{{ asset('/img/'.$detail->Foto.'')}}" style="width: 380px; height: 400px" /></li>
	          </div>
	          <!-- End of product slider -->
	          <div class="col-lg-8 col-md-8">
	            <div class="row">
	              <div class="form-wrap form-wrap2 col-12 mt-4">
	                <form class="form-horizontal">
	                  <div class="col-sm-12 col-xs-12">
	                    <table class="table table-bordered table-striped">
	                    	<tbody>
	                    		<tr>
	                    			<td><font color="black" size="4">Nama Pakaian</td>
	                    			<td><font color="black" size="4">{{$detail->Nama_Pakaian}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td><font color="black" size="4"><font color="black" size="4">Harga Sewa</td>
	                    			<td><font color="black" size="4">{{number_format($detail->Harga_Sewa,2,',','.')}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td><font color="black" size="4">Kategori Pakaian</td>
	                    			<td><font color="black" size="4">{{$detail->kategori->Nama}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td><font color="black" size="4">Detail Baju</td>
	                    			<td><font color="black" size="4">{!! $detail->Spesifikasi_Pakaian !!}</td>
	                    		</tr>
	                    	</tbody>
	                    </table>

		                    <div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
		                    	<select name="Nama[]" class="form-control" multiple="multiple" id="selectmultiple">
		                    		<option disabled selected>Pilih Size Pakaian</option>
		                    		@foreach($size as $data)
		                    		<option value="{{$data->id}}">{{$data->Nama}}</option>
		                    		@endforeach
		                    	</select>
		                    	@if ($errors->has('Nama'))
		                    	<span class="help-block">
		                    		<strong>{{ $errors->first('Nama') }}</strong>
		                    	</span>
		                    	@endif
		                    </div>
	                  	</div>
	                  <div class="pull-right">
	                    <div class="col-md-6 pl-30">
	                      <!-- <div class="">
	                         <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
	                        <label class="m-l-10"> Available</label>
	                      </div> -->
	                    </div>
	                    <div class="form-group">
	                    	@if($detail->Status == 'Tidak')
                        	<a href="{{route('pesanan.edit', $detail->id)}}" class="btn btn-success btn-rounded">Sewa</a>
                        	@elseif($detail->Status == 'Disewa')
                        	<a class="btn btn-danger btn-rounded" disabled><font color="white">Sedang Disewa</font></a>
                        	@endif
                 			<a href="/daftar" class="btn btn-danger btn-rounded">Cancel</a>
                       	</div>
	                  </div>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@endsection