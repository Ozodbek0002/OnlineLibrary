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
                        <p>Muallif: <b style="font-size: 20px;">{{$book->author}}</b> </p>
                        <p>Jild: <b style="font-size: 20px;">{{$book->cover->name}}</b> </p>
                        <p>Varaq: <b style="font-size: 20px;">{{$book->page}}</b> </p>
                        <p>Muallif: <b style="font-size: 20px;">{{$book->author}}</b> </p>

                        <a href="about.html" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('user/assets/images/feature-image.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
