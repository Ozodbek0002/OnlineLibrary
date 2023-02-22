
@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Xabarlar</h4>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col"> Mavzusi</th>
                            <th class="" scope="col"> Matni</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{!! $message->mavzu  !!}</td>
                                <td>{{$message->matn}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
