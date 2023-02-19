@extends('Admin.master')
@section('content')




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
