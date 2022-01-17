@extends('layouts.admin_layout') 
@section('title', 'MainGroup') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Добавление Main Group </h3>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">


    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Main Group</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route( 'MainGroup.store') }}" method="post" enctype="multipart/form">
                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="key_words">Key words</label>
                    <input type="text" class="form-control" name="key_words" id="key_words" placeholder="Key words">
                </div>

                <div class="form-group">
                    <label for="code1c">Code 1c</label>
                    <input type="text" class="form-control" name="code1c" id="code1c" placeholder="Code 1c">
                </div>
               
                
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>

                <a  class="btn  btn-warning" href="{{ URL::previous() }}" >Return</a>
              </div>
            </form>
          </div>
    </div>
    </div>
</div>

@endsection