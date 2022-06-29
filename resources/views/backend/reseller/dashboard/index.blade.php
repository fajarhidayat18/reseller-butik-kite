@extends('backend.layouts.app')
@section('title','Dashboard')
@section('css')
<link rel="stylesheet" href="{{asset('/')}}/template/dist/css/adminlte.min.css">
    
@endsection
@section('content')

<div class="container-fluid">
  <div class="card">
      
      <h4 class="card-title card-header">Dashboard</h4>
      <div class="card-body">
          <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Barang Terjual</span>
                    <span class="info-box-number">
                      10
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Stok Tersedia</span>
                    <span class="info-box-number">41,410</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
    
              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>
    
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Pendapatan</span>
                    <span class="info-box-number">760</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
      </div>
  </div>
  <div class="card">
    <div class="card-header border-0">
      <div class="d-flex justify-content-between">
        <h3 class="card-title">Sales</h3>
        <a href="javascript:void(0);">View Report</a>
      </div>
    </div>
    <div class="card-body">
      <div class="d-flex">
        <p class="d-flex flex-column">
          <span class="text-bold text-lg">$18,230.00</span>
          <span>Sales Over Time</span>
        </p>
        <p class="ml-auto d-flex flex-column text-right">
          <span class="text-success">
            <i class="fas fa-arrow-up"></i> 33.1%
          </span>
          <span class="text-muted">Since last month</span>
        </p>
      </div>
      <!-- /.d-flex -->

      <div class="position-relative mb-4">
        <canvas id="sales-chart" height="200"></canvas>
      </div>

      <div class="d-flex flex-row justify-content-end">
        <span class="mr-2">
          <i class="fas fa-square text-primary"></i> This year
        </span>

        <span>
          <i class="fas fa-square text-gray"></i> Last year
        </span>
      </div>
    </div>
  </div>
</div>



@endsection
@section('js')
<script src="{{ asset('/')}}/template/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('/')}}/template/dist/js/demo.js"></script>
<script src="{{ asset('/')}}/template/dist/js/pages/dashboard3.js"></script>    
@endsection