@section('title', 'User Dashboard')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Dashboard
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard'" role="tab" aria-controls="dashboard" aria-selected="false" wire:model="tabName"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true" wire:model="tabName"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" href="{{ route('logout') }}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" wire:ignore.self>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Hello {{ \Illuminate\Support\Facades\Auth::user()->name }}! </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ empty($tabName) || $tabName == 'address-tab' ? 'active' : '' }}</p>
                                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab" wire:ignore.self>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Your Orders</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($orders as $order)
                                                    <tr>
                                                        <td>#{{ $order->id }}</td>
                                                        <td>{{ $order->created_at }}</td>
                                                        <td>{{ $order->status }}</td>
                                                        <td>${{ $order->subtotal }}</td>
                                                        <td><a href="{{ route('orderdetails', ['order_id' => $order->id]) }}" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                                {{ $orders->links("pagination::bootstrap-4") }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab" wire:ignore.self>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Orders tracking</h5>
                                        </div>
                                        <div class="card-body contact-from-area">
                                            <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                        <div class="input-style mb-20">
                                                            <label>Order ID</label>
                                                            <input name="order-id" placeholder="Found in your order confirmation email" type="text" class="square">
                                                        </div>
                                                        <div class="input-style mb-20">
                                                            <label>Billing email</label>
                                                            <input name="billing-email" placeholder="Email you used during checkout" type="email" class="square">
                                                        </div>
                                                        <button class="submit submit-auto-width" type="submit">Track</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" wire:ignore.self>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card mb-3 mb-lg-0">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Billing Address</h5>
                                                </div>
                                                <div class="card-body">
                                                    @if(!$order_address->count() == 0)
                                                    <address><strong>Address: </strong>{{ $order_address->first()->address1 }}<br> {{ $order_address->first()->address2 }}</address>
                                                    <address><strong>State: </strong>{{ $order_address->first()->state }}</address>
                                                    <address><strong>City: </strong>{{ $order_address->first()->city }}</address>
                                                    <address><strong>Phone: </strong>{{ $order_address->first()->phone }}</address>
                                                    <address><strong>Zipcode: </strong>{{ $order_address->first()->zipcode }}</address>
                                                    <a href="#" class="btn-small" wire:click.prevent="editAddress('address1')">Edit</a>
                                                    @endif
                                                </div>
                                                @if($edit1)
                                                    <hr>
                                                    @include('layouts.address.user-address')
                                                    <button class="btn btn-small btn-success float-end" wire:click.prevent="newAddressStore('billing')">Save</button>
                                                @endif
                                            </div>
                                        </div>
                                        @if($ship_address)
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Shipping Address</h5>
                                                </div>
                                                <div class="card-body">
                                                    @if(!$ship_address->count() == 0)
                                                    <address><strong>Address: </strong>{{ $ship_address->first()->address1 }}<br> {{ $order_address->first()->address2 }}</address>
                                                    <address><strong>State: </strong>{{ $ship_address->first()->state }}</address>
                                                    <address><strong>City: </strong>{{ $ship_address->first()->city }}</address>
                                                    <address><strong>Phone: </strong>{{ $ship_address->first()->phone }}</address>
                                                    <address><strong>Zipcode: </strong>{{ $ship_address->first()->zipcode }}</address>
                                                    @endif
                                                    <a href="#" class="btn-small" wire:click.prevent="editAddress('address2')">Edit</a>
                                                </div>
                                                @if($edit2)
                                                    <hr>
                                                    @include('layouts.address.user-address')
                                                    <button class="btn btn-small btn-success float-end" wire:click.prevent="newAddressStore('shipping')">Save</button>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab" wire:ignore.self>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Account Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Already have an account?<a href="login.html">Log in instead!</a></p>
                                            <form method="post" name="enq">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>First Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Last Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="phone">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Display Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="dname" type="text">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Email Address <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="email" type="email">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Current Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="password" type="password">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>New Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="npassword" type="password">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Confirm Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="cpassword" type="password">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
