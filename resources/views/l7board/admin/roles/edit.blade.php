@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update User Role</h1>

    <!-- Add Category -->
    <div class="row mt-3">
        <div class="col-md-6 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Role Details</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('roles.update', $role->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="name"><b>Role Name</b></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $role->title }}">
                            </div>
                        </div>
                        <input type="submit" value="Add Role" class="btn btn-primary mt-3 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection