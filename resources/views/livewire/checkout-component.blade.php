@section('title', 'Checkout')

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                        <div class="toggle_info">
                            <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Username Or Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-md" name="login">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <form action="post" wire:submit.prevent="placeOrder">
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <div class="frm">
                            <div class="form-group">
                                <input type="text"  name="fname" placeholder="First name *" wire:model="firstname">
                                @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"  name="lname" placeholder="Last name *" wire:model="lastname">
                                @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="cname" placeholder="Company Name" wire:model="companyname">
                                @error('companyname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address"  placeholder="Address *" wire:model="address1">
                                @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address2"  placeholder="Address line2" wire:model="address2">
                            </div>
                            <div class="form-group">
                                <input  type="text" name="city" placeholder="City / Town *" wire:model="city">
                                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input  type="text" name="state" placeholder="State / County *" wire:model="state">
                                @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input  type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="zipcode">
                                @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input  type="text" name="phone" placeholder="Phone *" wire:model="phone">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input  type="text" name="email" placeholder="Email address *" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="ship_detail">
                                <div class="form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress" value="1" wire:model="ship_to_different">
                                            <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address?</span></label>
                                        </div>
                                    </div>
                                </div>
                                @if($ship_to_different)
                                    <div class="mb-25">
                                        <h4>Shipping Address</h4>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="fname" placeholder="First name *" wire:model="s_firstname">
                                        @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="lname" placeholder="Last name *" wire:model="s_lastname">
                                        @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address"  placeholder="Address *" wire:model="s_address1">
                                        @error('s_address1') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address2"  placeholder="Address line2" wire:model="s_address1">
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" name="city" placeholder="City / Town *" wire:model="s_city">
                                        @error('s_city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" name="state" placeholder="State / County *" wire:model="s_state">
                                        @error('s_state') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="s_zipcode">
                                        @error('s_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" name="phone" placeholder="Phone *" wire:model="s_phone">
                                        @error('s_phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                @endif
                            </div>
                            <div class="mb-20">
                                <h5>Additional information</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Order notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products') .'/'. $item->model->image }}" alt="#"></td>
                                        <td>
                                            <h5><a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a></h5> <span class="product-qty">x {{$item->qty}}</span>
                                        </td>
                                        <td>${{ $item->model->name }}</td>
                                    </tr>
                                    @endforeach

                                    @if(\Illuminate\Support\Facades\Session::has('checkout'))
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">${{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td colspan="2"><em>Free Shipping</em></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th>Tax 10%</th>
                                        <td colspan="2"><em>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total() }}</span></td>
                                    </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input"  type="radio" name="payment_option" value="code" id="exampleRadios3" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input"  type="radio" name="payment_option" value="card" id="exampleRadios4" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment On Delivery</label>
                                    </div>
                                </div>
                                @error('paymentmode') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-fill-out btn-block mt-30">Place Order</button>
                        </div>
                    </div>


</div>
                    </form>
                </div>
            </div>
        </section>

    </main>

