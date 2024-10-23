<x-app-layout>
    <div  class="py-8 px-12">
    <div class="row book-grid-row style-4 m-b60">
				<div class="col">
					<div class="dz-box">
						<div class="dz-media">
							<img src="{{ asset($products->photo) }}" alt="book">
						</div>
						<div class="dz-content">
							<div class="dz-header">
								<h3 class="text-2xl ">{{$products->title}}</h3>
							
							</div>
							<div class="dz-body">
								<div class="book-detail">
									<ul class="book-info">
										<li>
											<div class="writer-info">
												
												<div>
													<span>Author</span>{{$products->author}}
												</div>
											</div>
										</li>
										<li><span>Publisher</span>Printarea Studios</li>
										<li><span>Year</span>2019</li>
									</ul>
								</div>
								<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
								<p class="text-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</p>
								<div class="book-footer">
									<div class="price">
										<h5>$54.78</h5>
										<p class="p-lr10">$70.00</p>
									</div>

								

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
</x-app-layout>