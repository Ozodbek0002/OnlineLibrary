
@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Kitoblar </h1></div>
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
                            <th class="" scope="col"> Nomi </th>
                            <th class="" scope="col"> Muallif </th>
                            <th class="" scope="col"> Kategoriya </th>
                            <th class="" scope="col"> Muqova </th>
                            <th class="" scope="col"> Narxi </th>
                            <th class="" scope="col"> Kunlik  </th>
                            <th class="" scope="col"> Beti </th>
                            <th class="" scope="col"> Soni </th>
                            <th class="" scope="col"> Sotildi </th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($books as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($books->currentpage()-1)*($books->perpage())+$ind+1}}</td>
                                <td>{!! $poet->title  !!}</td>
                                <td>{!! $poet->author !!}</td>
                               <td>{!! $poet->category->name !!}</td>
                               <td>{!! $poet->cover->name !!}</td>
                                <td>{!! $poet->price !!}</td>
                                <td>{!! $poet->price_daily !!}</td>
                                <td>{!! $poet->page !!}</td>
                                <td>{!! $poet->count !!}</td>
                                <td>{!! $poet->sell_count !!}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.books.destroy',$poet->id) }}" method="POST"
                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');">

                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.books.edit',$poet->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>
                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>

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
