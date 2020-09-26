@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Products Page</h1>



    <div class="row">
        <div class="col-12">
            <a href="{{ route('products.create') }}"><button class="btn btn-primary float-right mb-3">Add New Products</button></a>
        </div>
        <div class="col-12">
            <x-errors />
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Products List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Sell</th>
                                    <th>Create At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Sell</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td> <img id="myImg" src="{{ asset('storage/images/'.$product['photo']) }}" width="100px" /></td>
                                    <td>{{ $product["name"] }}</td>
                                    <td> {{ App\Category::find($product["category_id"])->name }} </td>
                                    <td> {{ $product->product_stock($product->id) }} </td>
                                    <td> </td>
                                    <td>{{ date("Y, d M h:i", strtotime($product["created_at"]))  }}</td>
                                    <td>{{ date("Y, d M h:i", strtotime($product["updated_at"]))  }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product['id']) }}"><i class="fas fa-eye btn-view"></i></a>
                                        <a href="{{ route('products.edit', $product['id']) }}"><i class="fas fa-pencil-alt btn-edit"></i></a>
                                        <i class="fas fa-trash btn-delete ml-2" onclick="if(confirm('Are you really want to delete this product?')) { document.getElementById('delform_{{ $loop->index }}').submit() }"></i>
                                        <form action="{{ route('products.destroy', $product['id']) }}" method="POST" id="delform_{{ $loop->index }}">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{$product['id']}}">
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
                            {{ $products->count() }} OF {{ $products->total() }}
                        </div>
                        <div class="float-right mr-3">
                            {{ $products->links() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Product Photo Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>


</div>
<!-- /.container-fluid -->


@endsection