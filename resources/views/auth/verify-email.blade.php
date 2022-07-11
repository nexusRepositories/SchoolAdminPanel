@extends('layouts.guest')

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="{{ route('verification.notice') }}" class="mb-8">
                    <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" class="w-80px">
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form method="POST" action="{{ route('verification.send') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Verify your email</h1>
                        </div>
                        <div class="mb-10 text-center">
                            <div class="text-gray-400 fw-bold fs-4">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</div>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-10">
                                <span class="indicator-label">Resend verification email</span>
                            </button>
                        </div>
                        <div></div>
                    </form>
                    <form class="menu-item px-5" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class=" btn btn-block menu-white-800 menu-link px-5 border-0 w-100 justify-content-center">Sign Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection