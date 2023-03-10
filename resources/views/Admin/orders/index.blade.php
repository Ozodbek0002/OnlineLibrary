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
                                <td >{{($orders->currentpage()-1)*($orders->perpage())+$ind+1}}</td>
                                <td>{{ $order->book->title }}</td>

                                <td>{{ $order->count }}</td>

                                <td>

                                    @if($order->busy_id ==1 || $order->busy_id ==3 )
                                    {{ number_format( (((int)date("d")-(int)$order->created_at->format('d')) * $order->book->price_daily), 0, ',', ',') }}
                                    @endif

                                    @if($order->busy_id ==2)
                                    {{ number_format( $order->price, 0, ',', ' ') }}
                                    @endif

                                </td>

                                <td class=" col-2">
                                  @if($order->busy_id==1 || $order->busy_id==3 )
                                    {{ $order->created_at->format('d-m-Y') }}
                                        <br>
                                      {{ (int)date("d")-(int)$order->created_at->format('d')  }} kun
                                    @else
                                    {{ $order->created_at->format('d-m-Y') }}

                                  @endif




                                </td>

                                <td>

                                    @if($order->busy_id ==2 )
                                        <button data-bs-toggle="modal" data-bs-target="#showModal{{$order->id}}"
                                                type="button" class="btn btn-outline-success  btn-sm">
                                               {{ $order->busy->name }}
                                        </button>
                                    @endif

                                    @if($order->busy_id ==3 )
                                        <button data-bs-toggle="modal" data-bs-target="#showModal{{$order->id}}"
                                                type="button" class="btn btn-outline-warning  btn-sm">
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
                                            <button data-bs-toggle="modal" data-bs-target="#payModal{{$order->id}}"
                                                    type="button" class="btn btn-outline-danger   btn-sm">
                                                    To'lanmadi
                                            </button>
                                    @endif



                                </td>
                                <td>
                                    @if($order->is_active ==1)
                                        <button data-bs-toggle="modal" data-bs-target="#sentModal{{$order->id}}"
                                                type="button" class="btn btn-success  btn-sm">
                                        <span class="badge bg-success">Yangi</span>
                                        </button>

                                    @endif
                                    @if($order->is_active ==0)
                                        <span class="badge bg-primary">Yuborildi</span>
                                    @endif

                                </td>

                                <td>



{{--                                    <button data-bs-toggle="modal" data-bs-target="#sentModal{{$order->id}}"--}}
{{--                                            type="button" class="btn btn-info  btn-sm">--}}
{{--                                            <span class="btn-label">--}}
{{--                                                <i class="fa fa-plane"></i>--}}
{{--                                            </span>--}}
{{--                                    </button>--}}


                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$order->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                            <span class="btn-label">
                                                <i class="bx bx-trash"></i>
                                            </span>
                                    </button>




                                    {{-- pay  Modals--}}
                                    <div class="modal fade" id="payModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham ushbu kitobga to`lov qilindimi?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>


                                                <form action="{{route('admin.pay',$order->id)}}"
                                                      method="get">

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Yo'q
                                                        </button>
                                                        <button type="submit" class="btn btn-success">Ha</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    {{-- sent  Modals--}}
                                    <div class="modal fade" id="sentModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham ushbu kitobni mijozga jo'natilsinmi?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>


                                                <form action="{{route('admin.sent',$order->id)}}"
                                                      method="get">

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Yo'q
                                                        </button>
                                                        <button type="submit" class="btn btn-success">Ha</button>
                                                    </div>
                                                </form>

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



