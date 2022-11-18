@extends('dashboard.layout.layout')
@section('title')
    Create New Lesson
@endsection

@section('js')
    <script src="/admin/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/admin/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/admin/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection

@section('content')

    <!-- Form inputs -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Create New Lesson</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">


            <form action="{{route('lessons.store')}}" method="POST" enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Lesson inputs</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name In Arabic</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ar_name" placeholder="Enter your Name in Arabic">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name In English</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="en_name" placeholder="Enter your Name in English">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Desc In Arabic</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="ar_descr" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Desc In English</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="en_descr" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Url The Lesson</label>
                        <div class="col-lg-10">
                            <input type="url" class="form-control" name="url" placeholder="Enter Url The Lesson">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Duration</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="duration" placeholder="Enter Duration The Lesson">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Select Status</label>
                        <div class="col-lg-10">
                            <select name="is_active" class="form-control" >
                                <option value="1">Active</option>
                                <option value="0">In Active</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Select Course</label>
                        <div class="col-lg-10">
                            <select name="course_id" class="form-control" >
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->en_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>

                </fieldset>
            </form>
        </div>
    </div>
    <!-- /form inputs -->

@endsection
