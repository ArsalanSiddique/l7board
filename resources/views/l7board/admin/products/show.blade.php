@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">View Product</h1>


    <!-- Add Products -->
    <div class="row mt-3">
        <div class="col-md-10 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Products Details</h6>
                </div>
                <div class="card-body">
                    <div class="product-view-image">
                        <img src="{{ asset('storage/images/'.$product['photo']) }}" style="width: 100%;" alt="">
                    </div>

                    

                    <h2 class="font-weight-bolder mt-4 ml-1"> {{ $product->name }} </h2>
                    <p class="ml-1"> {{ date("Y, d-M h:i", strtotime($product->created_at)) }} &nbsp;&nbsp; | &nbsp;&nbsp; {{ App\Category::find($product->category_id)->name }} </p>


                    <p class="ml-1"> <b class="mr-3">Price:</b>  {{ "$ ".$product->price }} </p>
                    <p class="ml-1"> <b class="mr-3">Material: </b> {{ $product->material }} </p>
                    <p class="ml-1"> <b class="mr-3">Weight: </b> {{ $product->weight }} </p>
                    <p class="ml-1"> <b class="mr-3">Brand: </b> {{ $product->brand->name }} </p>
                    <p class="ml-1"> <b class="mr-3">Stock: </b> {{ $product->product_stock($product->id) }} </p>

                    <hr>
                    <div class="m-1">

                    {!! $product->details !!}
                    </div>
                    
                    <br>
                    <hr>
                    <br>
                    
                    <div class="m-1">
                    {!! $product->specification !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection