@extends('layouts.admin_layout') 
@section('title', 'Item') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Item </h3>

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
              <h3 class="card-title">Item: {{ $Items->item  }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'Items.update', $Items->id)  }}" method="POST" >
                @csrf              
                @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label for="item">Title</label>
                  <input type="text" value="{{ $Items->item }}" class="form-control" name="item" id="item" placeholder="Enter title" required>
                </div>

                

                <div class="form-group">
                    <label for="subgroup_id">SubGroup</label>
                    <select class="form-control" name="subgroup_id"> 
                        @foreach( $SubGroup  as $sub )

                            @if($sub->id == $Items->subgroup_id)                           
                                <option selected value="{{ $sub->id }}">{{ $sub->title }}</option>
                            @else
                                
                                <option value="{{ $sub->id }}"> {{ $sub->title }}</option>  
                            @endif
                        @endforeach 
                    </select>
                </div>

                  <div class="form-group">
                    <label for="maingroup_1c">MainGroup 1c</label>
                    <input type="text" value="{{ $Items->maingroup_1c }}" class="form-control" name="maingroup_1c" id="maingroup_1c" placeholder="maingroup_1c">
                </div>

                <div class="form-group">
                    <label for="maingroup_id">MainGroup</label>
                    <select class="form-control" name="maingroup_id"> 
                        @foreach( $MainGroup  as $main )

                            @if($main->id ==  $Items->maingroup_id)
                                <option selected value="{{ $main->id }}">{{ $main->title }}</option>
                            @else
                                <option value="{{ $main->id }}">{{ $main->title }}</option>  
                            @endif
                        @endforeach 
                    </select>
                </div>

                <div class="form-group">
                    <label for="subgroup_1c">SubGroup 1c</label>
                    <input type="text" value="{{ $Items->subgroup_1c }}" class="form-control" name="subgroup_1c" id="subgroup_1c" placeholder="subgroup_1c">
                </div>

                <div class="form-group">
                    <label for="code1c">Code 1c</label>
                    <input type="text" value="{{ $Items->code1c }}" class="form-control" name="code1c" id="code1c" placeholder="code1c">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" value="{{ $Items->price }}" class="form-control" name="price" id="price" placeholder="price">
                </div>

                <div class="form-group">
                    <label for="pur_price">Pur price</label>
                    <input type="text" value="{{ $Items->pur_price }}" class="form-control" name="pur_price" id="pur_price" placeholder="pur price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="10" cols="45" 
                    name="description" id="description"
                    placeholder="Description"
                    >{{ $Items->description }}</textarea>
                   
                </div>

                <div class="form-group">
                    <label for="old_price">Old price</label>
                    <input type="text" value="{{ $Items->old_price }}" class="form-control" name="old_price" id="old_price" placeholder="Old price">
                </div>

                <div class="form-group">
                    <label for="top_product">Top product</label>
                    <input type="text" value="{{ $Items->top_product }}" class="form-control" name="top_product" id="top_product" placeholder="Top product">
                </div>

                <div class="form-group">
                    <label for="remains">Remains</label>
                    <input type="text" value="{{ $Items->remains }}" class="form-control" name="remains" id="remains" placeholder="Remains">
                </div>

                <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <input type="text" value="{{ $Items->vendor }}" class="form-control" name="vendor" id="vendor" placeholder="Vendor">
                </div>

                <div class="form-group">
                   <img src="/images/product/{{$Items->vendor}}.jpg" alt="pic Product">               
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