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
        <form action="{{ route('paten.simpan') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" name="judul"
                placeholder="Judul Paten"
                class="form-control">
                <p class="text-danger">{{ $errors->first('judul') }}</p>
            </div>
            <div class="form-group">
                <label for="">Nama Inventor</label>
                <input type="text" name="nama_inventor"
                placeholder="Nama Inventor"
                class="form-control">
                <p class="text-danger">{{ $errors->first('nama_inventor') }}</p>
            </div>
            <div class="form-group">
                <label for="">Alamat Inventor</label>
                <input type="text" name="alamat_inventor"
                placeholder="Alamat Inventor"
                class="form-control">
                <p class="text-danger">{{ $errors->first('alamat_inventor') }}</p>
            </div>
            <div class="form-group">
                <label for="">Nomor Telepon Inventor</label>
                <input type="text" name="nohp_inventor"
                placeholder="Nomor Telepon Inventor"
                class="form-control">
                <p class="text-danger">{{ $errors->first('nohp_inventor') }}</p>
            </div>
            <div class="form-group">
                <label for="">Program Studi Inventor</label>
                <input type="text" name="program_studi_inventor"
                placeholder="Program Studi Inventor"
                class="form-control">
            </div>
            <div class="form-group">
                <label for="">Jurusan Inventor</label>
                <input type="text" name="jurusan_inventor"
                placeholder="Jurusan Inventor"
                class="form-control">
            </div>
            <div class="form-group">
                <label for="">Abstrak</label>
                <input type="file" name="abstrak"
                placeholder="Abstrak"
                class="form-control">
                <p class="text-danger">{{ $errors->first('abstrak') }}</p>
            </div>
            <div class="form-group">
                <label for="">Klaim</label>
                <input type="file" name="klaim"
                placeholder="Klaim"
                class="form-control">
                <p class="text-danger">{{ $errors->first('klaim') }}</p>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" name="status"
                placeholder="Status"
                class="form-control">
            </div>
    
            <button class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>
  </main>
@endsection
