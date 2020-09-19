@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Product Categories</h1>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('category.create') }}"><button class="btn btn-primary float-right mb-3">Add Product Category</button></a>
        </div>
        <div class="col-12">
            <x-errors />
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Products category List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Products</th>
                                    <th>Create At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Products</th>
                                    <th>Create At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse($categories as $category)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $category["name"] }}</td>
                                    <td></td>
                                    <td>{{ date("Y, d M h:i", strtotime($category["created_at"]))  }}</td>
                                    <td>{{ date("Y, d M h:i", strtotime($category["updated_at"]))  }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category['id']) }}"><i class="fas fa-pencil-alt btn-edit"></i></a>
                                        <i class="fas fa-trash btn-delete ml-2" onclick="if(confirm('Are you really want to delete this category?')) { document.getElementById('delform_{{ $loop->index }}').submit() }"></i>
                                        <form action="{{ route('category.destroy', $category['id']) }}" method="POST" id="delform_{{ $loop->index }}">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{$category['id']}}">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <h3 class="text-center">
                                            No Record Found
                                        </h3>
                                        </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>

                        <div class="float-left mt-2 ml-3">
                            {{ $categories->count() }} OF {{ $categories->total() }}
                        </div>
                        <div class="float-right mr-3">
                            {{ $categories->links() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->


@endsection