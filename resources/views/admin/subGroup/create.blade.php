@extends('layouts.admin_layout') 
@section('title', 'SubGroup') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">New Sub Group </h3>

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
              <h3 class="card-title">New Sub Group </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'SubGroup.store' ) }}" method="POST" enctype="multipart/form" >
                @csrf                             

              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text"  class="form-control" name="title" id="title" placeholder="Enter title" required>
                </div>

                

                <div class="form-group">
                  <label for="maingroup_id">Main Group id</label>
                  <select class="form-control" name="maingroup_id" id="maingroup_id"> 
                    @foreach($MainGroup as $item)                     
                      <option value="{{ $item->id}}">{{ $item->title }}</option>
                    @endforeach                       
                  </select>
                </div>

                <div class="form-group">
                    <label for="maingroup_1c">Main Group code 1C</label>
                    <input type="text"  class="form-control" name="maingroup_1c" id="maingroup_1c" placeholder="Main Group code 1C">
                </div>

                <div class="form-group">
                    <label for="code1c">Code 1c</label>
                    <input type="text"  class="form-control" name="code1c" id="code1c" placeholder="Code 1c">
                </div>
               
                
              <!-- /.card-body -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-primary">Save</button>
               
                    <a  class="btn  btn-warning" href="{{ URL::previous() }}" >Return</a>
            
                
              </div>
            </form>
          </div>
    </div>
    </div>
</div>

@endsection