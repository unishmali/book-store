@extends('layouts.apps')
@section('content')
<!-- contact area -->
@if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
<section class="content-inner shop-account">
	<!-- Product -->
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table check-tbl">
						<thead>
							<tr>
								<th>Product</th>
								<th>Book name</th>
								<th>Unit Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th class="text-end">Close</th>
								<th class="text-end">Edit</th>
							</tr>
						</thead>
						<tbody>

							@foreach($cartItem as $cartItems)
							<tr>

								<td class="product-item-img"><img src="{{  asset($cartItems->product->photo)}}" alt=""></td>
								<td class="product-item-name">{{$cartItems->product->title}}</td>
								<td class="product-item-price">${{$cartItems->product->price}}.00</td>
								<td class="product-item-quantity">
								{{$cartItems->quantity}} pcs
								</td>
								<td class="product-item-totle">${{($cartItems->product->price)*($cartItems->quantity)}}.00</td>
								<td class="product-item-close">
									<form action="/cart/delete/{{$cartItems->id}}" method="post"> 
									@method('delete')
										@csrf
										<button style="background: transparent; border:none;" type="submit"><a  class="ti-close"><i class="fa fa-close" style="padding-right: 9ppx;"></i></a></button></form>
								</td>
								<td class="product-item-close">
									<form action="/cart/edit/{{$cartItems->id}}" method="post"> 
									@method('patch')
										@csrf
										
										<button style=" border:none;" type="submit"><a href="/cart/" class="ti-close"><i class="fa fa-pen" style="padding-right: 8px; "></i></a></button></form>
								</td>






							</tr>


						</tbody>
						@endforeach

					</table>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="widget">
					<form class="shop-form">
						<h4 class="widget-title">Calculate Shipping</h4>
						<div class="form-group">
							<select class="default-select">
								<option selected>Credit Card Type</option>
								<option value="1">Another option</option>
								<option value="2">A option</option>
								<option value="3">Potato</option>
							</select>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<input type="text" class="form-control" placeholder="Credit Card Number">
							</div>
							<div class="form-group col-lg-6">
								<input type="text" class="form-control" placeholder="Card Verification Number">
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Coupon Code">
						</div>
						<div class="form-group">
							<a href="shop-cart.html" class="btn btn-primary btnhover" type="button">Apply Coupon</a>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="widget">
					<h4 class="widget-title">Cart Subtotal</h4>
					<table class="table-bordered check-tbl m-b25">
						<tbody>
							<tr>
								<td>Order Subtotal</td>
								<td>$ {{$subTotal}}.00</td>
							</tr>
							<tr>
								<td>Shipping</td>
								<td>Free Shipping</td>
							</tr>
							<tr>
								<td>Coupon</td>
								<td>$00.00</td>
							</tr>
							<tr>
								<td>Total</td>
								<td>${{($subTotal)}}.00</td>
							</tr>
						</tbody>
					</table>
					<div class="form-group m-b25">
						<a href="/checkout" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product END -->
</section>
<script>

</script>
<!-- contact area End-->

@endsection