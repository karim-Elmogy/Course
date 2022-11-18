@extends('dashboard.layout.layout')
@section('title')
    All Courses
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
                All Courses
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
            This Table is considered with The Data of the all Courses You've on the system,
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
                <th>Price</th>
                <th>Status</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $i=1;
            ?>

            @foreach($courses as $course)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$course->ar_name}}</td>
                    <td>{{$course->en_name}}</td>
                    <td><img src="/storage/{{$course->image}}" alt="{{$course->image}}" class="img-tumbnail" width="50" height="40"></td>
                    <td>{{$course->price}} $</td>
                    <td>
                        @if($course->is_active=="1")
                            <span class="badge badge-success">{{$course->active_string}}</span>
                        @else
                            <span class="badge badge-danger">{{$course->active_string}}</span>
                        @endif
                    </td>
                    <td>{{$course->category->en_name}}</td>

                    <td class="text-center">


                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#show{{ $course->id }}">
                            <i class="icon-eye2"></i>
                        </button>

                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#edit{{ $course->id }}">
                            <i class="icon-database-edit2"></i>
                        </button>

                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#delete{{ $course->id }}">
                            <i class="icon-database-remove"></i>
                        </button>



                    </td>
                </tr>

                <!-- Show_modal_Grade -->
                <div class="modal fade" id="show{{ $course->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Show {{$course->en_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <div class="row">
                                    <div class="col">
                                        <div class="card blog-horizontal">
                                            <div class="card-body">
                                                <div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
                                                    <img src="/storage/{{$course->image}}" class="img-fluid card-img" alt="{{$course->image}}">
                                                </div>

                                                <div class="mb-3">
                                                    <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                                                        <a href="#" class="text-default mr-2">{{$course->en_name}}</a>

                                                        <span class="text-success ml-auto">${{$course->price}}</span>
                                                    </h5>

                                                    <ul class="list-inline list-inline-dotted text-muted mb-0">
                                                        <li class="list-inline-item">By <a href="#" class="text-muted">{{$user->name}}</a></li>
                                                        <li class="list-inline-item">{{$course->created_at->diffForhumans() }}</li>
                                                    </ul>
                                                </div>

                                                <p>{{$course->en_descr}}</p>
                                            </div>

                                            <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                                <ul class="list-inline list-inline-dotted mb-0">
                                                    <li class="list-inline-item"><i class="icon-users mr-2"></i> 382</li>
                                                    <li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
                                                    <li class="list-inline-item">
                                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                        <span class="text-muted ml-1">(49)</span>
                                                    </li>
                                                </ul>

                                                <div class="mt-2 mt-sm-0">
                                                    <a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i><span class="badge badge-success">{{$course->active_string}}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <br><br>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>






                <!-- edit_modal_Grade -->
                <div class="modal fade" id="edit{{ $course->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Edit {{$course->en_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ route('courses.update', 'test') }}" method="post" enctype="multipart/form-data">
                                    {{ method_field('patch') }}
                                    @csrf

                                    <div class="row">
                                        <div class="col">


                                            <input id="id" type="hidden" name="id" class="form-control"
                                                   value="{{ $course->id }}">
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col">
                                            <label for="ar_name" class="mr-sm-2">Name In Arabic</label>
                                            <input type="text" class="form-control" name="ar_name" value="{{ $course->ar_name}}">
                                        </div>



                                        <div class="col">
                                            <label for="en_name" class="mr-sm-2">Name In English</label>
                                            <input type="text" class="form-control" name="en_name" value="{{ $course->en_name}}">
                                        </div>

                                    </div>

                                    <br><br>


                                    <div class="row">
                                        <div class="col">
                                            <label for="ar_descr" class="mr-sm-2">Desc In Arabic</label>
                                            <textarea class="form-control" name="ar_descr" id="" cols="30" rows="3">{{$course->ar_name}}</textarea>
                                        </div>
                                        <div class="col">
                                            <label for="en_descr" class="mr-sm-2">Desc In English</label>
                                            <textarea class="form-control" name="en_descr" id="" cols="30" rows="3">{{$course->en_name}}</textarea>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col">
                                            <label for="image" class="mr-sm-2">Image</label>
                                            <input type="file" class="form-control" name="image" value="{{ $course->image}}">
                                        </div>
                                        <div class="col">
                                            <label for="price" class="mr-sm-2">Price</label>
                                            <input type="number" class="form-control" name="price" value="{{ $course->price}}">
                                        </div>


                                    </div>



                                    <br>

                                    <div class="row">

                                        <div class="col">
                                            <label for="is_active" class="mr-sm-2">Select Status</label>
                                            <select name="is_active" class="form-control" >
                                                <option value="1" @if($course->is_active=="1") selected @endif >Active</option>
                                                <option value="0" @if($course->is_active=="0") selected @endif >In Active</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="category_id" class="mr-sm-2">Select Category</label>
                                            <select name="category_id" class="form-control" >
                                                <option value="{{ $course->category->id}}">
                                                    {{ $course->category->en_name }}
                                                </option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->en_name}}</option>
                                                @endforeach

                                            </select>
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
                <div class="modal fade" id="delete{{ $course->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Are You Sure Delete Username {{$course->ar_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('courses.destroy', 'test') }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf



                                    <input id="id" type="hidden" name="id" class="form-control"
                                           value="{{ $course->id }}">
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
