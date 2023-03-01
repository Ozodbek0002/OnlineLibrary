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
                        <h4>Looking for the best products?</h4>
                        <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This
                                template</a> is free to use for your business websites. However, you have no permission
                            to redistribute the downloadable ZIP file on any template collection website. <a
                                rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                        <ul class="featured-list">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur an adipisicing elit</a></li>
                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                            <li><a href="#">Corporis, omnis doloremque</a></li>
                            <li><a href="#">Non cum id reprehenderit</a></li>
                        </ul>
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
