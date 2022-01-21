@extends('layouts.admin_layout') 
@section('title', 'Order') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Order Edit</h3>

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
              <h3 class="card-title">Order: {{ $Orders->id  }}: {{$Orders->customer->name}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'Orders.update', $Orders->id ) }}" method="POST" >
                @csrf              
                @method('PUT')

              <div class="card-body">
               
                <div class="form-group">
                  <label for="item_id">Item</label>

                  <select class="form-control" name="item_id"> 
                      @foreach( $Items  as $item )

                          @if($item->id ===  $Orders->item_id)
                              <option selected value="{{ $item->id }}">{{ $item->item }}</option>
                          @else
                              <option value="{{ $item->id }}">{{ $item->item }}</option>  
                          @endif
                      @endforeach 
                  </select>
              </div>

              <div class="form-group">
               
                <input type="hidden" value="{{ $Orders->customers_id }}" class="form-control" name="customers_id" id="customers_id" placeholder="Enter quantity">
            </div>
            <div class="form-group">
             
              <input type="hidden" value="{{ $Orders->item }}" class="form-control" name="item" id="item" placeholder="Enter item">
          </div>
                

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" value="{{ $Orders->quantity }}" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" value="{{ $Orders->price }}" class="form-control" name="price" id="price" placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label for="total">Total price</label>
                    <input type="text" value="{{ $Orders->total }}" class="form-control" name="total" id="total" placeholder="Enter total">
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