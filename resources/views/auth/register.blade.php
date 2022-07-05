@extends('layouts.guest')

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                {{-- LOGO --}}
                <a href="{{ route('login') }}" class="mb-8">
                    <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" class="w-80px">
                </a>
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form method="POST" action="{{ route('register') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" id="kt_sign_up_form">
                        @csrf
                        {{-- LINK TO LOGIN PAGE --}}
                        <div class="mb-10 text-center">
                            <h1 class="text-dark mb-3">Create an Account</h1>
                            <div class="text-gray-400 fw-bold fs-4">
                                Already registered? 
                                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                            </div>
                        </div>
                        {{-- SIGN IN WITH GOOGLE --}}
                        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-5">
                            <svg class="h-20px me-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M27.9851 14.2618C27.9851 13.1146 27.8899 12.2775 27.6837 11.4094H14.2788V16.5871H22.1472C21.9886 17.8738 21.132 19.8116 19.2283 21.1137L19.2016 21.287L23.44 24.4956L23.7336 24.5242C26.4304 22.0904 27.9851 18.5093 27.9851 14.2618Z" fill="#4285F4"/>
                                <path d="M14.279 27.904C18.1338 27.904 21.37 26.6637 23.7338 24.5245L19.2285 21.114C18.0228 21.9356 16.4047 22.5092 14.279 22.5092C10.5034 22.5092 7.29894 20.0754 6.15663 16.7114L5.9892 16.7253L1.58205 20.0583L1.52441 20.2149C3.87224 24.7725 8.69486 27.904 14.279 27.904Z" fill="#34A853"/>
                                <path d="M6.15656 16.7113C5.85516 15.8432 5.68072 14.913 5.68072 13.9519C5.68072 12.9907 5.85516 12.0606 6.14071 11.1925L6.13272 11.0076L1.67035 7.62109L1.52435 7.68896C0.556704 9.58024 0.00146484 11.7041 0.00146484 13.9519C0.00146484 16.1997 0.556704 18.3234 1.52435 20.2147L6.15656 16.7113Z" fill="#FBBC05"/>
                                <path d="M14.279 5.3947C16.9599 5.3947 18.7683 6.52635 19.7995 7.47204L23.8289 3.6275C21.3542 1.37969 18.1338 0 14.279 0C8.69485 0 3.87223 3.1314 1.52441 7.68899L6.14077 11.1925C7.29893 7.82856 10.5034 5.3947 14.279 5.3947Z" fill="#EB4335"/>
                            </svg>
                            Sign in with Google
                        </button>
                        {{-- SIGN IN WITH FACEBOOK --}}
                        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                            <svg class="h-20px me-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.5 0H2.5C1.12125 0 0 1.12125 0 2.5V17.5C0 18.8787 1.12125 20 2.5 20H17.5C18.8787 20 20 18.8787 20 17.5V2.5C20 1.12125 18.8787 0 17.5 0Z" fill="#1976D2"/>
                                <path d="M16.875 10H13.75V7.5C13.75 6.81 14.31 6.875 15 6.875H16.25V3.75H13.75C11.6788 3.75 10 5.42875 10 7.5V10H7.5V13.125H10V20H13.75V13.125H15.625L16.875 10Z" fill="#FAFAFA"/>
                            </svg>
                            Sign in with Facebook
                        </button>
                        {{-- SEPARATOR --}}
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        {{-- NAME BLOCK --}}
                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                <input class="form-control form-control-lg form-control-solid @error('first_name') border-danger @enderror" 
                                       type="text" 
                                       name="first_name" 
                                       placeholder="Enter first name" 
                                       autocomplete="off"
                                       value="{{ old('first_name') }}"
                                       required>
                                @error('first_name')
                                    <span>
                                        <span class="m-0 mx-4 text-danger">
                                            {{ $message }}
                                        </span>
                                    </span>
                                @enderror
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                <input class="form-control form-control-lg form-control-solid @error('last_name') border-danger @enderror" 
                                       type="text" 
                                       name="last_name" 
                                       placeholder="Enter last name" 
                                       autocomplete="off"
                                       value="{{ old('last_name') }}"
                                       required>
                                @error('last_name')
                                    <span>
                                        <span class="m-0 mx-4 text-danger">
                                            {{ $message }}
                                        </span>
                                    </span>
                                @enderror
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        {{-- EMAIL --}}
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input class="form-control form-control-lg form-control-solid @error('email') border-danger @enderror" 
                                   type="email" 
                                   name="email" 
                                   placeholder="Enter your email" 
                                   autocomplete="off"
                                   value="{{ old('email') }}"
                                   required>
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
                        <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                            <div class="mb-1">
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid @error('password') border-danger @enderror" 
                                           type="password" 
                                           name="password" 
                                           placeholder="Enter password" 
                                           autocomplete="off">
                                    @error('password')
                                        <span>
                                            <span class="m-0 mx-4 text-danger">
                                                {{ $message }}
                                            </span>
                                        </span>
                                    @enderror
                                    {{-- EYE --}}
                                    <span class="btn btn-sm btn-icon position-absolute" data-kt-password-meter-control="visibility" style="top: 6px; right: 10px">
                                        <i class="fs-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                            </svg>
                                        </i>
                                        <i class="fs-2 d-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        {{-- CONFIRM PASSWORD --}}
                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                            <input class="form-control form-control-lg form-control-solid @error('password_confirmation') border-danger @enderror" 
                                   type="password" 
                                   name="password_confirmation" 
                                   placeholder="Confirm passsword" 
                                   autocomplete="off"
                                   required>
                            @error('password_confirmation')
                                <span>
                                    <span class="m-0 mx-4 text-danger">
                                        {{ $message }}
                                    </span>
                                </span>
                            @enderror
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        {{-- SUBMIT BUTTON --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                        <div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
