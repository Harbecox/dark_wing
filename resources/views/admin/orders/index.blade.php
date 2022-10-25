@extends('layouts.admin')

@section('title', 'Orders')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Orders</h1>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="{{route('order.create')}}" role="button" style="margin-left: 10px">+ Add new</a>
    <br><br>

    <section class="content">
        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                <div class="d-flex align-items-center">
                                    <span>ID</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'ID','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'ID','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Status</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'Status','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'Status','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Name</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'firstName','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'firstName','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Email</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'email','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'email','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Phone</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'phone','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'phone','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Airport</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'deliveryAirport','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'deliveryAirport','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Day</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'deliveryDay','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'deliveryDay','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Time</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'deliveryTime','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'deliveryTime','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Company</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'company','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'company','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Handling</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'handling','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'handling','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Packaging</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'packaging','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'packaging','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Allergies</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('order.index',['order'=>'allergies','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('order.index',['order'=>'allergies','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center"></div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a>{{$order->id}}</a>
                                </td>
                                <td>
                                    <a>{{$order->status}}</a>
                                </td>
                                <td>
                                    <a>{{$order->firstName}}</a>
                                </td>
                                <td>
                                    <a>{{$order->email}}</a>
                                </td>
                                <td>
                                    <a>{{$order->phone}}</a>
                                </td>
                                <td>
                                    <a>{{$order->deliveryAirport}}</a>
                                </td>
                                <td>
                                    <a>{{$order->deliveryDay}}</a>
                                </td>
                                <td>
                                    <a>{{$order->deliveryTime}}</a>
                                </td>
                                <td>
                                    <a>{{$order->company}}</a>
                                </td>
                                <td>
                                    <a>{{$order->handling}}</a>
                                </td>
                                <td>
                                    <a>{{$order->packaging}}</a>
                                </td>
                                <td>
                                    <a>{{$order->allergies}}</a>
                                </td>

                                <td class="project-actions text-right">
                                    <form action="{{ route('order.destroy',$order) }}" class="d-flex" method="POST">
                                        <button type="button" class="btn btn-warning" onclick="showStatusChangeModal({{ $order->id }})">Change status</button>
                                        <a class="btn btn-primary mx-2" href="{{ route('order.edit',$order) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="orderChangeModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <form class="modal-content d-block" method="post" action="{{ route('order.status') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="order_id">
                        <label for="status_name">Status</label>
                        <select name="status" class="form-control" id="status_name">
                            <option name="to by confirmed">to by confirmed</option>
                            <option name="confirmed">confirmed</option>
                            <option name="completed">completed</option>
                            <option name="paid">paid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_text">Message</label>
                        <textarea name="message" class="form-control" id="status_text"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        function showStatusChangeModal(id){
            let modal_elem = $("#orderChangeModel");
            modal_elem.find("input[name='order_id']").val(id);
            modal_elem.modal("show");
        }
        $('#status_text').summernote()
    </script>
@endsection
