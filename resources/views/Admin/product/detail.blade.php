<x-app-layout>
    <div  class=" px-12">
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 dark:text-gray-200 leading-tight">
            {{ __('Book Detail !') }}
        </h2>
    </x-slot>
    <div class="row book-grid-row style-4  ">
				<div class="col">
					<div class="dz-box">
						<div class="dz-media">
							<img src="{{ asset($products->photo) }}" alt="book">
						</div>
						<div class="dz-content bg-white py-8 px-8 rounded-lg shadow-lg w-full">
							
							<div class="dz-body ">
							<h3 class="text-2xl mt-2 font-bold ">{{$products->title}}</h3>
								<div class="book-detail mt-2 ">
									
								</div>
								<span class="text-lg font-bold  text-slate-700">Description:</span>
								<p class="text-1 break-words">{{$products->description}}</p>
		
				
							</div>
							<div class="tab-content">
							<div id="graphic-design-1" class="tab-pane show active">
								<table class="table border book-overview">
									<tr>
										<th>Book Title</th>
										<td>{{$products->title}}</td>
									</tr>
									<tr>
										<th>Author</th>
										<td>{{$products->author}}</td>
									</tr>
									<tr>
										<th>ISBN</th>
										<td>ISBN : {{$products->isbn}}</td>
									</tr>
									<tr>
										<th>Ediiton Language</th>
										<td>{{$products->language}}</td>
									</tr>
									
									<tr>
										<th>Date Published</th>
										<td>{{$products->datepublish}}</td>
									</tr>
									<tr>
										<th>Publisher</th>
										<td>{{$products->publisher}}</td>
									</tr>
									<tr>
										<th>Pages</th>
										<td>{{$products->pages}}</td>
									</tr>
									<tr>
										<th>Lesson</th>
										<td>{{$products->lesson}}</td>
									</tr>
									<tr>
										<th>Price</th>
										<td>$ {{$products->price}}.00</td>
									</tr>
									<tr>
										<th>Discount</th>
										<td>{{$products->discount}}%</td>
									</tr>
									<tr class="tags">
										<th>Category</th>
										<td>
											<a href="javascript:void(0);" class="badge">{{$products->category->title}}</a>
											
										</td>
									</tr>
								</table>
								<a href="/product/edit/{{$products->id}}" class="badge px-2 py-2 text-md">Edit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
</x-app-layout>