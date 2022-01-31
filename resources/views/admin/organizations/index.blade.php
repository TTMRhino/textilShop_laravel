@extends('layouts.admin_layout') @section('title', 'Organizations') @section('content')

<section class="content">

    <div class="row">

        <div class="col-sm-8 col-md-4">

          
            <form action="{{ route('Organizations.index')}}" method="POST">
                @csrf 
            
                <div class="input-group mb-3 mt-2 dataTables_filter">
                    <div class="input-group-prepend ">
                    <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" name="search"class="form-control ">
                </div>

            </form>

        </div>

    </div>



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
                
                    <h3 class="card-title">Organizations</h3>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
              


                <div class="dt-buttons  ">
                    <a href="{{ route('Organizations.create') }}" >
                        <button class="btn btn-info " tabindex="0" aria-controls="example1" type="button">
                            <span>Organizations</span>
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
                                    User 
                                </th>
                                <th style="width: 8%">
                                    Name
                                </th>
                                <th  style="width: 8%">
                                    Inn
                                </th>
                                <th style="width: 5%" class="text-center">
                                   Ogrn
                                </th>
                                <th style="width: 5%" class="text-center">
                                    Kpp
                                </th>
                                <th style="width: 8%">
                                    Adress reg.                                   
                                </th>
                                <th style="width: 15%">
                                                                        
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($Organizations as $org)

                            <tr>
                                <td>
                                   {{ $org->id}}
                                </td>
                                <td>
                                    {{ $org->user->name }}
                                </td>
                                <td>                                   
                                    {{ $org->name }}                                        
                                  
                                </td>
                                <td >
                                  
                                     {{ $org->inn}}
                                   
                                    
                                </td>
                                <td >
                                    {{ $org->ogrn }}
                                </td>
                                <td >
                                    {{ $org->kpp }}
                                </td>
                                <td >
                                    {{ $org->adres_registr }}
                                </td>

                                <td class="project-actions text-right">
                                   
                                    <a class="btn btn-info btn-sm" href="{{ route('Organizations.edit', $org->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> View/Edit
                                    </a>
                                    <form action="{{ route('Organizations.destroy', $org->id) }}" 
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
            {{ $Organizations->onEachSide(2)->links() }}
        </div>
    </div>
</section>
@endsection