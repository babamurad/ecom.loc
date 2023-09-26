@section('title', 'Admin Edit Category')
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Edit Category
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
                                        Add New Category
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.categories') }}" class="btn btn-success float-end">All Categories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="" wire:submit.prevent="updateCategory()">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug()">
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" placeholder="Enter category slug" wire:model="slug" >
                                        @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image" wire:model="newimage" >
                                        @error('newimage')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        @if($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" alt="Category image" width="120">
                                        @else
                                            <img src="{{ asset('assets/imgs/categories').'/'.$image }}" alt="Category image" width="120">
                                        @endif
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="is_popular" class="form-label">Is Popular</label>
                                        <select name="is_popular" class="form-control" wire:model="is_popular">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        @error('is_popular')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
