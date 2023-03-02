@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <div class="row">

                    <div class="col-10"><h1 class="card-title">Xaridlar </h1></div>

                </div>

                <hr>

                <div class="card-body">

                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Kitob</th>
                            <th class="" scope="col"> Soni</th>
                            <th class="" scope="col"> Umumiy narx ( sum )</th>
                            <th class="" scope="col"> Sanasi </th>
                            <th class="" scope="col"> Turi </th>
                            <th class="" scope="col"> Holati</th>
                            <th class="" scope="col"> Status</th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $ind=>$order)
                            <tr>
                                <td class="col-1">{{($orders->currentpage()-1)*($orders->perpage())+$ind+1}}</td>
                                <td>{{ $order->book->title }}</td>

                                <td>{{ $order->count }}</td>
                                <td>

                                    @if($order->busy_id ==1)
                                    {{ number_format( (((int)date("d")-(int)$order->created_at->format('d')+1) * $order->book->price_daily), 0, ',', ',') }}
                                    @endif

                                    @if($order->busy_id ==2)
                                    {{ number_format( $order->price, 0, ',', ' ') }}
                                    @endif

                                </td>
                                <td>{{ $order->created_at->format('d-m-Y') }}</td>

                                <td>
                                    @if($order->busy_id ==2)
                                        <button data-bs-toggle="modal" data-bs-target="#showModal{{$order->id}}"
                                                type="button" class="btn btn-outline-success  btn-sm">
                                               {{ $order->busy->name }}
                                        </button>
                                    @endif
                                    @if($order->busy_id ==1)
                                            <button data-bs-toggle="modal" data-bs-target="#showModal{{$order->id}}"
                                                    type="button" class="btn btn-outline-primary  btn-sm">
                                                {{ $order->busy->name }}
                                            </button>
                                    @endif


                                </td>

                                <td>
                                    @if($order->is_paid ==1)
                                            <span class="badge bg-success">To'landi</span>
                                    @endif
                                    @if($order->is_paid ==0)
                                            <button data-bs-toggle="modal" data-bs-target="#sentModal{{$order->id}}"
                                                    type="button" class="btn btn-outline-danger   btn-sm">
                                                    To'lanmadi
                                            </button>
                                    @endif

                                </td>
                                <td>
                                    @if($order->is_active ==1)
                                        <span class="badge bg-success">Yangi</span>
                                    @endif
                                    @if($order->is_active ==0)
                                        <span class="badge bg-danger">Yuborildi</span>
                                    @endif

                                </td>

                                <td class="col-2">




                                    <button data-bs-toggle="modal" data-bs-target="#showModal{{$order->id}}"
                                            type="button" class="btn btn-info  btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-plane"></i>
                                            </span>
                                    </button>





                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$order->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                            <span class="btn-label">
                                                <i class="bx bx-trash"></i>
                                            </span>
                                    </button>


                                    {{-- sent  Modals--}}
                                    <div class="modal fade" id="showModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="" scope="col"> Mijoz</th>
                                                        <th class="" scope="col"> Telefon</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $order->user_name }}</td>
                                                        <td>{{ $order->phone }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Show  Modals--}}

                                    <div class="modal fade" id="showModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="" scope="col"> Mijoz</th>
                                                        <th class="" scope="col"> Telefon</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $order->user_name }}</td>
                                                        <td>{{ $order->phone }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu xaridni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.clients.destroy',$order->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Yopish
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">O'chirish</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($orders->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $orders->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection



