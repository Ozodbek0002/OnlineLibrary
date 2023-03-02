@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <div class="row">

                    <div class="col-10"><h1 class="card-title">Kitoblar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.books.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Kitob qo'shish
                        </a>
                    </div>

                </div>

                <hr>

                <div class="card-body">

                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Nomi</th>
                            <th class="" scope="col"> Rasmi</th>
                            <th class="" scope="col"> Kategoriya</th>
                            <th class="" scope="col"> Soni</th>
                            <th class="" scope="col"> Sotildi</th>
                            <th class="" scope="col"> Ijarada</th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($books as $ind=>$book)
                            <tr>
                                <td class="col-1">{{($books->currentpage()-1)*($books->perpage())+$ind+1}}</td>
                                <td>{{ $book->title  }}</td>
                                <td>
                                    <img src="{{asset('books/'.$book->image)}}" alt="" width="100px" height="100px">
                                </td>
                                <td>{{ $book->category->name }}</td>
                                <td>{{ $book->count }}</td>
                                <td>{{ $book->sell_count() }}</td>
                                <td>{{ $book->rent_count() }}</td>
                                <td class="col-2">

                                    <button data-bs-toggle="modal" data-bs-target="#showModal{{$book->id}}"
                                            type="button" class="btn btn-success  btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                    </button>
                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$book->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                            <span class="btn-label">
                                                <i class="bx bx-trash"></i>
                                            </span>
                                    </button>
                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('admin.books.edit',$book->id) }}">
                                            <span class="btn-label">
                                                <i class="bx bx-pen"></i>
                                            </span>
                                    </a>


                                    {{-- Show  Modals--}}
                                    <div class="modal fade" id="showModal{{$book->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="" scope="col">Muallifi</th>
                                                        <th class="" scope="col"> Muqova</th>
                                                        <th class="" scope="col"> Narxi</th>
                                                        <th class="" scope="col"> Kunlik</th>
                                                        <th class="" scope="col"> Beti</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $book->author }}</td>
                                                        <td>{{ $book->cover->name }}</td>
                                                        <td>{{ $book->price }}</td>
                                                        <td>{{ $book->price_daily }}</td>
                                                        <td>{{ $book->page }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                {{--                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>--}}
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$book->id}}" tabindex="-1"
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

                                                <form action="{{route('admin.books.destroy',$book->id)}}" method="post">
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

