<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 dark:text-gray-200 leading-tight">
            {{ __('Product List') }}
        </h2>
    </x-slot>
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center gap-1">
                            <h4 class="card-title flex-grow-1">All Product List</h4>

                            <a href="/product" class="btn btn-sm btn-primary">
                                Add Product
                            </a>


                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check ms-1">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </div>
                                            </th>
                                            <th>Product Name & Size</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Publisher</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>




                                        @foreach($product as $products)
                                        <tr>
                                            <td>
                                                <div class="form-check ms-1">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <img src="{{ asset($products->photo) }}" alt="" class="avatar-md">
                                                    </div>
                                                    <div>
                                                        <a href="#!" class="text-dark fw-medium fs-15">{{$products->title}} </a>
                                                       
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="">${{$products->price}}.00</td>
                                            <td>
                                                <p class="mb-1 text-muted">{{$products->discount}}.00 %</p>
                                              
                                            </td>
                                            <td> {{$products->category->title}}</td>
                                            <td>{{$products->author}}</td>
                                            <td> <span class="badge p-1 bg-light text-black fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-slate-700 me-1">{{$products->publisher}}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="/product/edit/{{$products->id}}" class="btn btn-light btn-sm hover:scale-110 transition hover:ease-in-out duration-150  hover:shadow"><i class="fa fa-pen"></i></a>
                                                 <form action="/product/delete/{{$products->id}}" method="post"> 
                                                 @method('delete')
                                                    @csrf 
                                                     <button type="submit" class="btn btn-soft-primary btn-sm hover:scale-110 transition hover:ease-in-out duration-150 hover:shadow"><i class="fa fa-archive "></i></button>
                                                    </form>
                                                    <a href="/adminproduct/detail/{{$products->id}}" class="btn btn-soft-primary btn-sm hover:scale-110 transition hover:ease-in-out duration-150 text-black hover:shadow hover:bg-slate-200 hover:border-slate-200"><i class="fa fa-eye text-black pr-2"></i>Detail</a>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <div class="card-footer border-top">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</x-app-layout>