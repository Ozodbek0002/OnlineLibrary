@extends('User.main.master')

@section('content')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Biz haqimizda</h4>
{{--                        <h2>our company</h2>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2> Bizning maqsadimiz </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="user/assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4> Bu sayt nima uchun yaratildi?  </h4>
                        <p>
                            Bismillahi rohmani rohim avvalo ilim olish har bir musulmon uchun farz bo'lgan amal.
                            Ko'p insonlarni kitob o'qib ilim olishi va shu ilmini yaxshi amallar ila birga qo'llashi va 2 dunyoda halovatga erishishini Allohdan umid qilgan holda
                            shu ishga qo'l urdik. Bu sayt orqali uydan chiqmasdan hohlagan kitobingizni buyurtma qilishingiz va hattoki
                            ijaraga olishingiz ha mumkin shuning bilan birga bizning yetkazib berish hizmati orqali sizga kerakli kitobni
                            yetkazib beramiz.
                        </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Biznign jamoa</h2>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img style="width: 100%; height: 350px" src="{{asset('user/assets/images/Iam.jpg')}}" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Johnny William</h4>
                            <span>CO-Founder</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Product Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                            <a href="#" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Customer Relations</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                            <a href="#" class="filled-button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Global Collection</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                            <a href="#" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Sevimli Hamkorlar</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel">
                        <div class="client-item">
                            <img src="user/assets/images/hilol.png" alt="1">
                        </div>

                        <div class="client-item">
                            <img src="user/assets/images/client-01.png" alt="2">
                        </div>

                        <div class="client-item">
                            <img src="user/assets/images/client-01.png" alt="3">
                        </div>

                        <div class="client-item">
                            <img src="user/assets/images/client-01.png" alt="4">
                        </div>

                        <div class="client-item">
                            <img src="user/assets/images/client-01.png" alt="5">
                        </div>

                        <div class="client-item">
                            <img src="user/assets/images/client-01.png" alt="6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

