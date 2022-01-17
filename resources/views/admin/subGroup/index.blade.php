@extends('layouts.admin_layout') @section('title', 'SubGroup') @section('content')

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
                
                    <h3 class="card-title">Sub Group</h3>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
              


                <div class="dt-buttons  ">
                    <a href="{{ route('SubGroup.create') }}" >
                        <button class="btn btn-info " tabindex="0" aria-controls="example1" type="button">
                            <span>Add Sub Group</span>
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
                                    Title
                                </th>
                                <th style="width: 30%">
                                    Maingroup
                                </th>
                                <th>
                                    MainGroup code 1c
                                </th>
                                <th style="width: 8%" class="text-center">
                                    Code 1C
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($SubGroup as $item)

                            <tr>
                                <td>
                                   {{ $item->id}}
                                </td>
                                <td>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->maingroup->title }}   
                                </td>
                                <td >
                                    {{ $item->maingroup_1c }}
                                </td>
                                <td >
                                    {{ $item->code1c }}
                                </td>

                                <td class="project-actions text-right">
                                   
                                    <a class="btn btn-info btn-sm" href="{{ route('SubGroup.edit', $item->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> View/Edit
                                    </a>
                                    <form action="{{ route('SubGroup.destroy', $item->id) }}" 
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

</section>
@endsection