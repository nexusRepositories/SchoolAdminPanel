@extends('layouts.guest')

@section('main-content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/14.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="" class="mb-8">
                    <img alt="Logo" src="{{ asset('assets/logo-big.png') }}" class="w-80px">
                </a>
                <div class="w-lg-550px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" 
                          method="post"
                          action="{{  route('password.confirm') }}"
                          novalidate="novalidate" 
                          id="kt_new_password_form">
                        @csrf
                        {{-- CAPTION --}}
                        <div class="text-center mb-0">
                            <h1 class="text-dark mb-3">Confirm Password</h1>
                            <div class="text-gray-400 fw-bold fs-4">This is a secure area of the application. Please confirm your password before continuing. 
                        </div>
                        {{-- PASSWORD --}}
                        <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                            <div class="mb-1">
                                <div class="position-relative mb-5 mt-5">
                                    <input class="form-control form-control-lg form-control-solid @error('password') border-danger @enderror" 
                                           type="password" 
                                           name="password" 
                                           placeholder="Enter new password" 
                                           autocomplete="off"
                                           required>
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
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            {{-- SUBMIT BUTTON --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary fw-bolder">
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