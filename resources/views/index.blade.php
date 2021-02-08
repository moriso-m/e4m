@extends('base')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach ($categories as $cat)
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{ route('index',$cat->category_code) }}">{{ $cat->description }}</a></h4>
								</div>
							</div>
						@endforeach
					</div><!--/category-productsr-->
					
				</div>
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Products</h2>
					@foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ $product->image }}" alt="{{ $product->product_name }}" style="height: 50vh;"/>
									<p style="font-size: 1.66em;font-weight: 400;">{{ $product->product_name }}</p>
									<b>Ksh. {{ $product->selling_price }}</b>
									@if(isset($product->initial_price))
										<span class="text-danger" style="text-decoration: line-through;font-size: 1.0em;">
											Was {{ $product->initial_price }}
										</span>
									@endif
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>
											<span>Ksh. {{ $product->selling_price }}</span>
											<span class="text-danger" style="text-decoration: line-through;font-size: 0.75em;">
												Was {{ $product->initial_price }}
											</span>
										</h2>
                                        <p>{{ $product->product_name }}</p>
                                        <a href="#" class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Contact
                                        </a>
                                    </div>
                                </div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
                        </div>
                    </div>             
				@endforeach
				<div class="row">
					<ul class="pagination col-md-12">
						<li class="active"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div>
				</div><!--features_items-->
			</div>
		</div>
	</div>
</section>
@endsection