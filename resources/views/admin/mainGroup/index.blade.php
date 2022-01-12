 @extends('layouts.admin_layout') @section('title', 'MainGroup') @section('content')

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
                
                    <h3 class="card-title">Main Group</h3>

               
              


                <div class="dt-buttons  ">
                    <a href="{{ route('MainGroup.create') }}" >
                        <button class="btn btn-info " tabindex="0" aria-controls="example1" type="button">
                            <span>Add Main Group</span>
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
                                    description
                                </th>
                                <th>
                                    Key words
                                </th>
                                <th style="width: 8%" class="text-center">
                                    Code 1C
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($MainGroup as $item)

                            <tr>
                                <td>
                                   {{ $item->id}}
                                </td>
                                <td>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->description }}   
                                </td>
                                <td >
                                    {{ $item->key_words }}
                                </td>
                                <td >
                                    {{ $item->code1c }}
                                </td>
                                
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                              </i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                              </i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                              </i> Delete
                                    </a>
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