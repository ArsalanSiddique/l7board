@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Product Category</h1>

    <!-- Add Category -->
    <div class="row mt-3">
        <div class="col-md-6 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="name"><b>Category Name</b></label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Add Product Category" class="btn btn-primary mt-3 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection