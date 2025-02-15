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
                        <div style="margin-top:40px; background-color:antiquewhite; border-radius:20px; padding:30px;">
                            <span>{{$group['order']->created_at->toFormattedDateString()}}</span>

                            <!-- Display Order Items -->

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Book</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($group['orderItems'] as $orderItem)
                                    <tr style="padding:20px;">
                                        <td><img style="height:60px ; margin-right:4px;" src="{{asset($orderItem->cart->product->photo)}}">{{ $orderItem->cart->product->title }}</td>
                                        <td style="vertical-align: middle;">{{ $orderItem->cart->product->price }}</td>
                                        <td style="vertical-align: middle;">{{ $orderItem->cart->quantity }}</td>
                                        <td style="vertical-align: middle;">${{ $orderItem->cart->product->price * $orderItem->cart->quantity }}.00</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            <span style="color: green; float:right;  margin-top:2px; ">{{$group['order']->status}}</span>
                        </div>
                        @endforeach

                        @endif

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
@endsection