@extends('User.main.master')
@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Halollik Foydadan ustun </h4>
                        <h2> Iqro Books </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{$book->title}}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>Muallif:  <b style="font-size: 20px;">{{$book->author}}</b> </p>
                        <p>Jild:  <b style="font-size: 20px;">{{$book->cover->name}}</b> </p>
                        <p>Varaq:  <b style="font-size: 20px;">{{$book->page}}</b>  bet</p>
                        <p>Narxi:  <b style="font-size: 20px;">{{$book->price}}</b>  so`m</p>
                        <p>Ijara narxi (kun):  <b style="font-size: 20px;">{{$book->price_daily}}</b>  so`m</p>


                    </div>
                    <div class="down-content d-flex justify-content-around">
                        <div>
                            <a href="{{route('sell',$book->id)}}" type="button" class="btn btn-success"> Sotib olish </a>
                        </div>
                        <div>
                            <a href="{{route('rent',$book->id)}}" type="button" class="btn btn-warning"> Ijaraga olish </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img style="width: 100%; height: 250px" src="books/{{$book->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
