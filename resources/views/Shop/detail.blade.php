@extends('layouts.apps')
@section('content')
<div class="page-content bg-grey ">
	<div>
		@if(session('message'))
		<div class="alert alert-success">
			{{ session('message') }}
		</div>
		@endif
	</div>
	<section class="content-inner-1">
		<div class="container">
			<div class="row book-grid-row style-4 m-b60">
				<div class="col">
					<div class="dz-box">
						<div class="dz-media">
							<img src="{{ asset($product->photo) }}" alt="book">
						</div>
						<div class="dz-content">
							<div class="dz-header">
								<h3 class="title">{{$product->title}}</h3>
								<div class="shop-item-rating">
									<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
										<!-- <ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-muted"></i></li>
										</ul>
										<h6 class="m-b0">4.0</h6> -->
									</div>
									<div class="social-area">
										<ul class="dz-social-icon style-3">
											<li><a href="" target="_blank"><i class="fa-brands fa-facebook-f" style="padding: 6px;"></i></a></li>
											<li><a href="" target="_blank"><i class="fa-brands fa-twitter" style="padding: 6px;"></i></a></li>
											<li><a href="" target="_blank"><i class="fa-brands fa-whatsapp" style="padding: 6px;"></i></a></li>
											<li><a href="" target="_blank"><i class="fa-solid fa-envelope" style="padding: 6px;"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="dz-body">
								<div class="book-detail">
									<ul class="book-info">
										<li>
											<div class="writer-info">
												<img src="{{ asset('images/profile1.jpg') }}" alt="author">
												<div>
													<span>Writen by</span>{{$product->author}}
												</div>
											</div>
										</li>
										<li><span>Publisher</span>{{$product->publisher}}</li>
										<li><span>Year</span>2019</li>
									</ul>
								</div>
								<p class="text-1">{!! $product->description !!}</p>
								<p class="text-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</p>
								<div class="book-footer">
									<div class="price">
										<h5>${{ ($product->price)-($product->discount/100*$product->price)}}</h5>
										<p class="p-lr10">${{$product->price}}.00</p>
									</div>

									<div class="product-num">
										<div>
											<form action="/product/cart/{{$product->id}}" method="post">
												@csrf
												<div class="quantity btn-quantity style-1 me-3">


													<input type="hidden" name="product_id" value="{{$product->id}}">

													<input id="counter" type="number" value="1" min="1" name="quantity" style="width: 100px;  margin-right:8px; padding:4px; " />
													<button type="submit" style="margin-bottom: 12px;" class="btn btn-primary btnhover btnhover2"><i class="fas fa-shopping-cart m-r10" style="padding:3px;"></i> <span>Add to cart</span></button>
												</div>

											</form>
										</div>
										<div class="bookmark-btn style-1 d-none d-sm-block" style="margin-bottom: 12px;">
											<form action="/wishlist/{{$product->id}}" method="post">
												@csrf
												<input type="hidden" name="product_id" value="{{$product->id}}">
												<button type="submit" style="background-color:white; border-radius:4px; padding:6px; border-color:grey">

													<i class="fa fa-heart" style="padding: 6px;"></i>

												</button>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8">
					<div class="product-description tabs-site-button">
						<ul class="nav nav-tabs">
							<li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a></li>
							<li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li>
						</ul>
						<div class="tab-content">
							<div id="graphic-design-1" class="tab-pane show active">
								<table class="table border book-overview">
									<tr>
										<th>Book Title</th>
										<td>{{$product->title}}</td>
									</tr>
									<tr>
										<th>Author</th>
										<td>{{$product->author}}</td>
									</tr>
									<tr>
										<th>ISBN</th>
										<td> ISBN13: {{$product->isbn}}</td>
									</tr>
									<tr>
										<th>Ediiton Language</th>
										<td>{{$product->language}}</td>
									</tr>
									<tr>
										<th>Book Format</th>
										<td> {{$product->pages}} Pages</td>
									</tr>
									<tr>
										<th>Date Published</th>
										<td>{{$product->datepublish}}</td>
									</tr>
									<tr>
										<th>Publisher</th>
										<td>{{$product->publisher}}</td>
									</tr>

									<tr>
										<th>Lesson</th>
										<td>{{$product->lesson}}</td>
									</tr>
									<tr>
										<th>Topic</th>
										<td>360</td>
									</tr>
									<tr class="tags">
										<th>Tags</th>
										<td>
											<a href="javascript:void(0);" class="badge">Drama</a>
											<a href="javascript:void(0);" class="badge">Advanture</a>
											<a href="javascript:void(0);" class="badge">Survival</a>
											<a href="javascript:void(0);" class="badge">Biography</a>
											<a href="javascript:void(0);" class="badge">Trending2022</a>
											<a href="javascript:void(0);" class="badge">Bestseller</a>
										</td>
									</tr>
								</table>
							</div>
							<div id="developement-1" class="tab-pane">
								<div class="clear" id="comment-list">
									<div class="post-comments comments-area style-1 clearfix">
										<h4 class="comments-title">4 COMMENTS</h4>
										<div id="comment">
											<ol class="comment-list">
												<li class="comment even thread-even depth-1 comment" id="comment-2">
													<div class="comment-body">
														<div class="comment-author vcard">
															<img src="images/profile4.jpg" alt="" class="avatar" />
															<cite class="fn">Michel Poe</cite> <span class="says">says:</span>
															<div class="comment-meta">
																<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
															</div>
														</div>
														<div class="comment-content dlab-page-text">
															<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
														</div>
														<div class="reply">
															<a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
													<ol class="children">
														<li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
															<div class="comment-body" id="div-comment-3">
																<div class="comment-author vcard">
																	<img src="images/profile3.jpg" alt="" class="avatar" />
																	<cite class="fn">Celesto Anderson</cite> <span class="says">says:</span>
																	<div class="comment-meta">
																		<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
																	</div>
																</div>
																<div class="comment-content dlab-page-text">
																	<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
																</div>
																<div class="reply">
																	<a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																</div>
															</div>
														</li>
													</ol>
												</li>
												<li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
													<div class="comment-body" id="div-comment-4">
														<div class="comment-author vcard">
															<img src="images/profile2.jpg" alt="" class="avatar" />
															<cite class="fn">Ryan</cite> <span class="says">says:</span>
															<div class="comment-meta">
																<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
															</div>
														</div>
														<div class="comment-content dlab-page-text">
															<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
														</div>
														<div class="reply">
															<a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
												</li>
												<li class="comment odd alt thread-even depth-1 comment" id="comment-5">
													<div class="comment-body" id="div-comment-5">
														<div class="comment-author vcard">
															<img src="images/profile1.jpg" alt="" class="avatar" />
															<cite class="fn">Stuart</cite> <span class="says">says:</span>
															<div class="comment-meta">
																<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
															</div>
														</div>
														<div class="comment-content dlab-page-text">
															<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
														</div>
														<div class="reply">
															<a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
										<div class="default-form comment-respond style-1" id="respond">
											<h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small> <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>
											<div class="clearfix">
												<form method="post" id="comments_form" class="comment-form" novalidate>
													<p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
													<p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
													<p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
													<p class="col-md-12 col-sm-12 col-xs-12 form-submit">
														<button id="submit" type="submit" class="submit btn btn-primary filled">
															Submit Now <i class="fa fa-angle-right m-l10"></i>
														</button>
													</p>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 mt-5 mt-xl-0">
					<div class="widget">
						<h4 class="widget-title">Related Books</h4>
						<div class="row">
							<div class="col-xl-12 col-lg-6">
								<div class="dz-shop-card style-5">
									<div class="dz-media">
										<img src="images/books/grid/book15.jpg" alt="">
									</div>
									<div class="dz-content">
										<h5 class="subtitle">Terrible Madness</h5>
										<ul class="dz-tags">
											<li>THRILLE,</li>
											<li>DRAMA,</li>
											<li>HORROR</li>
										</ul>
										<div class="price">
											<span class="price-num">$45.4</span>
											<del>$98.4</del>
										</div>
										<a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6">
								<div class="dz-shop-card style-5">
									<div class="dz-media">
										<img src="images/books/grid/book3.jpg" alt="">
									</div>
									<div class="dz-content">
										<h5 class="subtitle">Battle Drive</h5>
										<ul class="dz-tags">
											<li>THRILLE,</li>
											<li>DRAMA,</li>
											<li>HORROR</li>
										</ul>
										<div class="price">
											<span class="price-num">$45.4</span>
											<del>$98.4</del>
										</div>
										<a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6">
								<div class="dz-shop-card style-5 mb-0">
									<div class="dz-media">
										<img src="images/books/grid/book5.jpg" alt="">
									</div>
									<div class="dz-content">
										<h5 class="subtitle">Terrible Madness</h5>
										<ul class="dz-tags">
											<li>THRILLE,</li>
											<li>DRAMA,</li>
											<li>HORROR</li>
										</ul>
										<div class="price">
											<span class="price-num">$45.4</span>
											<del>$98.4</del>
										</div>
										<a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection