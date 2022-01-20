@extends('layouts.admin_layout') 
@section('title', 'Item') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit/View Orders </h3>

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
              <h3 class="card-title">Edit/View Orders: {{ $Customers->id  }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'Customers.update', $Customers->id)  }}" method="POST" >
                @csrf              
                @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label for="data">Data</label>
                  <input type="text" value="{{ $Customers->data }}" class="form-control" name="data" id="data" placeholder="Enter data" required>
                </div>


                  <div class="form-group">
                    <label for="name ">Name</label>
                    <input type="text" value="{{ $Customers->name }}" class="form-control" name="name " id="name " placeholder="name ">
                </div>

               

                <div class="form-group">
                    <label for="phone ">Phone</label>
                    <input type="text" value="{{ $Customers->phone }}" class="form-control" name="phone " id="phone " placeholder="phone ">
                </div>

                <div class="form-group">
                    <label for="mailindex">Mail index</label>
                    <input type="text" value="{{ $Customers->mailindex }}" class="form-control" name="mailindex" id="mailindex" placeholder="mailindex">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" value="{{ $Customers->city }}" class="form-control" name="city" id="city" placeholder="city">
                </div>

                <div class="form-group">
                    <label for="pur_price">Adress</label>
                    <input type="text" value="{{ $Customers->adress }}" class="form-control" name="adress" id="adress" placeholder="adress">
                </div>

                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea class="form-control" rows="10" cols="45" 
                    name="comments" id="comments"
                    placeholder="Comments"
                    >{{ $Customers->comments }}</textarea>
                   
                </div>

               

                <div class="form-group">
                    <label for="status">Top product</label>
                    <input type="text" value="{{ $Customers->status }}" class="form-control" name="status" id="status" placeholder="Status">
                </div>

                    
               
               
                
              <!-- /.card-body -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-primary">Save</button>
               
                    <a  class="btn  btn-warning" href="{{ URL::previous() }}" >Return</a>
            
                
              </div>
            </form>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 15%">
                                Item
                            </th>
                            <th style="width: 8%">
                                Quantity
                            </th>
                            <th  style="width: 8%">
                                Price
                            </th>
                            <th style="width: 5%" class="text-center">
                               Total
                            </th>
                           
                            <th style="width: 15%">
                                Image                                    
                            </th>
                            <th style="width: 25%">
                                                                    
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($Orders as $order)

                        <tr>
                            <td>
                               {{ $order->id}}
                            </td>
                           <td>
                                {{ $order->items_order->item }}
                            </td> 
                            <td>
                               
                                {{ $order->quantity }}
                            </td> 
                            <td>                               
                                {{ $order->price }}
                            </td> 
                            <td>                               
                                {{ $order->price * $order->quantity}}
                            </td> 
                            <td>                               
                                <img src="/images/product/{{ $order->items_order->vendor}}.jpg" alt="pic">
                            </td> 
                           

                            <td class="project-actions text-right">
                               
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i> View/Edit
                                </a>
                                <form action="#" 
                                    method="POST"
                                    style="display:inline-block"
                                    >
                                    @csrf 
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                        <i class="fas fa-trash">
                                        </i> Delete
                                    </button>

                                </form>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
          </div>
    </div>
    </div>
</div>

@endsection