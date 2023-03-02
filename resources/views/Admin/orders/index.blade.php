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
                            <th class="" scope="col"> Kitob </th>
                            <th class="" scope="col"> Mijoz </th>
                            <th class="" scope="col"> Telefon </th>
                            <th class="" scope="col"> Soni</th>
                            <th class="" scope="col"> Holati </th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $ind=>$order)
                            <tr>
                                <td class="col-1">{{($orders->currentpage()-1)*($orders->perpage())+$ind+1}}</td>
                                <td>{{ $order->book->title }}</td>
                                <td>{{ $order->user_name }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->busy->name }}</td>
                                <td>{{ $order->busy->name }}</td>

                                <td class="col-2">

                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$order->id}}" type="button" class="btn btn-danger  btn-sm">
                                            <span class="btn-label">
                                                <i class="bx bx-trash"></i>
                                            </span>
                                    </button>



{{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$order->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham ushbu xaridni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.clients.destroy',$order->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
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



