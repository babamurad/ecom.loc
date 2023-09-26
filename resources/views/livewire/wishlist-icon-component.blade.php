<div class="header-action-icon-2">
    <a href="{{ route('shop.wishlist') }}">
        <img class="svgInject" alt="Wishlist" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
        @php use  Gloudemans\Shoppingcart\Facades\Cart; @endphp
        @if(Cart::instance('wishlist')->count()>0)
        <span class="pro-count blue">{{ Cart::instance('wishlist')->count() }}</span>
        @endif
    </a>
</div>
