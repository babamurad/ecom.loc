@section('title', 'Admin Contact')
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All Messages
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
                                        <h3>All Messages</h3>
                                    </div>
                                    <div class="col-md-6">

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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
{{--                                        <th>Action</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = ($contacts->currentPage()-1)*$contacts->perPage();
                                    @endphp
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{!! $contact->message !!} </td>
{{--                                            <td>--}}
{{--                                                <a href="#" class="btn btn-sm btn-danger" onclick="deleteConfirmation({{ $contact->id }})">Delete</a>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                    {{ $contacts->links("pagination::bootstrap-4") }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

{{--<div class="modal" id="deleteConfirmation">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body pb-30 pt-30">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h4 class="pb-3">Do you want to delete this record?</h4>--}}
{{--                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>--}}
{{--                    <button class="btn btn-danger" onclick="deleteCategory()">Delete</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@push('scripts')--}}
{{--    <script>--}}
{{--        function deleteConfirmation(id)--}}
{{--        {--}}
{{--        @this.set('category_id', id);--}}
{{--            $('#deleteConfirmation').modal('show');--}}
{{--        }--}}

{{--        function deleteCategory()--}}
{{--        {--}}
{{--        @this.call('deleteCategory');--}}
{{--            $('#deleteConfirmation').modal('hide');--}}
{{--        }--}}
{{--    </script>--}}
{{--@endpush--}}
