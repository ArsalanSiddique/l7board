@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Product Category</h1>

    <!-- Edit Category -->
    <div class="row mt-3">
        <div class="col-md-6 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
                </div>
                <div class="card-body">
                    <x-errors />
                    <form action="{{ route('category.update', $category['id']) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="name"><b>Category Name</b></label>

                                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                            </div>
                        </div>
                        <input type="submit" value="Update Product Category" class="btn btn-primary mt-3 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection