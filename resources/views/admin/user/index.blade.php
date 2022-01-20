@extends('layouts.admin_layout') 
@section('title', 'MainGroup') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Change admin password </h3>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @elseif(session('errors'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
            <h4><i class="icon fa fa-exclamation-triangle"></i>{{ session('errors') }}</h4>
        </div>
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">


    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Change admin password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route( 'User.passwordChange') }}" method="post" >
                @csrf
                

              <div class="card-body">

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                  <label for="repPassword">Repeat password</label>
                  <input type="password" class="form-control" name="repPassword" id="repPassword" placeholder="Enter password" required>
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