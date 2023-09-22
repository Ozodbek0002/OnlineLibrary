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
                    <div class="right-image">
                        <img id="img" style="width: 400px; height: 500px" src="{{asset('books/'.$book->image)}}" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="left-content">
                        <p><b class="b"> Muallif: </b> <i class="b"> {{$book->author}}</i></p>
                        <p><b class="b"> Jild: </b> <i class="b">{{$book->cover->name}} </i></p>
                        <p><b class="b"> Varaq: </b> <i class="b">{{$book->page}} bet </i></p>
                        <p><b class="b"> Narxi: </b> <i class="b">{{ number_format( $book->price, 0, ',', ' ')}}
                                so`m </i>
                        </p>
                        <p><b class="b"> Ijara narxi (kun): </b> <i
                                class="b">{{ number_format( $book->price_daily, 0, ',', ' ') }} so`m </i>
                        </p>
                        <p><b class="b"> Bizda bor: </b> <i class="b">{{$book->count}} ta </i></p>


                    </div>
                    <div class="down-content d-flex justify-content-around">
                        <div>
                            <button id="myBtn" type="button" class="btn btn-success"> Sotib olish</button>
                        </div>
                        <div>
                            <button id="myBtn1" type="button" class="btn btn-warning"> Ijaraga olish</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




    {{--  Sell  Modal--}}
    <div class="col-md-12">
        <div class="form">

            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span id="close" class="close">&times;</span>
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-right">
                                        <h2 class="info"> Ma'lumotlaringizni yozib qoldiring </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('order',2)}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Kitob:</b>
                                            <strong>{{$book->title}} </strong>
                                        </div>
                                    </div>

                                    <input type="hidden" name="book_id" class="form-control mb-3" value="{{$book->id}}">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Soni:</b>
                                            <label>
                                                <input min="1" type="number" name="count" class="form-control mb-3"
                                                       placeholder="Sonini yozing" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Ismingiz:</b>
                                            <input type="text" name="user_name" class="form-control mb-3"
                                                   placeholder="Ismingizni yozing" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Telefon raqamingiz: ( 90 123 45 67 )</b>
                                            <input type="text" name="phone" class="form-control mb-3"
                                                   placeholder="Telfon raqamingizni yozing" required>
                                        </div>
                                    </div>

                                    <div  id="saqla" class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" id="submit" class="btn btn-primary">Saqlash</button>
                                    </div>

                                     <div  id="loading" class="col-xs-12 col-sm-12 col-md-12 text-center  ">
                                         <img src="{{ asset('user/assets/images/loading.svg') }}" alt="">
                                    </div>


                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- The Modal -->

        </div>
    </div>


    {{--  rent  Modal--}}
    <div class="col-md-12">
        <div class="form">

            <div id="myModal1" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span id="close1" class="close">&times;</span>
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-right">
                                        <h2 class="info"> Ma'lumotlaringizni yozib qoldiring </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('order',1)}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Kitob:</b>
                                            <strong>{{$book->title}} </strong>
                                        </div>
                                    </div>

                                    <input type="hidden" name="book_id" class="form-control mb-3" value="{{$book->id}}">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Soni:</b>
                                            <input min="1" type="number" name="count" class="form-control mb-3"
                                                   placeholder="Sonini yozing" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Ismingiz:</b>
                                            <input type="text" name="user_name" class="form-control mb-3"
                                                   placeholder="Ismingizni yozing" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b style="color: red;">Telefon raqamingiz: ( 90 123 45 67 )</b>
                                            <input type="text" name="phone" class="form-control mb-3"
                                                   placeholder="Telfon raqamingizni yozing" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Saqlash</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- The Modal -->

        </div>
    </div>

@endsection

@section('script')

    <script>


        var modal = document.getElementById("myModal");
        var modal1 = document.getElementById("myModal1");

        var btn = document.getElementById("myBtn");
        var btn1 = document.getElementById("myBtn1");

        var span = document.getElementById("close");
        var spann = document.getElementById("submit");
        var span1 = document.getElementById("close1");

        var saqla = document.getElementById("saqla");
        var loading = document.getElementById("loading");


        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
            loading.style.display = "none";
        }
        btn1.onclick = function () {
            modal1.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        spann.onclick = function () {
            saqla.style.display = "none";
            loading.style.display = "block";
        }

        span1.onclick = function () {
            modal1.style.display = "none";
        }


        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


    </script>

@endsection


