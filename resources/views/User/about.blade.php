@extends('User.main.master')

@section('content')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Biz haqimizda</h4>
                        <h2> Do'stlik Books </h2>
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


{{--    <div class="team-members">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Biznign jamoa</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="team-member">--}}
{{--                        <div class="thumb-container">--}}
{{--                            <img style="width: 100%; height: 350px" src="{{asset('user/assets/images/Iam.jpg')}}" alt="">--}}
{{--                            <div class="hover-effect">--}}
{{--                                <div class="hover-content">--}}
{{--                                    <ul class="social-icons">--}}
{{--                                        <li><a href="http://ozodov.uz/" target="_blank"><i class="fa fa-web"></i></a></li>--}}
{{--                                        <li><a href="https://www.instagram.com/ozodbek_ozodov1" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                        <li>--}}
{{--                                            <a href="https://t.me/Ozodbek_Ozodov2" target="_blank" >--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">--}}
{{--                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>--}}
{{--                                                </svg>--}}

{{--                                            </a></li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4> Ozodov Ozodbek </h4>--}}
{{--                            <span> Dasturchi </span>--}}
{{--                            <p> 2 yillik tajriba va sizga ham shunday sayt kerak bo'lsa bemalol murojat qilishlariz mumkin. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




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

