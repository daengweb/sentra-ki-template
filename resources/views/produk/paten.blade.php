@extends('layouts.agon')

@section('content')
<style>
    table{border:1px solid black}
    tr td{
        border: 1px solid black
    }
    tr th{
        border: 1px solid black
    }
    tr{
        border: 1px solid black
    }
</style>


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
        <h4>Paten Tahun 2022</h4>
        <table class="table table-bordered mt-2">
            <tr style="font-size: 14pt; font-weight: bold">
                <th><a href="#">No </a></th>
                <th><a href="#">Judul</a></th>
                <th><a href="#">Tahun Diajukan</a></th>
                <th><a href="#">Status</a></th>
            </tr>
            <tbody>
                <tr>
                    <td><a href="#">1</a></td>
                    <td><a href="#">TANGAN ROBOT PEMASANG TEKEP ISOLATOR</a></td>
                    <td><a href="#">2022</a></td>
                    <td><a href="#">Sudah Ditanggapi (Formalitas)</a></td>
                </tr>
                <tr>
                    <td><a href="#">2</a></td>
                    <td><a href="#">METODE PENGUJIAN TAHANAN ISOLASI SEPATU </a></td>
                    <td><a href="#">2022</a></td>
                    <td><a href="#">Siap Diumumkan Paten</a></td>
                </tr>
                <tr>
                    <td><a href="#">3</a></td>
                    <td><a href="#">SISTEM KENDALI TANPA KABEL TANGAN ROBOT PEMASANG TEKEP ISOLATOR KLEM ISOLATOR TARIK UNTUK PEKERJAAN DALAM KEADAAN BERTEGANGAN </a></td>
                    <td><a href="#">2022</a></td>
                    <td><a href="#">Siap Diumumkan Paten</a></td>
                </tr>
                <tr>
                    <td><a href="#">4</a></td>
                    <td><a href="#">PERANGKAT LUNAK SISTEM KENDALI TANPA KABEL TANGAN ROBOT PEMASANG TEKEP ISOLATOR </a></td>
                    <td><a href="#">2022</a></td>
                    <td><a href="#">Siap Diumumkan Paten</a></td>
                </tr>
                <tr>
                    <td><a href="#">5</a></td>
                    <td><a href="#">KANCINGAN DARURAT TANGAN ROBOT PEMASANG TEKEP ISOLATOR </a></td>
                    <td><a href="#">2022</a></td>
                    <td><a href="#">Siap Diumumkan Paten</a></td>
                </tr>
            </tbody>   
        </table>
            
        

    </div>
  </main>
@endsection
