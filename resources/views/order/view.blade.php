@extends('layouts.apps')
@section('content')
<section class="content-inner shop-account">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="container">
                        <h2>Your Orders</h2>

                        @if(empty($groupedOrders))
        <p>You have no orders yet.</p>
    @else
        @foreach($groupedOrders as $group)
            
   <span>{{$group['order']->created_at->toFormattedDateString()}}</span>
            <!-- Display Order Items -->
          
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($group['orderItems'] as $orderItem)
                        <tr style="padding:20px;">
                            <td>{{ $orderItem->cart->product->title }}</td>
                            <td>{{ $orderItem->cart->product->price }}</td>
                            <td>{{ $orderItem->cart->quantity }}</td>
                            <td>{{ $orderItem->cart->product->price * $orderItem->cart->quantity }}</td>
                        </tr>
                        <tr><span style="color: green;">{{$orderItem->status}}</span></tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    @endif
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
@endsection