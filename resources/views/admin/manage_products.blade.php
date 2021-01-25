@extends('admin.base')

@section('content')
<section>
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Products</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <span><button id="add-product" href="#">Add Product</button></span>
        </div>
        
        <!-- /.col-lg-12 -->
    </div>
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="/images/shop/product11.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($products as $product)
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/shop/product11.jpg" alt="" />
                                    <h2>Ksh. {{ $product->selling_price }}</h2>
                                    <p>{{ $product->product_name }}</p>
                                    <a href="#" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>             
                @endforeach
            </div>
        </div>

</section>
<div class="modal fade bd-example-modal-xl" tabindex="-1" id="add-product-modal" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:lavender;">
                <h5 class="modal-title" id="modal-title">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="product-form" method="POST" action="{{ route('new_products') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="description" class="required">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="product_name"required/>
                        </div>
                        <div class="col-md-6">
                                <label class="required">Product Category</label>
                                <select name="product_category" class="form-control chosen" id="product_category" required>
                                    <option value="">--type--</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->category_code }}">{{ $cat->description }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="required">Initial Price(was)</label><br>
                            <input type="text" name="initial_price" class="form-control" id="initial_price"/>
                        </div>
                        <div class="col-md-3">
                            <label class="required">Selling Price</label><br>
                            <input type="text" name="selling_price" class="form-control" id="selling_price"required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description" class="required">Product Image</label>
                            <input type="file" name="product_image" class="form-control" id="image"/>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="delete-btn" style="display:none;">Delete</button>
                        <button type="submit" class="" id="submit-btn">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $('#add-product').on('click' ,function(){
             $('#add-product-modal').modal('show');
        });
    </script>
@endpush