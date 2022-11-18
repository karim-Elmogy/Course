@extends('dashboard.layout.layout')
@section('title')
    All Lessons
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
                All Lessons
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
            This Table is considered with The Data of the all Lessons You've on the system,
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
                <th>Url</th>
                <th>Status</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $i=1;
            ?>

            @foreach($lessons as $lesson)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$lesson->ar_name}}</td>
                    <td>{{$lesson->en_name}}</td>
                    <td><img src="/storage/{{$lesson->image}}" alt="{{$lesson->image}}" class="img-tumbnail" width="50" height="40"></td>
                    <td>{{$lesson->url}}</td>
                    <td><span class="badge badge-success">{{$lesson->active_string}}</span></td>
                    <td>{{$lesson->courses->en_name}}</td>

                    <td class="text-center">


                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#show{{ $lesson->id }}">
                            <i class="icon-eye2"></i>
                        </button>

                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#edit{{ $lesson->id }}">
                            <i class="icon-database-edit2"></i>
                        </button>

                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#delete{{ $lesson->id }}">
                            <i class="icon-database-remove"></i>
                        </button>



                    </td>
                </tr>

                <!-- Show_modal_Grade -->
                <div class="modal fade" id="show{{ $lesson->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Show {{$lesson->en_name}}
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
                                                    <img src="/storage/{{$lesson->image}}" class="img-fluid card-img" alt="{{$lesson->image}}">
                                                </div>

                                                <div class="mb-3">
                                                    <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                                                        <a href="#" class="text-default mr-2">{{$lesson->en_name}}</a>

                                                        <span class="text-success ml-auto">{{$lesson->courses->en_name}}</span>
                                                    </h5>

                                                    <ul class="list-inline list-inline-dotted text-muted mb-0">
{{--                                                        <li class="list-inline-item">By <a href="#" class="text-muted">{{$user->name}}</a></li>--}}
                                                        <li class="list-inline-item">{{$lesson->created_at->diffForhumans() }}</li>
                                                    </ul>
                                                </div>

                                                <p>{{$lesson->en_descr}}</p>
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
                                                    <a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i><span class="badge badge-success">{{$lesson->active_string}}</span></a>
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
                <div class="modal fade" id="edit{{ $lesson->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Edit {{$lesson->en_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ route('lessons.update', 'test') }}" method="post" enctype="multipart/form-data">
                                    {{ method_field('patch') }}
                                    @csrf

                                    <div class="row">
                                        <div class="col">


                                            <input id="id" type="hidden" name="id" class="form-control"
                                                   value="{{ $lesson->id }}">
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col">
                                            <label for="ar_name" class="mr-sm-2">Name In Arabic</label>
                                            <input type="text" class="form-control" name="ar_name" value="{{ $lesson->ar_name}}">
                                        </div>



                                        <div class="col">
                                            <label for="en_name" class="mr-sm-2">Name In English</label>
                                            <input type="text" class="form-control" name="en_name" value="{{ $lesson->en_name}}">
                                        </div>

                                    </div>

                                    <br><br>


                                    <div class="row">
                                        <div class="col">
                                            <label for="ar_descr" class="mr-sm-2">Desc In Arabic</label>
                                            <textarea class="form-control" name="ar_descr" id="" cols="30" rows="3">{{$lesson->ar_name}}</textarea>
                                        </div>
                                        <div class="col">
                                            <label for="en_descr" class="mr-sm-2">Desc In English</label>
                                            <textarea class="form-control" name="en_descr" id="" cols="30" rows="3">{{$lesson->en_name}}</textarea>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col">
                                            <label for="image" class="mr-sm-2">Image</label>
                                            <input type="file" class="form-control" name="image" value="{{ $lesson->image}}">
                                        </div>
                                        <div class="col">
                                            <label for="price" class="mr-sm-2">Url</label>
                                            <input type="url" class="form-control" name="url" value="{{ $lesson->url}}">
                                        </div>


                                    </div>



                                    <br>

                                    <div class="row">

                                        <div class="col">
                                            <label for="is_active" class="mr-sm-2">Select Status</label>
                                            <select name="is_active" class="form-control" >
                                                <option value="1" @if($lesson->is_active=="1") selected @endif >Active</option>
                                                <option value="0" @if($lesson->is_active=="0") selected @endif >In Active</option>
                                            </select>
                                        </div>



                                        <div class="col">
                                            <label for="category_id" class="mr-sm-2">Select Category</label>


                                            <select name="course_id" class="form-control" >
                                                <option value="{{ $lesson->courses->id}}">
                                                    {{ $lesson->courses->en_name }}
                                                </option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->en_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>



                                        <div class="col">
                                            <label for="price" class="mr-sm-2">Duration</label>
                                            <input type="number" class="form-control" name="duration" value="{{ $lesson->duration}}">
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
                <div class="modal fade" id="delete{{ $lesson->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    Are You Sure Delete Username {{$lesson->ar_name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('lessons.destroy', 'test') }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf



                                    <input id="id" type="hidden" name="id" class="form-control"
                                           value="{{ $lesson->id }}">
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
