@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add User</h1>

    <!-- Add Category -->
    <div class="row mt-3">
        <div class="col-md-6 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="name"><b>Name</b></label>
                                <input type="text" name="name" id="name" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="email"><b>Email</b></label>
                                <input type="email" name="email" id="email" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="password"><b>Password</b></label>
                                <input type="password" name="password" id="password" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="confirm"><b>Confirm Password</b></label>
                                <input type="password" name="confirm" id="confirm" class="form-control" required="required">
                            </div>
                        </div>
                        <input type="submit" value="Add User" class="btn btn-primary mt-3 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection