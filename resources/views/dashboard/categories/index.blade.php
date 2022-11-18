@extends('dashboard.layout.layout')
@section('title')
    All Categories
@endsection

@section('js')
    <script src="/admin/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/admin/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/admin/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection

@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">
                All Categories
            </h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            This Table is considered with The Data of the all categories You've on the system,
            with the pervilges of Excuting all operation on their records.
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table datatable-basic" style="text-align: center">
            <thead>
            <tr>

                <th>#</th>
                <th>Name in Arabic</th>
                <th>Name in English</th>
                <th>Image</th>
                <th>Date</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>

            @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->ar_name}}</td>
                    <td>{{$category->en_name}}</td>
                    <td><img src="/storage/{{$category->image}}" alt="{{$category->image}}" class="img-tumbnail" width="50" height="40"></td>
                    <td>{{$category->created_at->diffForhumans()}}</td>
                    <td class="text-center">


                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#edit{{ $category->id }}">
                            <i class="icon-database-edit2"></i>
                        </button>

                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#delete{{ $category->id }}">
                            <i class="icon-database-remove"></i>
                        </button>



                    </td>
                </tr>

                <!-- edit_modal_Grade -->
                <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Edit {{$category->en_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ route('categories.update', 'test') }}" method="post" enctype="multipart/form-data">
                                    {{ method_field('patch') }}
                                    @csrf

                                    <div class="row">
                                        <div class="col">


                                            <input id="id" type="hidden" name="id" class="form-control"
                                                   value="{{ $category->id }}">
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col">
                                            <label for="ar_name" class="mr-sm-2">Name In Arabic</label>
                                            <input type="text" class="form-control" name="ar_name" value="{{ $category->ar_name}}">
                                        </div>



                                        <div class="col">
                                            <label for="en_name" class="mr-sm-2">Name In English</label>
                                            <input type="text" class="form-control" name="en_name" value="{{ $category->en_name}}">
                                        </div>

                                    </div>

                                    <br><br>
                                    <div class="row">

                                        <div class="col">
                                            <label for="image" class="mr-sm-2">Image</label>
                                            <input type="file" class="form-control" name="image" value="{{ $category->image}}">
                                        </div>


                                    </div>



                                    <br><br>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        <button type="submit"
                                                class="btn btn-success">Edit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>






                <!-- delete_modal_Grade -->
                <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Are You Sure Delete Username {{$category->ar_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('categories.destroy', 'test') }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf



                                    <input id="id" type="hidden" name="id" class="form-control"
                                           value="{{ $category->id }}">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        <button type="submit"
                                                class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            @endforeach


            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

@endsection
