@extends('layouts.admin')

@section('title')
    <title>PNB | Dashboard</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-load-b"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
