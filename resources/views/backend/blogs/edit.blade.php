@extends('layouts.master')
@section('blog','nav-link active')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Blogs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('admin.blogs.index')}}" class="btn btn-outline-info">Back</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <form action="{{route('admin.blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$blog->title}}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Description</label>
                        <textarea class="form-control" name="body" cols="30" rows="10">{{$blog->body}}</textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Content Image</label><br>
                        
                        <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Blog Image" width="200" height="130">
                        
                        <br><br><input type="file" name="image">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                   </div>
                    <br><br>
 
                    <button type="submit" id="saveButton" class="btn btn-success"><i class="fas fa-save" style="margin-right: 5px;"></i>Update Article</button>
        </form>
        <p id="message" class="text-danger"></p>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
    <!-- <script>

        function checkFileCount(input) {
            var maxFiles = 3;
            var fileCount = input.files.length;
            var fileCountMessage = document.getElementById('message');
            var button = document.getElementById('saveButton');

            if (fileCount > maxFiles) {

                fileCountMessage.textContent = 'You can only upload to ' + maxFiles + ' files.';
                button.disabled = true; // Disable the submit button

            }
            
            else {

                fileCountMessage.textContent = '';
                button.disabled = false; // Enable the submit button

            }
        }
    </script> -->
@endsection
