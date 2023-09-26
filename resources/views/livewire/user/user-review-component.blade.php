@section('title', 'Review')
<div>
    <div class="container">
        <div class="row">
            <div class="wrap-review-form">

                <div id="comments" class="mt-3">
                    <h3 class="mb-3">Add Review for:</h3>
                    <div class="row" class="mb-3">
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-md-4 mt-2">
                                    <img src="{{ asset('assets/imgs/products/'.$orderItem->product->image) }}" alt="{{ $orderItem->product->name }}" style="width: 8em;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="woocommerce-Reviews-title mt-3"><span><a href="{{route('product.details', ['slug' => $orderItem->product->slug])}}">{{ ucfirst($orderItem->product->name) }}</a></span></h2>
                                    <h3 class="mt-2">Price: ${{ $orderItem->product->sale_price }}</h3>
                                    <h4 class="mt-2">Category: <a href="{{ route('product.category', ['slug' => $orderItem->product->category->slug]) }}">{{ ucfirst($orderItem->product->category->name) }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ol class="commentlist">
                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                            <div id="comment-20" class="comment_container">
                                <img alt="" src="{{ asset('assets/imgs/author-avata.jpg') }}" height="80" width="80">
                                <div class="comment-text">
                                    <div class="star-rating">
                                        <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                    </div>
                                    <p class="meta">
                                        <strong class="woocommerce-review__author">admin</strong>
                                        <span class="woocommerce-review__dash">–</span>
                                        <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00">Tue, Aug 15,  2017</time>
                                    </p>
                                    <div class="description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- #comments -->

                <div id="review_form_wrapper">
                    <div id="review_form">
                        <div id="respond" class="comment-respond">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form wire:submit.prevent="addReview({{ $orderItem->product->id }})" id="commentform" class="comment-form" novalidate="">
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                </p>
                                <div class="row">
                                    <div class="comment-form-rating float-start">
                                        <span>Your rating</span></br>
                                        <div class="rating-area float-start">
                                            <input type="radio" id="star-5" name="rating" value="5" wire:model="rating">
                                            <label for="star-5" title="«5» stars"></label>
                                            <input type="radio" id="star-4" name="rating" value="4" wire:model="rating">
                                            <label for="star-4" title="«4» stars"></label>
                                            <input type="radio" id="star-3" name="rating" value="3" wire:model="rating">
                                            <label for="star-3" title="«3» stars"></label>
                                            <input type="radio" id="star-2" name="rating" value="2" wire:model="rating">
                                            <label for="star-2" title="«2» stars"></label>
                                            <input type="radio" id="star-1" name="rating" value="1" wire:model="rating">
                                            <label for="star-1" title="«1» stars"></label>
                                        </div>
                                    </div>
                                </div>

                                <p class="comment-form-comment">
                                    <label for="comment">Your review <span class="required">*</span>
                                    </label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                </p>
                            </form>

                        </div><!-- .comment-respond-->
                    </div><!-- #review_form -->
                </div><!-- #review_form_wrapper -->

            </div>
        </div>
    </div>
</div>
