@extends('layouts.guest')

<title>
    @yield('title')
</title>

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <div class="d-flex flex-row">
                    <a href="{{ route('home') }}" class="d-flex flex-column flex-start align-items-start me-10">
                        <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" style="width: 220px">
                    </a>
                    <div class="d-flex flex-column text-left mb-2 mt-7">
                        <h1 class="text-main-blue mb-3" style="font-size: 55px">
                            Error 
                            @yield('code')
                        </h1>
                        <div class="text-gray-400 fw-bold fs-4">
                            @yield('message')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
