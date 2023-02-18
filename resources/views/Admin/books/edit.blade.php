@extends('Admin.master')
@section('content')

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kitob tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    <form action="{{route('admin.books.update',$book->id)}}" method="POST" accept-charset="UTF-8" nctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title"> Kitob nomi </label>
                            <input type="text" id="title" name="title" value="{{$book->title}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label  for="author"> Muallif nomi</label>
                            <input type="text" name="author" value="{{$book->author}}" class="form-control " id="author">
                        </div>

                        <div class="form-group">
                            <label for=""> Kategoriyasi </label>
                            <select  name="category" id="like_to" class="form-control">
                                <option value="{{$book->category}}" style="color: blue">
                                    {{ $book->category->name }}
                                </option>
                                @foreach($categories as $c)
                                    @if($book->category->name != $c->name)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Sirti </label>
                            <select  name="category" id="like_to" class="form-control">
                                <option value="{{$book->cover->id}}" style="color: blue">
                                    {{ $book->cover->name }}
                                </option>
                                @foreach($covers as $c)
                                    @if($book->category->name != $c->name)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text text-primary" for="image"> Rasm yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label  for="author"> Narxi </label>
                            <input type="number" name="author" value="{{$book->price}}" class="form-control " id="author">
                        </div>

                        <div class="form-group">
                            <label  for="author"> Kunlik narxi </label>
                            <input type="number" name="author" value="{{$book->price_daily}}" class="form-control " id="author">
                        </div>

                        <div class="form-group">
                            <label  for="author"> Sahifasi </label>
                            <input type="number" name="author" value="{{$book->page}}" class="form-control " id="author">
                        </div>

                        <div class="form-group">
                            <label  for="author"> Soni </label>
                            <input type="number" name="author" value="{{$book->count}}" class="form-control " id="author">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection




