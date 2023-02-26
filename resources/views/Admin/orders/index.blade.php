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
                                    <form action="{{ route('admin.orders.destroy',$poet->id) }}" method="POST"
                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');">

                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.orders.edit',$poet->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>

                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </button>
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



