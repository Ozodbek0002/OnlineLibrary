@extends('User.main.master')

@section('content')

    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Eng yaxshi taklif</h4>
                    <h2>Yangi kelganlar sotuvda</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Halol takliflar</h4>
                    <h2>Eng sara kitoblarni oling</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Mahsus imkoniyat</h4>
                    <h2>Hattoki ijaraga ham olishingiz mumkin</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->


    <div class="latest-products">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Yangi kitoblar</h2>
                        <a href="{{route('products')}}">Barcha kitoblarni ko'rish<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                @foreach($books as $book )
                    <div class="col-md-4">
                        <div class="product-item">
                            <a  href="{{route('product',$book->id)}}" > <img style="width: 100%; height: 250px" src="books/{{$book->image}}" alt=""></a>
                            <div class="down-content">
                                <a  href="{{route('product',$book->id)}}"><h4>{{$book->title}}</h4></a>
                                <h6>{{ number_format( $book->price, 0, ',', ' ') }} so'm</h6>
                                <p> {{$book->author}} </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Sotildi ({{$book->sell_count()}})</span>
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

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Bizning qulayliklarimiz</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Siz sifatli va hamyonbob kitoblarni qidiryapsizmi?</h4>
                        <p>
                            Biz sizga eng yaxshi kitoblarni taklif qilamiz. Bizning kitoblarni o'zingizga moslashtirib, sizga
                            kerakli kitoblarni tanlang. Bizning kitoblarni sizga eng yaxshi narxga sotib olishingiz mumkin.
                        </p>
                        <ul class="featured-list">
                            <li><a href="#"> Halollik foydadan ustun</a></li>
                            <li><a href="#">Sifat & hamyonbob</a></li>
                            <li><a href="#">Tez & Ishonchli </a></li>
                            <li><a href="#"> Yetkazib berish hizmati </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('user/assets/images/books.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--    <div class="call-to-action">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="inner-content">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-8">--}}
    {{--                                <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4">--}}
    {{--                                <a href="#" class="filled-button">Purchase Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
