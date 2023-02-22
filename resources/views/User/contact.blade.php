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
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Biz haqimizda</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                            consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic
                            elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
@if(session()->has('success'))

    <script>
        swal({
            icon: 'success',
            text: 'Muvaffaqqiyatli bajarildi',
            confirmButtonText: 'Continue',
        })
    </script>

@endif


