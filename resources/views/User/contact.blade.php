@extends('User.main.master')

@section('content')

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Aloqa </h4>
                        <h2>Biz bilan bog'laning</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="find-us">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Bizning manzilimiz</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d687.2168046237291!2d60.935862269602794!3d41.54673900190805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDMyJzQ4LjMiTiA2MMKwNTYnMTEuNCJF!5e1!3m2!1sen!2s!4v1695985763196!5m2!1sen!2s"
                            width="100%" height="330px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Biz haqimizda</h4>
                        <p>
                            Biz sizga eng yaxshi kitoblarni taklif qilamiz. Bizning kitoblarni o'zingizga moslashtirib,
                            sizga kerakli kitoblarni tanlang. Bizning kitoblarni sizga eng yaxshi narxga sotib
                            olishingiz mumkin.
                        </p>
                        <ul class="social-icons">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
{{--                            <li><a href="https://t.me/Zafarbek193"><i class="fa fa-phone"></i></a></li>--}}
                            <li><a href="tel:+998933636191"><i class="fa fa-phone"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2> Xabar yuborish </h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{route('message')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                               placeholder="Ismingiz" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               placeholder="E-Mail manzil" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="mavzu" type="text" class="form-control" id="mavzu"
                                               placeholder="mavzu" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="matn" rows="6" class="form-control" id="matn"
                                                  placeholder="Xabaringiz" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Yuborish</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection



