@section('title', 'Thank you')
<div>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Thank you
            </div>
        </div>
    </div>
    <div class="row mb-50">
        <div class="col-lg-12 col-md-12 text-center mt-3">
            <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
            <h2 class="mb-15 text-grey-1 wow fadeIn animated">Thank you <br> for your order!</h2>
            <p class="w-50 m-auto text-grey-3 wow fadeIn animated">A confirmation email was sent.</p>
            <div class="mt-3">
                <a href="{{ route('shop') }}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
            </div>

        </div>
    </div>
</div>
