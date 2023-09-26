@section('title', 'Admin Edit Product')
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Edit Product
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Edit Product
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.products') }}" class="btn btn-success float-end">All Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="updateProduct()" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter product name" wire:model="name" wire:keyup="generateSlug()">
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" placeholder="Enter product slug" wire:model="slug" >
                                        @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="short_description" class="form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description" placeholder="Enter Short Description" cols="30" rows="10" wire:model="short_description"></textarea>
                                        @error('short_description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Description" cols="30" rows="10" wire:model="description"></textarea>
                                        @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label">Reqular Price</label>
                                        <input type="text" class="form-control" name="regular_price" placeholder="Enter regular price" wire:model="regular_price" >
                                        @error('regular_price')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-label">Sale Price</label>
                                        <input type="text" class="form-control" name="sale_price" placeholder="Enter sale price" wire:model="sale_price" >
                                        @error('sale_price')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" name="sku" placeholder="Enter sku" wire:model="SKU" >
                                        @error('sku')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="stock" class="form-label">Stock Status</label>
                                        <select class="form-control" name="stock" wire:model="stock_status">
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                        @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select class="form-control" name="featured" wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        @error('featured')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" placeholder="Enter product quantity" wire:model="quantity">
                                        @error('quantity')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control" wire:model="newimage">
                                        @if($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120">
                                        @else
                                            <img src="{{ asset('assets/imgs/products') }}/{{ $image }}" alt="" width="120">
                                        @endif
                                        @error('newimage')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
{{--                                    @php--}}
{{--                                        $images = explode(",", $product->images)--}}
{{--                                    @endphp--}}
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Product Image Gallery</label>
                                        <input type="file" name="image" class="form-control" wire:model="newimages" multiple>
                                        @if($newimages)
                                            @foreach($newimages as $newimage)
                                                @if($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120">
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($images as $image)
                                                @if($image)
                                                <img src="{{ asset('assets/imgs/products') }}/{{ $image }}" alt="" width="120">
                                                @endif
                                            @endforeach
                                        @endif
                                        @error('newimages')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-control" name="category_id" wire:model="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary float-end" type="submit">Update</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

