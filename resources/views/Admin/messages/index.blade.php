@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <hr>
                <div class="card-body">

                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Mavzusi</th>
                            <th class="" scope="col"> Muallifi</th>
                            <th class="" scope="col"> Holat</th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($messages as $ind=>$message)
                            <tr>
                                <td class="col-1">{{($messages->currentpage()-1)*($messages->perpage())+$ind+1}}</td>
                                <td>{{ $message->mavzu  }}</td>
                                <td>{{ $message->name }}</td>
                                <td>
                                    @if($message->status=='new')
                                        <button data-bs-toggle="modal" data-bs-target="#readModal{{$message->id}}"
                                                type="button" class="btn btn-outline-success  btn-sm">
                                            Yangi
                                        </button>

                                    @else
                                        <span class="badge bg-danger">O`qilgan</span>
                                    @endif
                                </td>
                                <td class="col-2">

                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#showModal{{$message->id}}">
                                        <span class="btn-label">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$message->id}}">
                                        <span class="btn-label">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </button>


                            {{-- read  Modals--}}
                            <div class="modal fade" id="readModal{{$message->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Haqiqatdan ham ushbu xabarni oqidingizmi? </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>


                                                <form action="{{route('admin.messages.show',$message->id)}}"
                                                      method="get">

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Yo'q
                                                        </button>
                                                        <button type="submit" class="btn btn-success">Ha</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                            {{-- Show  Modals--}}
                            <div class="modal fade" id="showModal{{$message->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        {{ $message->matn }}
                                    </div>
                                </div>
                            </div>

                            {{-- Delete  Modals--}}
                            <div class="modal fade" id="deleteModal{{$message->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                ushbu xabarni
                                                o'chirib tashlamoqchimisiz ?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>

                                        <form action="{{route('admin.messages.destroy',$message->id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Yopish
                                                </button>
                                                <button type="submit" class="btn btn-danger">O'chirish</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                                </td>
                            </tr>


                        @endforeach

                        </tbody>

                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($messages->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $messages->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection







