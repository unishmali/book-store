<x-app-layout>


    <div class="page-content pt-12 ">

        <!-- Start Container Fluid -->
        <div class="container-fluid">

            <!-- Start here.... -->
            <div class="row pt-16">
                <div class="w-full">
                    <div class="row">
                        <!-- <div class="col-12">
                            <div class="alert alert-primary text-truncate mb-3" role="alert">
                                Welcome To BookLand Nepal !!
                            </div>
                        </div> -->

                        <div class="col-md-6  ">
                            <a href="/product/index">
                                <div class="card overflow-hidden hover:shadow-md">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-orange-300 rounded flex items-center justify-center">
                                                    <i class="fa fa-book text-slate-700 text-2xl  "></i>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-6 text-end">
                                                <p class="text-muted mb-0 text-truncate">Total Books</p>
                                                @php
                                                $totalbooks = \App\Models\product::count();
                                                @endphp
                                                <h3 class="text-dark mt-1 mb-0">{{$totalbooks}}</h3>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card body -->
                                    <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                <span class="text-muted ms-1 fs-12">Last Week</span>
                                            </div>
                                            <a href="/product/index" class="text-reset fw-semibold fs-12  hover:ease-in-out hover:scale-110 transition">View More</a>
                                        </div>
                                    </div> <!-- end card body -->
                                </div>
                            </a> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                          <a href="/category/index" >  <div class="card overflow-hidden hover:shadow-md ">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-orange-300 rounded flex items-center justify-center ">
                                                <i class="fa fa-file   text-slate-700 text-2xl"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Categories</p>
                                            @php
                                            $totalCategory = \App\Models\category::count();
                                            @endphp
                                            <h3 class="text-dark mt-1 mb-0">{{$totalCategory }}</h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex   align-items-center justify-content-between">
                                       
                                        <a href="/category/index" class="text-reset fw-semibold fs-12 hover:ease-in-out hover:scale-110 transition">View More</a>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                          </a>
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden hover:shadow-md">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-orange-300 rounded flex items-center justify-center">
                                                <i class="fa fa-user text-slate-700 text-2xl"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Users</p>
                                            @php
                                            $totalusers = \App\Models\User::count();
                                            @endphp
                                            <h3 class="text-dark mt-1 mb-0">{{$totalusers}}</h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                        </div>
                                        <a href="#" class="text-reset fw-semibold fs-12  hover:ease-in-out hover:scale-110 transition">View More</a>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden hover:shadow-md">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-orange-300 rounded flex justify-center items-center">
                                                <i class="fa fa-bell text-slate-700 text-2xl"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Order Pending</p>
                                            @php
                                            $totalorders = \App\Models\Order::where('status','pending')->count();
                                            @endphp
                                            <h3 class="text-dark mt-1 mb-0">{{$totalorders}} </h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                        </div>
                                        <a href="#order" class="text-reset fw-semibold fs-12  hover:ease-in-out hover:scale-110 transition">View More</a>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end col -->


            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales</h5>
                            <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">This Week</p>
                                    <h3 class="text-dark mb-3">23.5k</h3>
                                </div> <!-- end col -->
                                <div class="col-6">
                                    <p class="text-muted mb-2">Last Week</p>
                                    <h3 class="text-dark mb-3">41.05k</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="text-center">
                                <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end left chart card -->

                <!-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sessions by Country</h5>
                            <div id="world-map-markers" style="height: 316px">
                            </div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">This Week</p>
                                    <h3 class="text-dark mb-3">23.5k</h3>
                                </div> 
                                <div class="col-6">
                                    <p class="text-muted mb-2">Last Week</p>
                                    <h3 class="text-dark mb-3">41.05k</h3>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-8">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center justify-content-between gap-2">
                            <h4 class="card-title flex-grow-1">Top Sale Books</h4>

                            <a href="#" class="btn btn-sm btn-soft-primary">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap table-centered m-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>
                                        <th class="text-muted ps-3">Page Path</th>
                                        <th class="text-muted">Page Views</th>
                                        <th class="text-muted">Exit Rate</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/ecommerce.html</a></td>
                                        <td>465 </td>
                                        <td><span class="badge badge-soft-success">4.4%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/dashboard.html</a></td>
                                        <td> 426</td>
                                        <td><span class="badge badge-soft-danger">20.4%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/chat.html</a></td>
                                        <td>254 </td>
                                        <td><span class="badge badge-soft-warning">12.25%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/auth-login.html</a></td>
                                        <td> 3369</td>
                                        <td><span class="badge badge-soft-success">5.2%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/email.html</a></td>
                                        <td>985 </td>
                                        <td><span class="badge badge-soft-danger">64.2%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/social.html</a></td>
                                        <td>653 </td>
                                        <td><span class="badge badge-soft-success">2.4%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3"><a href="#" class="text-muted">larkon/blog.html</a></td>
                                        <td>478 </td>
                                        <td><span class="badge badge-soft-danger">1.4%</span></td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-xl-4 d-none">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Recent Transactions</h4>
                            <div>
                                <a href="#!" class="btn btn-sm btn-primary">
                                    <i class="bx bx-plus me-1"></i>Add
                                </a>
                            </div>
                        </div> <!-- end card-header-->
                        <div class="card-body p-0">
                            <div class="px-3" data-simplebar style="max-height: 398px;">
                                <table class="table table-hover mb-0 table-centered">
                                    <tbody>
                                        <tr>
                                            <td>24 April, 2024</td>
                                            <td>$120.55</td>
                                            <td><span class="badge bg-success">Cr</span></td>
                                            <td>Commisions </td>
                                        </tr>
                                        <tr>
                                            <td>24 April, 2024</td>
                                            <td>$9.68</td>
                                            <td><span class="badge bg-success">Cr</span></td>
                                            <td>Affiliates </td>
                                        </tr>
                                        <tr>
                                            <td>20 April, 2024</td>
                                            <td>$105.22</td>
                                            <td><span class="badge bg-danger">Dr</span></td>
                                            <td>Grocery </td>
                                        </tr>
                                        <tr>
                                            <td>18 April, 2024</td>
                                            <td>$80.59</td>
                                            <td><span class="badge bg-success">Cr</span></td>
                                            <td>Refunds </td>
                                        </tr>
                                        <tr>
                                            <td>18 April, 2024</td>
                                            <td>$750.95</td>
                                            <td><span class="badge bg-danger">Dr</span></td>
                                            <td>Bill Payments </td>
                                        </tr>
                                        <tr>
                                            <td>17 April, 2024</td>
                                            <td>$455.62</td>
                                            <td><span class="badge bg-danger">Dr</span></td>
                                            <td>Electricity </td>
                                        </tr>
                                        <tr>
                                            <td>17 April, 2024</td>
                                            <td>$102.77</td>
                                            <td><span class="badge bg-success">Cr</span></td>
                                            <td>Interest </td>
                                        </tr>
                                        <tr>
                                            <td>16 April, 2024</td>
                                            <td>$79.49</td>
                                            <td><span class="badge bg-success">Cr</span></td>
                                            <td>Refunds </td>
                                        </tr>
                                        <tr>
                                            <td>05 April, 2024</td>
                                            <td>$980.00</td>
                                            <td><span class="badge bg-danger">Dr</span></td>
                                            <td>Shopping</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div id="order" class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">
                                    Recent Orders
                                </h4>

                                <a href="#!" class="btn btn-sm btn-soft-primary">
                                    <i class="fa fa-eye me-1"></i>View All
                                </a>
                            </div>
                        </div>
                        <!-- end card body -->
                        <div class="table-responsive table-centered">
                            <table class="table mb-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>

                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Product
                                        </th>
                                        <th>
                                            Customer Name
                                        </th>
                                        <th>
                                            Email ID
                                        </th>
                                        <th>
                                            Phone No.
                                        </th>
                                        <th>
                                            Address
                                        </th>

                                        <th>
                                            Status
                                        </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if(empty($groupedOrders))
                                    <td> No orders yet.</td>
                                    @else
                                    @foreach($groupedOrders as $group)
                                    <tr>
                                        <td class="ps-3">
                                            <a href="order-detail.html">{{$group['order']->created_at->toFormattedDateString()}}</a>
                                        </td>


                                        <td>
                                            @foreach($group['orderItems'] as $orderItem)
                                            <img src="{{asset($orderItem->cart->product->photo)}}" alt="product-1(1)" class="img-fluid avatar-sm">
                                            @endforeach
                                        </td>

                                        <td>
                                            <a href="#!">{{$group['order']->fname}}{{$group['order']->lname}}
                                            </a>
                                        </td>
                                        <td>{{$group['order']->email}}</td>
                                        <td>{{$group['order']->phone}}</td>
                                        <td>{{$group['order']->address}}</td>

                                        <td class="">
                                            <span class=" {{ $group['order']->status  == 'Canceled' ? 'text-red-500' : 'text-green-700' }}"> {{$group['order']->status}}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="/order/accept/{{$group['order']->id}}" class="btn btn-light btn-sm hover:scale-110 transition hover:ease-in-out  hover:bg-green-300 duration-150  hover:shadow">Accept</a>
                                                <form action="" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="/order/cancel/{{$group['order']->id}}" class="btn btn-soft-primary btn-sm hover:scale-110 transition hover:ease-in-out bg-red-500 hover:bg-red-600 duration-150 hover:shadow text-white">Cancel</a>
                                                </form>
                                                <a href="#!" class="btn btn-sm btn-soft-primary  ">
                                                    <i class="fa fa-eye mr-1 "></i>Detail
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @endif



                                </tbody>
                                <!-- end tbody -->
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- table responsive -->

                        <div class="card-footer border-top">
                            <div class="row g-3">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing
                                        <span class="fw-semibold">5</span>
                                        of
                                        <span class="fw-semibold">90,521</span>
                                        orders
                                    </div>
                                </div>

                                <div class="col-sm-auto">
                                    <ul class="pagination m-0">
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div> <!-- end row -->

        </div>
        <!-- End Container Fluid -->



    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->
</x-app-layout>