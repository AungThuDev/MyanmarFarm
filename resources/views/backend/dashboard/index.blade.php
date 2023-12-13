@extends('layouts.master')
@section('home','nav-link active')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
          <div class="card mb-3 bg-success" style="height: 200px;">
                    <div class="card-body">
                        <h3><i class="fas fa-newspaper"></i>&nbsp;News</h3>
                        <span class="text-light">
                            Total News : 2
                        </span><br>
                        <a href="{{route('admin.blogs.index')}}" class="text-light">View Detail >></a>
                    </div>
                </div>
          </div>
          <div class="col-lg-4">
          <div class="card mb-3 bg-warning" style="height: 200px;">
                    <div class="card-body">
                        <h3><i class="fas fa-clipboard-list"></i>&nbsp;Vacancy</h3>
                        <span class="text-light">
                            Total Vacancies : 2
                        </span><br>
                        <a href="{{route('admin.vacancies.index')}}" class="text-light">View Detail >></a>
                    </div>
                </div>
          </div>
          <div class="col-lg-4">
          <div class="card mb-3 bg-primary" style="height: 200px;">
                    <div class="card-body">
                        <h3><i class="fas fa-images"></i>&nbsp;Gallery</h3>
                        <span class="text-light">
                            Total Photos : 2
                        </span><br>
                        <a href="{{route('admin.galleries.index')}}" class="text-light">View Detail >></a>
                    </div>
                </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection