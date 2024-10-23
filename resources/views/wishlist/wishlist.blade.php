@extends('layouts.apps')
@section('content')
<div class="page-content">
	<!-- inner page banner -->
	<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Wishlist</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Wishlist</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="content-inner-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table check-tbl">
							<thead>
								<tr>
									<th>Product</th>
									<th>Product name</th>
									<th>Unit Price</th>
									<th>Quantity</th>
									<th>Add to cart </th>
									<th>Close</th>
								</tr>
							</thead>
							<tbody>
								@foreach($wishlist as $wishlists)
								<tr>
									<td class="product-item-img"><img src="{{$wishlists->product->photo}}" alt=""></td>
									<td class="product-item-name">{{$wishlists->product->title}}</td>
									<td class="product-item-price">${{$wishlists->product->price}}.00</td>
									<form action="/product/cart/{{$wishlists->product->id}}" method="post">
										@csrf
										<input type="hidden" name="product_id" value="{{$wishlists->product->id}}">
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical2" type="number" value="1" min="1" name="quantity" />
										</div>
									</td>
									<td class="product-item-totle"><button type="submit" class="btn btn-primary btnhover">Add To Cart</button></td>
									</form>
									<td class="product-item-close"><button style="background: transparent; border:none;"><a href="" class="ti-close"><i class="fa fa-close" style="padding-right: 8px;"></i></a></button></td>
								</tr>
								@endforeach




							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection