@extends('layouts.apps')
@section('content')

<div class="page-content bg-grey">
    <div>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div id="cart-message" style="display: none;"></div>
    <section class="content-inner-1 border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="title">Books</h4>
            </div>
            <div class="filter-area m-b30">
    <div class="grid-area">
        <div class="shop-tab">
            <ul class="nav text-center product-filter justify-content-end" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="/shop">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 5H21C21.2652 5 21.5196 4.89464 21.7071 4.7071C21.8946 4.51957 22 4.26521 22 4C22 3.73478 21.8946 3.48043 21.7071 3.29289C21.5196 3.10536 21.2652 3 21 3H3C2.73478 3 2.48043 3.10536 2.29289 3.29289C2.10536 3.48043 2 3.73478 2 4C2 4.26521 2.10536 4.51957 2.29289 4.7071C2.48043 4.89464 2.73478 5 3 5Z" fill="#AAAAAA"></path>
                            <path d="M3 13H21C21.2652 13 21.5196 12.8947 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8947 2.73478 13 3 13Z" fill="#AAAAAA"></path>
                            <path d="M3 21H21C21.2652 21 21.5196 20.8947 21.7071 20.7071C21.8946 20.5196 22 20.2652 22 20C22 19.7348 21.8946 19.4804 21.7071 19.2929C21.5196 19.1054 21.2652 19 21 19H3C2.73478 19 2.48043 19.1054 2.29289 19.2929C2.10536 19.4804 2 19.7348 2 20C2 20.2652 2.10536 20.5196 2.29289 20.7071C2.48043 20.8947 2.73478 21 3 21Z" fill="#AAAAAA"></path>
                        </svg>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/shop/sidebar">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM13 4H20V11H13V4ZM13 13H20V20H13V13ZM4 4H11V20H4V4Z" fill="#AAAAAA"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="category">
        <div class="filter-category">
            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-list me-2"></i>
                Categories
            </a>
        </div>
        <div class="form-group">
            <i class="fas fa-sort-amount-down me-2 text-secondary"></i>
            <select class="default-select">
                <option>Newest</option>
                <option>1 Day</option>
                <option>1 Week</option>
                <option>3 Weeks</option>
                <option>1 Month</option>
                <option>3 Months</option>
            </select>
        </div>
    </div>
</div>
<div class="acod-content collapse" id="collapseExample">
    
    <div class="widget widget_services">
    @foreach($category as $categories)
        <div class="form-check search-content">

            <a  href="" class="form-check-label">
                {{$categories->title}}
            </a>
        </div>
        
        @endforeach
    </div>
  
</div>

            <div class="row">
                @foreach($product as $products)
                <div class="col-md-12 col-sm-12">
                    <div class="dz-shop-card style-2">
                        <a href="/product/detail/{{$products->slug}}">
                            <div class="dz-media">
                                <img style="transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" src="{{ asset($products->photo) }}" alt="book" />
                            </div>
                        </a>
                        <div class="dz-content">
                            <div class="dz-header">
                                <div>
                                    <ul class="dz-tags">
                                        <li><a href="books-list.html">{{$products->category->title}}</a></li>

                                    </ul>
                                    <h4 class="title mb-0"><a href="books-list.html">{{$products->title}}</a></h4>
                                </div>
                                <div class="price">
                                    <span class="price-num text-primary">${{($products->price)-($products->discount/100*$products->price)}}</span>
                                    <del>${{$products->price}}.00</del>
                                </div>
                            </div>

                            <div class="dz-body">
                                <div class="dz-rating-box">
                                    <div>
                                        <p class="dz-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        <!-- <div>
                                            <a href="pricing.html" class="badge">Get 20% Discount for today</a>
                                            <a href="pricing.html" class="badge">50% OFF Discount</a>
                                            <a href="pricing.html" class="badge next-badge">See 2+ promos</a>
                                        </div> -->
                                    </div>
                                    <div class="review-num">
                                        <h4>4.0</h4>
                                        <ul class="dz-rating">
                                            <li><i class="flaticon-star text-yellow"></i></li>
                                            <li><i class="flaticon-star text-yellow"></i></li>
                                            <li><i class="flaticon-star text-yellow"></i></li>
                                            <li><i class="flaticon-star text-yellow"></i></li>
                                            <li><i class="flaticon-star text-muted"></i></li>
                                        </ul>
                                        <span><a href="javascript:void(0);"> 235 Reviews</a></span>
                                    </div>
                                </div>
                                <div class="rate">
                                    <ul class="book-info">
                                        <li><span>Writen by</span>{{$products->author}}</li>
                                        <li><span>Publisher</span>Printarea Studios</li>
                                        <li><span>Year</span>2019</li>
                                    </ul>
                                    <div class="d-flex">
                                    <div style="margin-right: 8px;">
                                        <form id="add-to-cart-form" action="/product/cart/{{$products->id}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$products->id}}">
                                            <input type="hidden" value="1" name="quantity">
                                            <button type="submit" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</button>
                                        </form>
                                    </div>
                                        <div>
                                        <form action="/wishlist/{{$products->id}}" method="post">
												@csrf
												<input type="hidden" name="product_id" value="{{$products->id}}">
												<button type="submit" style="background-color:white; border-radius:4px; padding:8px; border-color:grey"> 
											
													<i class="flaticon-heart" style="padding: 6px;"></i>
												
												</button>
											</form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach







            </div>
            <div class="row page mt-0">
                <div class="col-md-6">
                    <p class="page-text">Showing 12 from 50 data</p>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Blog Pagination">
                        <ul class="pagination style-1 p-t20">
                            <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
                            <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div id="cart-message"></div>

</div>
<script>
$(document).ready(function() {
    $('#add-to-cart-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way

        var form = $(this);
        var url = '/product/cart/' + form.find('input[name="product_id"]').val();
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#cart-count').text(parseInt($('#cart-count').text()) + 1); // Increment cart count
                    $('#cart-message').html('<div class="alert alert-success">' + response.message + '</div>'); // Show success message
                } else {
                    $('#cart-message').html('<div class="alert alert-warning">' + response.message + '</div>'); // Show warning message
                }
            },
            error: function(xhr, status, error) {
                $('#cart-message').html('<div class="alert alert-danger">An error occurred while adding the product to the cart.</div>'); // Show error message
            }
        });
    });
});
</script>



@endsection