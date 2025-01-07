@extends('layouts.apps')
@section('content')
<div style="">
	<div class="page-content bg-white">
	<div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>
		<!--Swiper Banner Start -->
		<div class="main-slider style-1">
			<div class="main-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER </h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">China Harayeko Manche</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Hari Bansa Acharya</a></li>
													<li><a href="javascript:void(0);">Autoography</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$17.2</span>
													<del>$15.25</del>
													<span class="badge badge-danger">15% OFF</span>
												</div>
												
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media.png" alt="banner-media">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Napoleon Hill</a></li>
													<li><a href="javascript:void(0);">Business & Strategy</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$9.5</span>
													<del>$12.0</del>
													<span class="badge badge-danger">20% OFF</span>
												</div>
												<div class="content-btn" data-swiper-parallax="-50">
													<a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
													<a class="btn border btnhover ms-4 text-white" href="books-detail.html">See Details</a>
												</div>
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media2.png" alt="banner-media1">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container swiper-pagination-wrapper">
					<div class="swiper-pagination-five"></div>
				</div>
			</div>
			<div class="swiper main-swiper-thumb">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/chinaharayeko.jpeg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">China Harayeko Manche</h5>
								<div class="dz-meta">
									<ul>
										<li>by Hari Bansa Acharya</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/grid/book9.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Pushing Clouds</h5>
								<div class="dz-meta">
									<ul>
										<li>by Jamet Sigh</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$5.7</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-muted"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/chinaharayeko.jpeg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/chinaharayeko.jpeg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
		<!--Swiper Banner End-->

		<!-- Client Start-->
		<x-clientswiper />
		<!-- Client End-->

		<!--Recommend Section Start-->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Recomended For You</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
				<!-- Swiper -->
				<div class="swiper-container swiper-two">
					<div class="swiper-wrapper">
						@foreach($recommend as $recommends)
						<div class="swiper-slide">
							<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media ">
									<img src="{{$recommends->photo}}" alt="book">
								</div>
								<div class="dz-content">
									<h4 class="title">{{$recommends->title}}</h4>
									<span class="price">${{$recommends->price}}</span>

									<form action="/product/cart/{{$recommends->id}}" method="post">
										@csrf
										<input type="hidden" name="product_id" value="{{$recommends->id}}">
										<input type="hidden" value="1" name="quantity">
										<button type="submit" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</button>
									</form>
								</div>
							</div>
						</div>
						@endforeach






					</div>
				</div>
			</div>
		</section>

		<!-- icon-box1 -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-power icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Quick Delivery</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-shield icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Secure Payment</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-like icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Best Quality</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10 ">
								<i class="flaticon-star icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Return Guarantee</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- icon-box1 End-->

		<!-- Book Sale -->
		<section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Books on Sale</h2>
					<div class="pagination-align style-1">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-two"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						@foreach($sale as $sales)
						<a href="/product/detail/{{$sales->slug}}"><div class="swiper-slide " style=" transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)';"
							onmouseout="this.style.transform='scale(1)';">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="{{$sales->photo}}" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">{{$sales->title}}</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">{{$sales->category->title}}</a></li>
										
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star" style="padding-top: 4px;"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">${{ ($sales->price)-($sales->discount/100*$sales->price)}}</span>
											<del>${{$sales->price}}</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						@endforeach
						
						
						
					</div>
				</div>
			</div>
		</section>
		<!-- Book Sale End -->

		<!-- Feature Product -->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<div class="circle style-1"></div>
					<h2 class="title">Featured Product</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
				</div>
			</div>
			<div class="container">
				<div class="swiper-container books-wrapper-2 swiper-three">
					<div class="swiper-wrapper">
					
						
					
							
						
						@foreach($feature as $features)
						<div class="swiper-slide">
							<div class="books-card style-2">
								<div class="dz-media">
									<img src="{{$features->photo}}" alt="book">
								</div>
								<div class="dz-content">
									<h6 class="sub-title">BEST SELLER</h6>
									<h2 class="title">{{$features->title}}</h2>
									<ul class="dz-tags">
										<li>Napoleon Hill</li>
										<li>Business & Strategy</li>
									</ul>
									<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
									<div class="price">
										<span class="price-num">${{ ($features->price)-($features->discount/100*$features->price)}}</span>
										<del>${{$features->price}}.00</del>
										<span class="badge">{{$features->discount}}% OFF</span>
									</div>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
										<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="pagination-align style-2">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-three"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Product End -->

		<!-- Special Offer-->
		<section class="content-inner-2">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Special Offers</h2>
					<div class="pagination-align style-1">
						<div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container book-swiper">
					<div class="swiper-wrapper">
						@foreach($offer as $offers)
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href="books-detail.html"><img style=" object-fit: contain;  width:100%; height: 200px;" src="{{ asset($offers->photo) }}" alt="/" /></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">{{$offers->title}}</a></h4>
									<div class="dz-meta">
										<ul class="dz-tags">
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
						
						
					</div>
				</div>
			</div>
		</section>
		<!-- Special Offer End -->

		<!-- Testimonial -->
		<x-testimonial />
		<!-- Testimonial End -->

		<!-- Latest News -->
		<section class="content-inner-2">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Latest News</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div class="swiper-container blog-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href="blog-detail.html"><img src="images/blog/recent-blog/blog2.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="blog-detail.html"><img src="images/blog/recent-blog/blog3.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.html">10 Things you must know to improve your reading skills</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<a href="blog-detail.html"><img src="images/blog/recent-blog/blog2.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-detail.html"><img src="images/blog/recent-blog/blog3.jpg" alt="/"></a>
								</div>
								<div class="dz-info p-3">
									<h6 class="dz-title">
										<a href="blog-detail.html">We Must know why reading is important for children?</a>
									</h6>
									<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
									<div class="dz-meta meta-bottom mt-3 pt-3">
										<ul class="">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest News End -->

		<!-- Feature Box -->
		<x-feature />
		<!-- Feature Box End -->

		<!-- Newsletter -->
		<x-newsletter />
		<!-- Newsletter End -->

	</div>

</div>

@endsection