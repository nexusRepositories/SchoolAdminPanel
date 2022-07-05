@extends('layouts.guest')

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/14.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="{{ route('password.request') }}" class="mb-8">
                    <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" class="w-80px">
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" 
                          method="post"
                          action="{{ route('password.email') }}"
                          required>
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Forgot Password ?</h1>
                            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                        </div>
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                            <input class="form-control form-control-solid" 
                                   type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   autofocus
                                   autocomplete="off">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                                <span class="indicator-label">Submit</span>
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
                        </div>
                    <div></div></form>
                </div>
            </div>
        </div>
</div>
@endsection