<x-app-layout>
<div class="container-fluid">

<div class="row" >
    <div class="col-xl-12 pt-24">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">Category List</h4>

                <a href="/category" class="btn btn-sm btn-primary bg-orange-400">
                    Add Category
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
                                <th>Category Title</th>
                              
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>




                            @foreach($category as $categories)
                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                              
                                <td class="">{{$categories->title}}</td>
                              
                             
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="/product/edit/{{$categories->id}}" class="btn btn-light btn-sm hover:scale-110 transition hover:ease-in-out duration-150  hover:shadow"><i class="fa fa-pen"></i></a>
                                     <form action="/product/delete/{{$categories->id}}" method="post"> 
                                     @method('delete')
                                        @csrf 
                                         <button type="submit" class="btn btn-soft-primary btn-sm hover:scale-110 transition hover:ease-in-out duration-150 hover:shadow"><i class="fa fa-archive "></i></button>
                                        </form>
                                       

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
</x-app-layout>