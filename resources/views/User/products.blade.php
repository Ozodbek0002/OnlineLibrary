@extends('User.main.master')
@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Barcha Kitoblar </h4>
                        <h2> Do'stlik Books </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form class="form-inline" style="float: right; padding: 10px;" action="{{route('search')}}" method="post">
        @csrf

        <input class="form-control" type="search" name="search" placeholder="Qaysi kitobni qidirayapsiz?...">

        <div></div>

        <button style="background-color: #009900; margin: 10px;" type="submit" value="search" class="btn btn-success">
            Qidir
        </button>

    </form>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*"> Barcha Kitoblar</li>
                            @foreach($catigories as $c )
                                <li data-filter=".{{$c->name}}">{{$c->name}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">

                            @foreach($books as $book )

                                <div class="col-lg-4 col-md-4 all {{$book->category->name}}">
                                    <div class="product-item">
                                        <a  href="{{route('product',$book->id)}}"><img style="width: 100%; height: 250px" src="books/{{$book->image}}"
                                                         alt=""></a>
                                        <br>
                                        <h6 style=" margin-left: 230px;">{{ number_format( $book->price, 0, ',', ' ') }} so'm</h6>
                                        <div class="down-content">
{{--                                            <a  href="{{route('product',$book->id)}}" ><h4>{{substr($book->title,0,17)}}...</h4></a>--}}
                                            <a href="{{route('product',$book->id)}}"><h4>{{$book->title}}</h4></a>
                                            <p> {{$book->author}} </p>
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span> Sotildi ({{ $book->sell_count() }})</span>

                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a style="margin: 10px;" href="{{route('product',$book->id)}}" type="button"
                                               class="btn btn-outline-success"> Ko`rish </a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>


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

@endsection
