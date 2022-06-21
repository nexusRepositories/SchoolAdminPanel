@extends('layouts.guest')

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="{{ route('login') }}" class="mb-8">
                    <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" class="w-80px">
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form method="POST" action="{{ route('login') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" id="kt_sign_in_form">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Sign In</h1>
                            <div class="text-gray-400 fw-bold fs-4">New Here? 
                            <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a></div>
                        </div>
                        {{-- EMAIL --}}
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid @error('email') border-danger @enderror" 
                                   type="email" 
                                   name="email" 
                                   autocomplete="off" 
                                   required
                                   value="{{old('email')}}">
                            @error('email')
                                <span>
                                    <span class="m-0 mx-4 text-danger">
                                        {{ $message }}
                                    </span>
                                </span>
                            @enderror
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        {{-- PASSWORD --}}
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            </div>
                            <input class="form-control form-control-lg form-control-solid @error('password') border-danger @enderror" 
                                   type="password" 
                                   name="password" 
                                   autocomplete="off" 
                                   required>
                            @error('password')
                                <span>
                                    <span class="m-0 mx-4 text-danger">
                                        {{ $message }}
                                    </span>
                                </span>
                            @enderror
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        {{-- Remember me --}}
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="remember">
                                <span class="form-check-label fw-bold text-gray-700 fs-6">Remember me</span>
                            </label>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>


                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-10">
                                <span class="indicator-label">Continue</span>
                            </button>
                            {{-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> --}}
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <svg class="h-20px me-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M27.9851 14.2618C27.9851 13.1146 27.8899 12.2775 27.6837 11.4094H14.2788V16.5871H22.1472C21.9886 17.8738 21.132 19.8116 19.2283 21.1137L19.2016 21.287L23.44 24.4956L23.7336 24.5242C26.4304 22.0904 27.9851 18.5093 27.9851 14.2618Z" fill="#4285F4"/>
                                    <path d="M14.279 27.904C18.1338 27.904 21.37 26.6637 23.7338 24.5245L19.2285 21.114C18.0228 21.9356 16.4047 22.5092 14.279 22.5092C10.5034 22.5092 7.29894 20.0754 6.15663 16.7114L5.9892 16.7253L1.58205 20.0583L1.52441 20.2149C3.87224 24.7725 8.69486 27.904 14.279 27.904Z" fill="#34A853"/>
                                    <path d="M6.15656 16.7113C5.85516 15.8432 5.68072 14.913 5.68072 13.9519C5.68072 12.9907 5.85516 12.0606 6.14071 11.1925L6.13272 11.0076L1.67035 7.62109L1.52435 7.68896C0.556704 9.58024 0.00146484 11.7041 0.00146484 13.9519C0.00146484 16.1997 0.556704 18.3234 1.52435 20.2147L6.15656 16.7113Z" fill="#FBBC05"/>
                                    <path d="M14.279 5.3947C16.9599 5.3947 18.7683 6.52635 19.7995 7.47204L23.8289 3.6275C21.3542 1.37969 18.1338 0 14.279 0C8.69485 0 3.87223 3.1314 1.52441 7.68899L6.14077 11.1925C7.29893 7.82856 10.5034 5.3947 14.279 5.3947Z" fill="#EB4335"/>
                                </svg>
                                Continue with Google
                            </a>
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <svg class="h-20px me-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.5 0H2.5C1.12125 0 0 1.12125 0 2.5V17.5C0 18.8787 1.12125 20 2.5 20H17.5C18.8787 20 20 18.8787 20 17.5V2.5C20 1.12125 18.8787 0 17.5 0Z" fill="#1976D2"/>
                                    <path d="M16.875 10H13.75V7.5C13.75 6.81 14.31 6.875 15 6.875H16.25V3.75H13.75C11.6788 3.75 10 5.42875 10 7.5V10H7.5V13.125H10V20H13.75V13.125H15.625L16.875 10Z" fill="#FAFAFA"/>
                                </svg>
                                Continue with Facebook
                            </a>
                        </div>
                        <div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
