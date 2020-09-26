@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add New Products</h1>

    <!-- Add Products -->
    <div class="row mt-3">
        <div class="col-md-6 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('stock.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="product"><b>Select Product</b></label>
                            <select name="product_id" class="form-control" id="product">
                                <option value="null">Select</option>
                                @foreach($products as $product)
                                <option value="{{ $product['id'] }}">{{ $product["name"] }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="quantity"><b>Product Quantity</b></label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="details"><b>Stock Details</b></label>
                            <textarea name="details" class="form-control" id="details" cols="30" rows="10"></textarea>
                        </div>

                        <input type="submit" value="Add Stock" class="btn btn-primary mt-5 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection