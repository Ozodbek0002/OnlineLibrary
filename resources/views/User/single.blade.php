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
                            <button  id="myBtn" type="button" class="btn btn-success"> Sotib olish </button>
                        </div>
                        <div>
                            <a href="#"  type="button" class="btn btn-warning"> Ijaraga olish </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img style="width: 300px; height: 400px" src="{{asset('books/'.$book->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form">

            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-right">
                                        <h2> Qo'shish </h2>
                                    </div>
                                    <div class="pull-left">
                                        <a class="btn btn-primary" href="#"> Orqaga </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('order',$book->id)}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Kitob:</strong>
                                            <input type="text" name="size" class="form-control mb-3" placeholder="Size">
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

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close");


        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
            console.log('hello')
        }


        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
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


