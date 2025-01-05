@extends('layouts.apps')
@section('content')
<section class="content-inner shop-account">
<div class="container">
<div class="row mb-5">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table check-tbl">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th class="text-end">Close</th>
                    </tr>
                </thead>
              
                <tbody>
                   @foreach('')
                    <tr>
                        <td class="product-item-img"><img src="/images/books/chinaharayeko.jpeg"></td>
                        <td class="product-item-name">yunis</td>
                        <td class="product-item-price"></td>
                        <td class="product-item-quantity">
                            <div class="quantity btn-quantity style-1 me-3">
                                <input id="demo_vertical2" type="number" value="" name="demo_vertical2" />
                            </div>
                        </td>
                        <td class="product-item-totle"></td>
                        <td class="product-item-close"><button style="background: transparent; border:none;"><a href="" class="ti-close"><i class="fa fa-close" style="padding-right: 8px;"></i></a></button></td>
                    </tr>

                    
                </tbody>
               
            </table>
        </div>
    </div>
</div>
</div>
</section>
@endsection