@extends('Wholesale.base')


@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Wholesale Dashboard </h2>
                <p class="pageheader-text">Products</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="btn-group mb-2">
            <button type="button" class="btn btn-success btn-sm" id="add-product">
                <i class="fa fa-plus-circle"></i>
                New Product
            </button>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $prod)
            @foreach ($prod->sizes as $size)
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="product-thumbnail">
                        <div class="product-img-head">
                            <div class="product-img">
                                <img src="{{ asset($prod->images->image_path) }}" alt="" class="img-fluid">
                                @if (empty($prod->images->image_path))
                                    No image available
                                @endif
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-content-head">
                                <h3 class="product-title">{{ $prod->product_name }}</h3>
                                <div class="product-rating d-inline-block">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <p>
                                    <span><b>Package:</b> {{ $size->package->name }}</span>
                                    <br>
                                    <span><b>Size:</b> {{ $size->units }} {{ $size->unit_measure }}</span>
                                </p>
                                <div class="product-price">Ksh. {{ $size->selling_price }}</div>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-primary update_product" data-product="{{ $prod->product_id }}">Update</a>
                                <a href="#" class="btn btn-outline-secondary">Details</a>
                                <a href="#" class="btn btn-outline-secondary"><i class="fas fa-exchange-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endforeach
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link " href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
    </div>
    <!-- add  -->
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
                        <input type="hidden" name="size_id" id="size_id">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="product_code" class="required">Product Code:</label>
                                <input type="text" name="product_id" class="" id="product_id" readonly />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="description" class="required">Product Name</label>
                                <input type="text" name="product_name" class="" id="product_name"required/>
                            </div>
                            <div class="form-group col-md-6">
                                    <label class="required">Product Category</label>
                                    <select name="product_category" class="chosen" id="product_category" required>
                                        <option value="">--type--</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->category_code }}">{{ $cat->description }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="description" class="required">Product Image</label>
                                <input type="file" name="product_image[]" class="" id="image"/>
                            </div>
                        </div>
                        <hr>
                        <p class="lead">Product Sizes</p>
                        <div class="row">
                        <button type="button" name="add" id="add" class="rounded-btn float-right">
                            <i class="fa fa-paperclip"></i>
                            Add Size
                        </button>
                        </div>
                        <div id="sizes">
                            <div class="row" id="size_grp_0">
                                <div class="col-md-3">
                                    <label for="calibration">Calibration (<span class="text-small">Kg,ltrs,etc</span>)</label>
                                    <input type="text" name="product_size[0][calibri]" id="calibri_0">
                                </div>
                                <div class="col-md-3 size-div">
                                    <label for="size">Size</label><br>
                                    <input class="" id="size_0" name="product_size[0][size]" type="text" aria-describedby="size" required>

                                </div>
                                <div class="col-md-3">
                                    <label class="required">Package Type</label><br>
                                    <select name="product_size[0][package_type]" class="chosen" id="package_type" required>
                                        <option value="">--type--</option>
                                        @foreach ($packages as $pkg)
                                        <option value="{{ $pkg->id }}">{{ $pkg->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="required">Selling Price</label><br>
                                    <input type="text" name="product_size[0][selling_price]" class="" id="selling_price"required/>
                                    <span data-counter="0" class="badge badge-pill badge-danger float-right mt-1 remove-size" style="cursor:pointer;">Remove</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="delete-btn" style="display:none;">Delete</button>
                            <button type="submit" class="btn btn-primary" id="submit-btn">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
@endsection
@push('scripts')
    <script>
        let products = '{!! isset($products) ? $products : '' !!}';
        products = JSON.parse(products);
        let sizes = '{!! isset($product_sizes) ? $product_sizes : '' !!}'

        $('.update_product').click(function (e) {
            let product = $(this).data('product');
            e.preventDefault();
            if (products != '') {
                $.each(products, function (key, prod) {
                    if(product == prod.product_id){
                        $('#product_category').val(prod.product_category);
                        $('#product_id').val(prod.product_id);
                        $('#product_name').val(prod.product_name);
                        $('#selling_price').val(prod.selling_price);
                        $('#package_type').val(prod.package_type);
                        $('#selling_price').val(prod.selling_price);

                        $('#submit-btn').text('Update product');
                        $('#delete-btn').show();
                        $('#modal-title').text('Update product');
                        $('.chosen').trigger('chosen:updated');

                        $('#add-product-modal').modal('show');

                        return false;
                    }
                });
            }
        });

        $('#add-product').on('click' ,function(){
             $('#add-product-modal').modal('show');
        });

        $('.remove-size').hide();
        let i = 0;
        $(document).on('click','#add',function(){
            ++i;
            $('.remove-size').show();
            $('#sizes').append(
                    `
                    <hr>
                    <div class="row" id="size_grp_${i}">
                        <div class="col-md-3 col-sm-12">
                            <label for="calibration">Calibration(<span class="text-small">Kg,ltrs,etc</span>)</label>
                            <input type="text" name="product_size[${i}][calibri]" id="calibri" required>
                        </div>
                        <div class="col-md-3 col-sm-12 size-div">
                            <label for="size" class="mb-3">Size</label><br>
                            <input id="size_i+'" name="product_size[${i}][size]" type="text" aria-describedby="AttachFile" required>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label class="required" class="mb-3">Package Type</label><br>
                            <select name="product_size[${i}][package_type]" class="form-control chosen" id="package_type_${i}" required>
                                <option value="">--type--</option>
                                @foreach ($packages as $pkg)
                                <option value="{{ $pkg->id }}">{{ $pkg->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label class="required" class="mb-3">Selling Price</label><br>
                            <input type="text" name="product_size[${i}][selling_price]" class="" id="selling_price"required/>
                            <span data-counter="${i}" class="badge badge-pill badge-danger float-right mt-1 remove-size" style="display:none;cursor:pointer;">Remove</span>
                        </div>
                    </div>
                    `
                );
                $("#package_type_"+i).trigger('chosen:updated');
                $(".chosen").trigger('chosen:updated');
        });

        $('#sizes').on('click', '.remove-size', function(){
            let counter = $(this).data('counter');
            $('#size_grp_'+counter).remove();
       });
    </script>
@endpush
