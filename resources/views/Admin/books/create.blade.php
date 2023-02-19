@extends('Admin.master')
@section('content')

    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Yagi kitob </h1></div>
                </div>

                <hr>

                <div class="card-body">

{{--                    @if(session()->has('message'))--}}
{{--                        <div class="alert alert-success">--}}
{{--                            {{ session()->get('message') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}


                    <form action="{{route('admin.books.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for=""> Kitob nomi</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="author">Muallif nomi</label>
                            <input type="text" id="author" class="form-control" name="author">
                            @error('author')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for=""> Kategoriyasi </label>
                            <select name="category_id" id="like_to" class="form-control">
                                @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group ">
                            <label for=""> Sirti </label>
                            <select name="cover_id" id="like_to" class="form-control">
                                @foreach($cover as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('cover_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label class="text text-primary" for="file"> Rasm yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="author">Narxi</label>
                            <input type="number" id="author" class="form-control" name="price">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="author">Kunlik narxi</label>
                            <input type="number" id="author" class="form-control" name="price_daily">
                            @error('price_daily')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="author">Sahifasi</label>
                            <input type="number" id="author" class="form-control" name="page">
                            @error('page')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="author">Soni</label>
                            <input type="number" id="author" class="form-control" name="count">
                            @error('count')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>


                </div>
            </div>
        </div>

    </div>


@endsection

@if(session('success'))

    <script>
        swal({
            icon: 'success',
            text: 'Muvaffaqqiyatli bajarildi',
            confirmButtonText: 'Continue',
        })
    </script>

@endif



