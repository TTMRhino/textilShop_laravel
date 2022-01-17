@extends('layouts.admin_layout') 
@section('title', 'SubGroup') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Редактировать Sub Group </h3>

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
              <h3 class="card-title">Sub Group: {{ $SubGroup->title  }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'SubGroup.update', $SubGroup->id ) }}" method="POST" >
                @csrf              
                @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" value="{{ $SubGroup->title }}" class="form-control" name="title" id="title" placeholder="Enter title" required>
                </div>

                

                <div class="form-group">
                    <select class="form-control" name="maingroup_id"> 
                        @foreach( $MainGroup  as $item )

                            @if($item->id ===  $SubGroup->maingroup_id)
                                <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->title }}</option>  
                            @endif
                        @endforeach 
                    </select>
                </div>
               

                <div class="form-group">
                    <label for="maingroup_1c">Main Group code 1C</label>
                    <input type="text" value="{{ $SubGroup->maingroup_1c }}" class="form-control" name="maingroup_1c" id="maingroup_1c" placeholder="maingroup 1c">
                </div>

                <div class="form-group">
                    <label for="code1c">Code 1c</label>
                    <input type="text" value="{{ $SubGroup->code1c }}" class="form-control" name="code1c" id="code1c" placeholder="Code 1c">
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