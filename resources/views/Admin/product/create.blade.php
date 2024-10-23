<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 dark:text-gray-200 leading-tight">
            {{ __('Create Product !') }}
        </h2>
    </x-slot>
    <form action="/product/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="px-12">
            <div class=" ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Product Photo</h4>
                    </div>

                    <div class="card-body">
                        <!-- File Upload -->


                        <div class="dz-message needsclick">
                            <i class="fa fa-arrow-circle-o-down"></i>
                            <div class="fallback flex item-center justify-center mb-3">
                                <input name="photo" type="file" multiple />
                            </div>
                            <!-- <span class="text-muted fs-13">
                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                            </span> -->
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name" name="title">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <label for="product-categories" class="form-label">Product Categories</label>
                                <select style="padding:9px; line-height:1rem;" class="w-full bg-transparent border  rounded-lg " name="category_id">
                                    <option>
                                        Choose a Category
                                    </option>
                                    @foreach($category as $categories)
                                    <option value="{{$categories->id}}">{{$categories->title}}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">

                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Author</label>
                                    <input type="text" id="product-brand" class="form-control" placeholder="Author Name" name="author">
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="mb-3">
                                    <label for="product-weight" class="form-label">Publisher</label>
                                    <input type="text" id="product-weight" class="form-control" placeholder="Publisher Name" name="publisher">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                
                                    <label for="gender" class="form-label">Publish Date</label>
                                    <input type="date" id="product-weight" class="form-control" name="datepublish">
                                
                            </div>
                        </div>
                        <div class=" grid grid-cols-2  md:grid-cols-3 ">
                            <div>
                                <label for="product-brand" class="form-label">Add to Offer</label>
                                <select name="offer" id="" style="padding:9px; line-height:1rem;" class="w-full bg-transparent border  rounded-lg ">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="product-brand" class="form-label">Add to Feature</label>
                                <select name="feature" id="" style="padding:9px; line-height:1rem;" class="w-full bg-transparent border  rounded-lg ">
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="product-brand" class="form-label">Add to Bestselling</label>
                                <select name="bestselling" id="" style="padding:9px; line-height:1rem;" class="w-full bg-transparent border  rounded-lg ">
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 mt-4 grid grid-cols-1 lg:grid-cols-3">
                            <div class="mb-3">
                                <label for="product-id" class="form-label">Isbn Number</label>
                                <input name="isbn" type="string" id="product-id" class="form-control" placeholder="Isbn Number">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="editor" rows="10" cols="80">
                This is my text.
            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="pages" class="form-label">Pages</label>
                            <input name="pages" type="string" id="lesson" class="form-control" placeholder="Number of Pages">
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="lesson" class="form-label">lesson</label>
                            <input name="lesson" type="number" id="lesson" class="form-control" placeholder="Number of lesson">
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <label for="language" class="form-label">Language</label>
                        <input type="string" name="language" id="language" class="form-control" placeholder="Eg: Sapanish">
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pricing Details</h4>
            </div>
            <div class="card-body px-12">
                <div class="row">
                    <div class="col-lg-4">

                        <label for="product-price" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                            <input name="price" type="number" id="product-price" class="form-control" placeholder="000">
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <label for="product-discount" class="form-label">Compare Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                            <input name="compare_price" type="number" id="product-discount" class="form-control" placeholder="000">
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="p-3 bg-light mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-outline-secondary w-100">Create Product</button>
                </div>
                <!-- <div class="col-lg-2">
                    <a href="/product" class="btn btn-primary w-100">Cancel</a>
                </div> -->
            </div>
        </div>
    </form>
    </div>
    </div>
    <script>
        CKEDITOR.replace('editor');
    </script>
</x-app-layout>