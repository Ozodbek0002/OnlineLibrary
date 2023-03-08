@extends('Admin.master')
@section('content')


    <div class="row">

        <div class="col-lg-8 mb-4 order-0">

            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Assalomu Alaykum {{ Auth()->user()->name }}</h5>
                            <p class="mb-4">
                                Hozircha <span class="fw-bold"></span> o'sish yaxshi
                            </p>

                            {{--                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>--}}
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="../assets/img/illustrations/man-with-laptop-light.png"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{asset('assets/img/icons/unicons/chart-success.png')}}"
                                        alt="chart success" class="rounded"/>
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1"> Sotilgan kitoblar soni </span>
                            <h3 class="card-title mb-2"> {{ $sell_books_count }}   </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{ asset('/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                        class="rounded"/>
                                </div>
                            </div>
                            <span>O'qilayotgan kitoblar soni</span>
                            <h3 class="card-title text-nowrap mb-1"> {{ $reading_books_count }} </h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3"> Umumiy sotuv </h5>
                        <div id="totalRevenueChart" class="px-2">
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>


        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">

            <div class="row">

                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('/assets/img/icons/unicons/paypal.png')}}" alt="Credit Card"
                                         class="rounded"/>
                                </div>

                            </div>
                            <span class="d-block mb-1">Kitob turlari</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $books_count }} ta</h3>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('/assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card"
                                         class="rounded"/>
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1"> Foyda (sum)</span>
                            <h3 class="card-title mb-2">{{  number_format( $books_price, 0, ',', ' ') }}</h3>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Umumiy kitoblar soni </h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h3 class="mb-0"> {{ $all_books_count }} ta</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection

@section('script')
    <script >
        var months = @json($months) ;
        var rent_monthly = @json($rent_monthly) ;
        var sell_monthly = @json($sell_monthly) ;





    </script>
@endsection
