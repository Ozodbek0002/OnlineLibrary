@extends('User.main.master')
@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Yangi Kitoblar </h4>
                        <h2> More Books </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*"> Barcha Kitoblar</li>
                            <li data-filter=".des">Featured</li>
                            <li data-filter=".dev">Flash Deals</li>
                            <li data-filter=".gra">Last Minute</li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">

                            @foreach($books as $book )

                                <div class="col-lg-4 col-md-4 all des">
                                    <div class="product-item">
                                        <a href="#"><img style="width: 100%; height: 250px" src="books/{{$book->image}}"
                                                         alt=""></a>
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
