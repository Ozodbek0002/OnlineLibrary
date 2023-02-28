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

                        @foreach($books as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($books->currentpage()-1)*($books->perpage())+$ind+1}}</td>
                                <td>{!! $poet->book->title !!}</td>
                                <td>{!! $poet->user_name  !!}</td>
                                <td>{!! $poet->phone  !!}</td>
                                <td>{!! $poet->count !!}</td>
                                <td>{!! $poet->busy->name  !!}</td>
                                <td class="col-2">

                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('admin.orders.edit',$poet->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>

                                    </a>

{{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$poet->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham ushbu mavzuni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.orders.destroy',$poet->id)}}" method="post">
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

                            @if ($books->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $books->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>



@endsection



