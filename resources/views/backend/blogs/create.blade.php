@extends('layouts.master')
@section('blog','nav-link active')
@section('title','News')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Blogs</h1>
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
        <form action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                        <label class="form-label" for="title">Title (Required)<span style="color: red;">*</span></label>
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="first_body">First Paragraph (Required)<span style="color: red;">*</span></label>
                        <textarea class="form-control" name="first_body" cols="30" rows="10">{{ old('first_body') }}</textarea>
                        @error('first_body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="second_body">Second Paragraph (Required)<span style="color: red;">*</span></label>
                        <textarea class="form-control" name="second_body" cols="30" rows="10">{{old('second_body') }}</textarea>
                        @error('second_body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">First Image (Required)<span style="color: red;">*</span></label><br>
                        <input type="file" name="image" accept="image/*">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                   </div>
                   <div class="form-group">
                        <label for="" class="form-label">Images (Optional)</label><br>
                        <input type="file" name="images[]" accept="image/*" multiple>
                        @error('images')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                   </div>
                    <label for="video">Video(Optional)</label>
                    <input class="form-control" type="text" name="video" id="video" placeholder="Enter Youtube iframe tag" value="{{ old('video') }}">
                    <br><br>

                    <button type="submit" id="saveButton" class="btn btn-success"><i class="fas fa-save" style="margin-right: 5px;"></i>Save Article</button>
        </form>
        <!-- <p id="message" class="text-danger"></p> -->
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

            }else if(fileCount < maxFiles)
            {
                fileCountMessage.textContent = 'You can only upload to ' + maxFiles + ' files';
                button.disabled = true;
            }

            else {

                fileCountMessage.textContent = '';
                button.disabled = false; // Enable the submit button

            }
        }
    </script> -->
@endsection
