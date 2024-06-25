@extends('layouts.agon')

@section('content')
<main class="main">
    <section class="section-box">
      <div class="banner-hero banner-head-image" style="background: url({{ asset('agon/imgs/page/blog/single/banner.png') }});">
        <div class="container">
          <div class="text-center"><span class="tag-1 bg-6 color-green-900">Pendaftaran</span>
            <h1 class="text-heading-1 color-white mt-30">Pendaftaran Paten</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-2">
        <h4>Pengenalan Paten</h4>
        <p>Paten adalah hak eksklusif yang 
            diberikan kepada penemu invensi 
            (inventor) atas hasil invensinya di 
            bidang teknologi </p>
        <p>Paten diatur dalam Undang-Undang 
            Nomor 13 Tahun 2016
                tentang Paten. </p>
        <h4 class="mt-2">Invensi yang Bisa Dipatenkan</h4>

        <ol style="list-style: square outside none; margin-left: 30px !important; margin-right: 50px">
            <li>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.</li>
            <li>Memiliki langkah inventif:  Suatu invensi berbeda dengan discovery. Invensi 
                memiliki langkah inventif, dimana ada proses 
                menciptakan sesuatu yang benar-benar baru yang 
                berasal dari ide seseorang. Misalnya : vaksin covid
                19, teknologi kereta cepat, sedotan eksibel, dll.
                 Sedangkan discovery adalah menemukan sesuatu 
                yang sudah ada di alam yang belum ppernah 
                ditemukan oleh siapapun. Misalnya : penemuan 
                mineral alam, spesies binatang, dll.</li>
            <li>Invensi tersebut dapat diterapkan dalam industri: Harus dapat diproduksi dalam jumlah yang banyak, 
                berulang ulang dengan kualitas yang sama.</li>
            
        </ol>
    </div>
    <div style="height: 30px"></div>
  </main>
@endsection
