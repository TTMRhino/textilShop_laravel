@extends('layouts.admin_layout') 

@section('id', 'Orders') 
@section('content')

<section class="content">



    <div class="row">

        <div class="col-sm-12 col-md-12">

            <div id="example1_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                </label>
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                
                    <h3 class="card-title">Orders</h3>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
              


                <div class="dt-buttons">
                    <a href="#" >
                        <button class="btn btn-info " tabindex="0" aria-controls="example1" type="button">
                            <span>Orders</span>
                        </button>
                    </a>                   

                </div>


                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 10%">
                                    name
                                </th>
                                <th style="width: 8%">
                                    data
                                </th>
                                <th  style="width: 8%">
                                    phone
                                </th>
                                <th style="width: 8%" class="">
                                  city
                                </th>
                                <th style="width: 5%" class="">
                                    adress
                                </th>
                                <th style="width: 5%">
                                    status                                   
                                </th>
                              
                                <th style="width: 15%">
                                                                        
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($Customers as $Customer)

                            <tr>
                                <td>
                                   {{ $Customer->id}}
                                </td>
                                <td>
                                    {{ $Customer->name }}
                                </td>
                                <td>
                                    {{ $Customer->data }}
                                </td>
                                <td >
                                    {{ $Customer->phone }}
                                    
                                </td>
                                <td >
                                    {{ $Customer->city }}
                                </td>
                                <td >
                                    {{ $Customer->adress }}
                                </td>
                                <td >
                                   
                                    {{ $Customer->status }}
                                </td>

                               

                                <td class="project-actions text-right">
                                   
                                    <a class="btn btn-info btn-sm" href="{{ route('Customers.edit', $Customer->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> View/Edit
                                    </a>
                                    <form action="{{ route('Customers.destroy', $Customer->id) }}" 
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
            <!-- /.card-body -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            {{ $Customers->onEachSide(2)->links() }}
        </div>
    </div>
</section>
@endsection