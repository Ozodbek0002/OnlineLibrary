@extends('User.main.master')
@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Barcha Kitoblar </h4>
                        <h2> Iqro Books </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form class="form-inline" style="float: right; padding: 10px;" action="{{route('search')}}" method="post" >
        @csrf

        <input class="form-control" type="search" name="search" placeholder="Qaysi kitobni qidirayapsiz?..." >

        <div></div>

        <button style="background-color: #009900 margin: 10px;" type="submit" value="search" class="btn btn-success" > Qidir </button>

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
                                        <a href="#"><img style="width: 100%; height: 250px" src="books/{{$book->image}}" alt=""></a>
                                        <div class="down-content">
                                            <a href="#"><h4>{{$book->title}}</h4></a>
                                            <h6>{{$book->price}} so'm</h6>
                                            <p> {{$book->author}} </p>
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>Sotildi ({{$book->sell_count}})</span>
                                        </div>
                                        <div class="down-content d-flex justify-content-around">
                                            <div>
                                                <a href="{{route('buy',$book->id)}}" type="button" class="btn btn-outline-success"> Sotib olish </a>
                                            </div>
                                            <div>
                                                <a href="" type="button" class="btn btn-outline-warning"> Ijaraga olish </a>
                                            </div>
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
