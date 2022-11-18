@extends('dashboard.layout.layout')
@section('title')
    All Users
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
                All Users
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
           This Table is considered with The Data of the all Users You've on the system,
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1;?>

                @foreach($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->role_string}}</td>
                        <td><span class="badge badge-success">{{$user->active_string}}</span></td>
                        <td class="text-center">


                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#edit{{ $user->id }}">
                                <i class="icon-database-edit2"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{ $user->id }}">
                                <i class="icon-database-remove"></i>
                            </button>



                        </td>
                    </tr>

                    <!-- edit_modal_Grade -->
                    <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        Edit {{$user->name}}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{ route('users.update', 'test') }}" method="post" >
                                        {{ method_field('patch') }}
                                        @csrf

                                        <div class="row">
                                            <div class="col">


                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="{{ $user->id }}">
                                            </div>
                                        </div>


                                        <div class="row">

                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">Name</label>
                                                    <input type="text" class="form-control" value="{{ $user->name}}" name="name" required>
                                                </div>



                                                <div class="col">
                                                    <label for="email" class="mr-sm-2">Email</label>
                                                    <input type="text" class="form-control" value="{{ $user->email}}" name="email" required>
                                                </div>

                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                <label for="name" class="mr-sm-2">Phone</label>
                                                <input type="text" class="form-control" value="{{ $user->phone}}" name="phone" required>
                                            </div>



                                            <div class="col">
                                                <label for="email" class="mr-sm-2">Password</label>
                                                <input type="text" class="form-control" placeholder="Enter your New Password" name="password">
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <label class="col-form-label">Select Role</label>
                                                    <select name="role" class="form-control" >
                                                        <option value="admin" @if($user->role=="admin") selected @endif>Admin</option>
                                                        <option value="super_admin" @if($user->role=="super_admin") selected @endif>Super Admin</option>
                                                        <option value="client" @if($user->role=="client") selected @endif>Client</option>
                                                    </select>
                                            </div>




                                            <div class="col">
                                                <label class="col-form-label">Select Status</label>
                                                <select name="is_active" class="form-control" >
                                                    <option value="1" @if($user->is_active=="1") selected @endif>Active</option>
                                                    <option value="0" @if($user->is_active=="0") selected @endif>In Active</option>
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
                    <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        Are You Sure Delete Username {{$user->name}}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('users.destroy', 'test') }}" method="post">
                                        {{ method_field('Delete') }}
                                        @csrf



                                        <input id="id" type="hidden" name="id" class="form-control"
                                               value="{{ $user->id }}">
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

