@section('title', 'User Orders')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Orders
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
                                        All Orders
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <table class="table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        {{--                                        <th>OrderId</th>--}}
                                        <th>Subtotal</th>
{{--                                        <th>Discount</th>--}}
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Zip Code</th>
                                        <th>Status</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = ($orders->currentPage()-1)*$orders->perPage();
                                    @endphp
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            {{--                                            <td>{{ $order->id }}</td>--}}
                                            <td>${{ $order->subtotal }}</td>
{{--                                            <td>${{ $order->discount ? $order->discount : '0.00' }}</td>--}}
                                            <td>${{ $order->tax }}</td>
                                            <td>${{ $order->total }}</td>
                                            <td>{{ $order->firstname }}</td>
                                            <td>{{ $order->lastname }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->zipcode }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td><a href="{{ route('orderdetails', ['order_id' => $order->id]) }}" class="btn btn-sm btn-secondary float-left mr-2">Details</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                    {{ $orders->links("pagination::bootstrap-4") }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>


