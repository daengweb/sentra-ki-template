@extends('layouts.agon')
@section('content')
<main class="main">
    <section class="section-box">
      <div class="banner-hero banner-head-image" style="background: url({{ asset('agon/imgs/page/blog/single/banner.png') }});">
        <div class="container">
          <div class="text-center"><span class="tag-1 bg-6 color-green-900">Politeknik Negeri Bali1</span>
            <h1 class="text-heading-1 color-white mt-30">Microsoft Patch Management<br class="d-lg-block d-none"> For Home Users</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="section-box overflow-visible mt-80">
      <div class="container">
        <h2 class="text-heading-3 text-center color-gray-900 mb-60">Trusted by the world&rsquo;s leading companies</h2>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-partners">
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-1.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-2.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-3.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-4.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-5.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-6.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-7.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-8.svg') }}"></a></li>
              <li><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="{{ asset('agon/imgs/slider/logo/sample-logo-9.svg') }}"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    
    <section class="section-box">
      <div class="container mt-30">
        <div class="row">
          <div class="col-lg-1 col-sm-1 col-12"></div>
          <div class="col-lg-10 col-sm-10 col-12 text-center">
            <h2 class="text-heading-1 color-gray-900 mb-10">Latest News</h2>
            <p class="text-body-lead-large color-gray-600 mt-20">From Our Blog And Event Fanpage</p>
          </div>
          <div class="col-lg-1 col-sm-1 col-12"></div>
        </div>
      </div>
      <div class="container mt-90">
        <div class="row">
          <div class="col-lg-6 col-sm-12 pr-30 mb-50">
            <div class="card-grid-style-4"><span class="tag-dot">Posted By Admin</span><a class="text-heading-4" href="blog-single.html">We can blend colors multiple ways, the most common</a>
              <div class="grid-4-img"><a href="blog-single.html"><img src="{{ asset('agon/imgs/page/homepage1/img-news-1.png') }}" alt="Agon"></a></div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 pr-30 mb-50">
            <div class="card-grid-style-4"><span class="tag-dot">Posted By Admin</span><a class="text-heading-4" href="blog-single.html">How To Blow Through Capital At An Incredible Rate</a>
              <div class="grid-4-img"><a href="blog-single.html"><img src="{{ asset('agon/imgs/page/homepage1/img-news-1.png') }}" alt="Agon"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection