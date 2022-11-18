@extends('dashboard.layout.layout')
@section('title')
    Create New User
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
            <h5 class="card-title">Create New User</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">


            <form action="{{route('users.store')}}" method="POST">
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
                    <legend class="text-uppercase font-size-sm font-weight-bold">User inputs</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter your username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Phone</label>
                        <div class="col-lg-10">
                            <input type="tel" class="form-control" name="phone" placeholder="Enter your Phone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Confirm Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your Confirm Password">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Select Role</label>
                        <div class="col-lg-10">
                            <select name="role" class="form-control" >
                                <option value="admin">Admin</option>
                                <option value="super_admin">Super Admin</option>
                                <option value="client">Client</option>
                            </select>
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






                    <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>

                </fieldset>
            </form>
        </div>
    </div>
    <!-- /form inputs -->

@endsection
