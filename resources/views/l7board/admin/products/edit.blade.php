@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Products</h1>

    <!-- Add Products -->
    <div class="row mt-3">
        <div class="col-md-10 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Products Details</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">

                            <label for="name"><b>Product Name</b></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product['name'] }}">

                        </div>
                        <div class="form-group">

                            <label for="details"><b>Product Details</b></label>
                            <textarea name="details" class="form-control tinymce-editor" id="" cols="30" rows="10">{{ $product['details'] }}</textarea>

                        </div>
                        <div class="form-group">

                            <label for="category"><b>Product Category</b></label>
                            <select name="category_id" class="form-control" id="category">
                                <option value="null">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category["name"] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">

                            <label for="price"><b>Product Price</b></label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $product['price'] }}">

                        </div>
                        <div class="form-group">
                            <label for="file"> <b> Upload Product Photo</b></label>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>


                            <img src="{{ asset('storage/images/'.$product->photo) }}" width="450px" class="m-5" alt="">

                        </div>
                        <input type="submit" value="Update Product" class="btn btn-primary mt-5 btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection