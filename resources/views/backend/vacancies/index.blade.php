@extends('layouts.master')
@section('vacancy','nav-link active')
@section('title','Vacancy')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vacancies Table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('admin.vacancies.create')}}" class="btn btn-outline-info">Create Vacancy</a>
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
                  <th>ID</th>
                  <th>Job Title</th>
                  <th>Job Type</th>
                  <th>Posted</th>
                  <th>Deadline</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
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
            'serverSide': true,
            'processing': true,
            'ajax': {
                url: '/admin/vacancies/',
                error: function(xhr, testStatus, errorThrown) {

                }
            },

            "columns": [{
                "data": "id"
            },
                {
                    "data": "title"
                },
                {
                    "data": "type"
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': 'deadline'
                },
                {
                    "data": "action"
                }
            ]
        });


        $(document).on('click', '.deleteButton', function(a) {
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
                        url: '/admin/vacancies/' + id,
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
