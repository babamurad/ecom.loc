@section('title', 'Product Details')

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> <a href="{{ route('product.category', ['slug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
                    <span></span> {{ $product->name }}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery" wire:ignore>
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        @php
                                        $images = explode(",", $product->images)
                                        @endphp
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                            <img src="{{ asset('assets/imgs/products') .'/'. $product->image }}" alt="{{ $product->name }}">
                                            </figure>
                                            @foreach($images as $image)
                                            <figure class="border-radius-10">
                                            <img src="{{ asset('assets/imgs/products') .'/'. $image }}" alt="{{ $product->name }}">
                                            </figure>
                                            @endforeach
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">

                                            <div><img src="{{ asset('assets/imgs/products') .'/'. $product->image }}" alt="{{ $product->name }}"></div>
                                            @foreach($images as $image)
                                            <div><img src="{{ asset('assets/imgs/products') .'/'. $image }}" alt="{{ $product->name }}"></div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ ucfirst($product->name) }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> @if(Auth::check() && Auth::user()->utype == 'ADM')
                                                        <a href="{{ route('admin.product.edit', ['product_id' => $product->id]) }}"><i class="fa fa-edit"></i>Edit Product</a>
                                                    @endif</span><br>
                                                <span> Brands: <a href="{{ route('shop') }}">Bootstrap</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:{{ round($product->rating*20, 0) }}%; background-image: url({{ asset('assets/imgs/theme/rating-stars.png')}}">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> ({{ $reviews->count() }} reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{ $product->regular_price }}</span></ins>
                                                <ins><span class="old-price font-md ml-15">${{ $product->sale_price }}</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Color</strong>
                                            <ul class="list-filter color-filter">
                                                <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                                <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                                <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                                <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">Size</strong>
                                            <ul class="list-filter size-filter font-small">
                                                <li><a href="#">S</a></li>
                                                <li class="active"><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart"
                                                        wire:click.prevent="store({{ $product->id . ',"' . $product->name . '",' . $product->regular_price }})">Add to cart</button>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{ $product->SKU }}</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                            <li>Availability:<span class="in-stock text-success ml-5">{{ round($product->quantity, 0) }} Items In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews ({{ $reviews->count() }})</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                            <tr class="stand-up">
                                                <th>Stand Up</th>
                                                <td>
                                                    <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-wo-wheels">
                                                <th>Folded (w/o wheels)</th>
                                                <td>
                                                    <p>32.5″L x 18.5″W x 16.5″H</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-w-wheels">
                                                <th>Folded (w/ wheels)</th>
                                                <td>
                                                    <p>32.5″L x 24″W x 18.5″H</p>
                                                </td>
                                            </tr>
                                            <tr class="door-pass-through">
                                                <th>Door Pass Through</th>
                                                <td>
                                                    <p>24</p>
                                                </td>
                                            </tr>
                                            <tr class="frame">
                                                <th>Frame</th>
                                                <td>
                                                    <p>Aluminum</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-wo-wheels">
                                                <th>Weight (w/o wheels)</th>
                                                <td>
                                                    <p>20 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-capacity">
                                                <th>Weight Capacity</th>
                                                <td>
                                                    <p>60 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="width">
                                                <th>Width</th>
                                                <td>
                                                    <p>24″</p>
                                                </td>
                                            </tr>
                                            <tr class="handle-height-ground-to-handle">
                                                <th>Handle height (ground to handle)</th>
                                                <td>
                                                    <p>37-45″</p>
                                                </td>
                                            </tr>
                                            <tr class="wheels">
                                                <th>Wheels</th>
                                                <td>
                                                    <p>12″ air / wide track slick tread</p>
                                                </td>
                                            </tr>
                                            <tr class="seat-back-height">
                                                <th>Seat back height</th>
                                                <td>
                                                    <p>21.5″</p>
                                                </td>
                                            </tr>
                                            <tr class="head-room-inside-canopy">
                                                <th>Head room (inside canopy)</th>
                                                <td>
                                                    <p>25″</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_color">
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Red, White</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_size">
                                                <th>Size</th>
                                                <td>
                                                    <p>M, S</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                    @foreach($reviews as $review)
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('assets/imgs/avatar.jpg') }}" alt="">
                                                                    <h6><a href="#">{{ $review->user->name }}</a></h6>
                                                                    <p class="font-xxs">Since {{ date_format($review->created_at, "Y") }}</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:{{ $review->rating*20 }}%; background-image: url({{ asset('assets/imgs/theme/rating-stars.png') }});">
                                                                        </div>
                                                                    </div>
                                                                    <p>{{$review->comment}}</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">{{ date_format($review->created_at, "M d, Y - h:i a") }} </p>
{{--                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                        <!--single-comment SELECT SUM(rating)/5 FROM reviews
SELECT COUNT(rating) FROM reviews WHERE rating=5
-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">Customer reviews</h4>
                                                    @if($reviews->count()>0)
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:{{ round($product->rating, 2)*20 }}%; background-image: url({{ asset('assets/imgs/theme/rating-stars.png') }});">
                                                            </div>
                                                        </div>

                                                        <h6>{{ round($product->rating, 2) }} out of 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: {{round($st5/$reviews->count()*100, 2)}}%;" aria-valuenow="{{round($st5/$reviews->count()*100, 2) ? round($st5/$reviews->count()*100, 2) : 0}}" aria-valuemin="0" aria-valuemax="100">{{round($st5/$reviews->count()*100, 2)}}%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: {{round($st4/$reviews->count()*100, 2)}}%;" aria-valuenow="{{round($st4/$reviews->count()*100, 2)}}" aria-valuemin="0" aria-valuemax="100">{{round($st4/$reviews->count()*100, 2)}}%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: {{round($st3/$reviews->count()*100, 2)}}%;" aria-valuenow="{{round($st3/$reviews->count()*100, 2)}}" aria-valuemin="0" aria-valuemax="100">{{round($st3/$reviews->count()*100, 2)}}%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: {{round($st2/$reviews->count()*100, 2)}}%;" aria-valuenow="{{round($st2/$reviews->count()*100, 2)}}" aria-valuemin="0" aria-valuemax="100">{{round($st2/$reviews->count()*100, 2)}}%</div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: {{round($st1/$reviews->count()*100, 2)}}%;" aria-valuenow="{{round($st1/$reviews->count()*100, 2)}}" aria-valuemin="0" aria-valuemax="100">{{round($st1/$reviews->count()*100, 2)}}%</div>
                                                    </div>

                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                    @else
                                                    <p>This product has no reviews yet.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
{{--                                        <div class="comment-form">--}}
{{--                                            <h4 class="mb-15">Add a review</h4>--}}
{{--                                                @if(session()->has('success'))--}}
{{--                                                    <div class="alert alert-success"><strong>Success | {{ session('success') }}</strong> </div>--}}
{{--                                                @endif--}}
{{--                                                    @if(session('error'))--}}
{{--                                                        <div class="alert alert-success">--}}
{{--                                                            {{ session('error') }}--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-8 col-md-12">--}}
{{--                                                    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                                                    <form class="form-contact comment_form mt-3" id="commentForm" wire:submit.prevent="addReview()">--}}
{{--                                                        @csrf--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-12">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                <div class="comment-form-rating float-start">--}}
{{--                                                                    <span>Your rating</span></br>--}}
{{--                                                                    <div class="rating-area float-start">--}}
{{--                                                                        <input type="radio" id="star-5" name="rating" value="5" wire:model="rating">--}}
{{--                                                                        <label for="star-5" title="«5» stars"></label>--}}
{{--                                                                        <input type="radio" id="star-4" name="rating" value="4" wire:model="rating">--}}
{{--                                                                        <label for="star-4" title="«4» stars"></label>--}}
{{--                                                                        <input type="radio" id="star-3" name="rating" value="3" wire:model="rating">--}}
{{--                                                                        <label for="star-3" title="«3» stars"></label>--}}
{{--                                                                        <input type="radio" id="star-2" name="rating" value="2" wire:model="rating">--}}
{{--                                                                        <label for="star-2" title="«2» stars"></label>--}}
{{--                                                                        <input type="radio" id="star-1" name="rating" value="1" wire:model="rating">--}}
{{--                                                                        <label for="star-1" title="«1» stars"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" wire:model="comment"></textarea>--}}
{{--                                                                    @error('comment') <span class="text-danger"> {{$message}} </span>@enderror--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <button class="button button-contactForm" type="submit">Submit--}}
{{--                                                                Review</button>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                    @else--}}
{{--                                                        <div class="text-muted text-center">Yu must <a href="{{ route('login.create') }}">Sign in now</a></div>--}}
{{--                                                        <div class="text-muted text-center">Or <a href="{{route('register.create')}}">Sign up now</a></div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($rproducts as $rprod)
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ route('product.details', ['slug' => $rprod->slug]) }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('assets/imgs/products') .'/'. $rprod->image }}" alt="{{ $rprod->name }}">
                                                                <img class="hover-img" src="{{ asset('assets/imgs/products') .'/'. $rprod->image }}" alt="{{ $rprod->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ route('product.details', ['slug' => $rprod->slug]) }}" tabindex="0">{{ $rprod->name }}</a></h2>
                                                        <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>${{ $rprod->regular_price }} </span>
                                                            <span class="old-price">${{ $rprod->sale_price }}</span>
                                                            {{--                                                            <p>{{ $loop->iteration }}</p>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach($categories as $category)
                                    <li><a class="mr-3" href="{{ route('product.category', $category->slug) }}">{{ ucfirst($category->name) }} <span class="badge badge-danger ml-5">{{ $category->products->count() }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach($nprods as $nprod)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/products') .'/'. $nprod->image }}" alt="{{ $nprod->name }}">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="{{ route('product.details', ['slug' => $nprod->slug]) }}">{{ $nprod->name }}</a></h5>
                                        <p class="price mb-0 mt-5">${{ $nprod->regular_price }}</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



