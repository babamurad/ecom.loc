@section('title', 'Admin Order Details')
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Order Details
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
{{--                    Ordered Items--}}
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Ordered Items</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-success float-end" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }}, 'delivered' )">Delivered</a>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-success float-end" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }}, 'canceled' )">Canceled</a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('admin.orders') }}" class="btn btn-success float-end">All Orders</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table-striped">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Sub Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->orderItems as $item)
                                        <tr>
                                            <td><img src="{{ asset('assets/imgs/products').'/'.$item->product->image }}" alt="{{$item->product->name}}" width="60"></td>
                                            <td><a href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{$item->product->name}}</a> </td>
                                            <td>${{$item->price}}</td>
                                            <td><h5>{{ $item->quantity }}</h5></td>
                                            <td>$ {{ number_format((float)$item->price * $item->quantity, 2, '.', ' ')}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border p-md-4 p-30 border-radius cart-totals">
                                            <div class="heading_s1 mb-3">
                                                <h4>Order Status</h4>
                                            </div>
                                            <div class="row text-right">

                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">Order Id</td>
                                                        <td class="cart_total_amount"><span>{{ $order->id }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Order Date</td>
                                                        <td class="cart_total_amount"><span>{{ $order->created_at }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Status</td>
                                                        <td class="cart_total_amount" @if($order->status == 'delivered') style=" color: #4cd964" @else style="color:#a52834" @endif> <i class="ti-gift mr-5"></i><strong>{{ $order->status }}</strong> </td>
                                                    </tr>
                                                    @if($order->status == 'delivered')
                                                    <tr>
                                                        <td class="cart_total_label">Delivery Date</td>
                                                        <td class="cart_total_amount"><span>{{ $order->delivered_date }}</span></td>
                                                    </tr>
                                                    @elseif($order->status == 'canceled')
                                                        <tr>
                                                            <td class="cart_total_label">Canceled Date</td>
                                                            <td class="cart_total_amount"><span>{{ $order->canceled_date }}</span></td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-md-4 p-30 border-radius cart-totals">
                                            <div class="heading_s1 mb-3">
                                                <h4>Order Summary</h4>
                                            </div>
                                            <div class="row text-right">

                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">Order Subtotal</td>
                                                        <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{ $order->subtotal }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Tax - 10%</td>
                                                        <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{ $order->tax }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Shipping</td>
                                                        <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Total</td>
                                                        <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{ $order->total }}</span></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

{{--                    Billing Details--}}
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Billing Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table-striped">
                                    <tr>
                                        <th><strong>First Name</strong></th>
                                        <td>{{ $order->firstname }}</td>
                                        <th><strong>Last Name</strong></th>
                                        <td>{{ $order->lastname }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Phone</strong></th>
                                        <td>{{ $order->phone }}</td>
                                        <th><strong>Email</strong></th>
                                        <td>{{ $order->email }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Address Line 1</strong></th>
                                        <td>{{ $order->address1 }}</td>
                                        <th><strong>Address Line 2</strong></th>
                                        <td>{{ $order->address2 }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>City</strong></th>
                                        <td>{{ $order->city }}</td>
                                        <th><strong>State</strong></th>
                                        <td>{{ $order->state }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Company Name</strong></th>
                                        <td>{{ $order->companyname }}</td>
                                        <th><strong>Zip Code</strong></th>
                                        <td>{{ $order->zipcode }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                    @if($order->ship_to_different)
                    {{--                    Shipping Details--}}
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Shipping Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table-striped">
                                    <tr>
                                        <th><strong>First Name</strong></th>
                                        <td>{{ $order->shipping->firstname }}</td>
                                        <th><strong>Last Name</strong></th>
                                        <td>{{ $order->shipping->lastname }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Phone</strong></th>
                                        <td>{{ $order->shipping->phone }}</td>
                                        <th><strong>Email</strong></th>
                                        <td>{{ $order->shipping->email }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Address Line 1</strong></th>
                                        <td>{{ $order->shipping->address1 }}</td>
                                        <th><strong>Address Line 2</strong></th>
                                        <td>{{ $order->shipping->address2 }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>City</strong></th>
                                        <td>{{ $order->shipping->city }}</td>
                                        <th><strong>State</strong></th>
                                        <td>{{ $order->shipping->state }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Company Name</strong></th>
                                        <td>{{ $order->shipping->companyname }}</td>
                                        <th><strong>Zip Code</strong></th>
                                        <td>{{ $order->shipping->zipcode }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                    @endif

                    {{--                    Transaction--}}
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Transaction</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table-striped">
                                    <tr>
                                        <th><strong>Transaction Mode</strong></th>
                                        <td>{{ $order->transaction->mode }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Status</strong></th>
                                        <td>{{ $order->transaction->status }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Transaction Date</strong></th>
                                        <td>{{ $order->transaction->created_at }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
