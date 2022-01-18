@extends('layouts.admin_layout') @section('title', 'Items') @section('content')

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
                
                    <h3 class="card-title">Items</h3>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
              


                <div class="dt-buttons  ">
                    <a href="{{ route('Items.create') }}" >
                        <button class="btn btn-info " tabindex="0" aria-controls="example1" type="button">
                            <span>Items</span>
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
                                <th style="width: 20%">
                                    Item
                                </th>
                                <th style="width: 8%">
                                    Main Group
                                </th>
                                <th  style="width: 8%">
                                    Sub Group
                                </th>
                                <th style="width: 5%" class="text-center">
                                   Price
                                </th>
                                <th style="width: 5%" class="text-center">
                                    Remains
                                </th>
                                <th style="width: 8%">
                                    Image                                    
                                </th>
                                <th style="width: 15%">
                                                                        
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($Items as $item)

                            <tr>
                                <td>
                                   {{ $item->id}}
                                </td>
                                <td>
                                    {{ $item->item }}
                                </td>
                                <td>
                                    @if(isset($item->maingroup['title']))
                                    {{ $item->maingroup['title'] }}
                                        
                                    @else
                                        no Main Group
                                    @endif
                                </td>
                                <td >
                                    @if(isset($item->subgroup['title']))
                                     {{ $item->subgroup['title'] }}
                                    @else
                                        no Sub Group
                                    @endif
                                    
                                </td>
                                <td >
                                    {{ $item->price }}
                                </td>
                                <td >
                                    {{ $item->remains }}
                                </td>
                                <td >
                                   
                                    <img class="img-thumbnail mx-auto d-block" src="/images/product/{{$item->vendor}}.jpg" alt="pic Items">
                                </td>

                                <td class="project-actions text-right">
                                   
                                    <a class="btn btn-info btn-sm" href="{{ route('Items.edit', $item->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> View/Edit
                                    </a>
                                    <form action="{{ route('Items.destroy', $item->id) }}" 
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
            {{ $Items->onEachSide(2)->links() }}
        </div>
    </div>
</section>
@endsection