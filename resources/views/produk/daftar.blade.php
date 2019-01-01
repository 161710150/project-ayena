@extends('layouts.template')
@section('content')

<div class="row">
   <div class="col-12">
      <h4 class="d-inline">Daftar Produk Pakaian <a href="#code1" data-toggle="collapse"></a></h4>
      <p class="text-muted mt-0">Produk Yang Tersedia</p>
      <div id="code1" class="collapse">
         <div class="highlight">
            <pre>
    <code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Custom Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code>
</pre>
         </div>
      </div>
      <!-- Row -->
      <div class="row">
         <!-- column -->
         @foreach($daftar as $data)
         <div class="col-lg-3 col-md-6">
            <!-- Card -->
            <div class="card">
               <img class="card-img-top img-responsive" src="{{ asset('/img/'.$data->Foto.'')}}" alt="Card image cap" style="width: 100%; height: 260px">
               <div class="card-body">
                  <p><h4 class="card-title">{{$data->Nama_Pakaian}}</h4></p>
                  <p class="card-text">Rp. {{number_format($data->Harga_Sewa,2,',','.')}}</p>
                  @if($data->Status == 'Tidak')
                  <a href="{{route('detailproduk',$data->id)}}" class="btn btn-primary">Detail Produk</a>
                  @elseif($data->Status == 'Disewa')
                  <a class="btn btn-danger" disabled><font color="white">Sedang Disewa</font></a>
                  @endif
               </div>
            </div>
            <!-- Card -->
         </div>
         @endforeach
         <!-- column -->
      </div>
      <!-- Row -->
   </div>
</div>

@endsection