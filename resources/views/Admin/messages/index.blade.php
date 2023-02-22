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

                        @foreach($messages as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($messages->currentpage()-1)*($messages->perpage())+$ind+1}}</td>
                                <td>{!! $poet->mavzu  !!}</td>
                                <td>{!! $poet->name !!}</td>
                                <td>
                                    @if($poet->status=='new')
                                        <button class="btn btn-success">
                                            Yangi
                                        </button>
                                    @else
                                        <button class="btn btn-danger">
                                            O`qilgan
                                        </button>
                                    @endif
                                </td>
                                <td class="col-2">
                                    <form  action="{{ route('admin.messages.destroy',$poet->id) }}" method="POST"
                                          {{--                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?')">--}}
                                           >
                                        <a class="btn btn-primary btn-sm"
                                           href="{{ route('admin.messages.show',$poet->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-eye"></i>
                                            </span>

                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <button id="show_confirm" type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </button>

                                    </form>

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

@section('script')



@endsection





