@extends('layouts.master')
@section('gallery','nav-link active')
@section('title','Gallery')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Photos Table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('admin.galleries.create')}}" class="btn btn-outline-info">Create Image</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <table class="table table-striped table-bordered" id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
    <script>
        var table = $('#table').DataTable({
            'serverSide': false,
            'processing': true,
            'ajax': {
                url: '/admin/galleries/',
                error: function(xhr, testStatus, errorThrown) {
                }
            },
            "columns": [
                {
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "image"
                },
                {
                    "data": "action"
                }
            ]
        });       
        $(document).on('click', '.delete', function(a) {
            a.preventDefault();
            const id = $(this).data('id');
            console.log(id);
            Swal.fire({
                title: 'Do you want to delete this vacancy?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#FF0000',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/galleries/' + id,
                        type: 'DELETE',
                        success: function() {
                            table.ajax.reload();
                        }
                    });

                    Swal.fire(
                        'Deleted!',
                        'Vacancy has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endsection
