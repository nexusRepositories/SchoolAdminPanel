@extends('layouts.app')

@section('main-content')
    @if (session('status'))
        <div class="alert alert-success px-10 d-flex justify-content-between" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0">
            <div class="card-title m-0">
                <h3 class="text-gray-700 fw-bolder m-0">Account Settings</h3>
            </div>
        </div>
        <div id="kt_account_signin_method" class="collapse show" style="">
            <div class="card-body border-top p-9">

                {{-- CHANGE EMAIL --}}
                <div class="d-flex flex-wrap align-items-center">
                    <div id="kt_signin_email" class="@if ($errors->hasBag('changeEmailErrors')) d-none @endif">
                        <div class="fs-6 fw-bolder mb-1">Email</div>
                        <div class="fw-bold text-gray-600">{{ $user->email }}</div>
                    </div>
                    <div id="kt_signin_email_edit" class="flex-row-fluid @if (!$errors->hasBag('changeEmailErrors')) d-none @endif">
                        <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('change_email') }}">
                            @csrf
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter new Email</label>
                                        <input  type="email" 
                                                class="form-control form-control-lg form-control-solid @if ($errors->changeEmailErrors->has('emailaddress')) is-invalid border-danger @endif" 
                                                id="emailaddress" 
                                                placeholder="Email Address" 
                                                name="emailaddress" 
                                                value="{{ $user->email }}">
                                        @if($errors->changeEmailErrors->has('emailaddress'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="emailaddress" data-validator="notEmpty">
                                                    {{ $errors->changeEmailErrors->first('emailaddress') }}
                                                </div>
                                            </div>
                                        @endif
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
                                        <input  type="password" 
                                                class="form-control form-control-lg form-control-solid @if ($errors->changeEmailErrors->has('confirmemailpassword')) is-invalid border-danger @endif" 
                                                name="confirmemailpassword" 
                                                id="confirmemailpassword"
                                                placeholder="Your password">
                                        @if($errors->changeEmailErrors->has('confirmemailpassword'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="confirmemailpassword" data-validator="notEmpty">
                                                    {{ $errors->changeEmailErrors->first('confirmemailpassword') }}
                                                </div>
                                            </div>
                                        @endif
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary me-2 px-6">Update Email</button>
                                <button id="kt_signin_cancel" type="reset" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        <div></div>
                        </form>
                    </div>
                    <div id="kt_signin_email_button" class="ms-auto @if ($errors->hasBag('changeEmailErrors')) d-none @endif">
                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                    </div>
                </div>

                <div class="separator separator-dashed my-6"></div>

                {{-- CHANGE PASSWORD --}}
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <div id="kt_signin_password" class="@if ($errors->hasBag('changePasswordErrors')) d-none @endif">
                        <div class="fs-6 fw-bolder mb-1">Password</div>
                        <div class="fw-bold text-gray-600">************</div>
                    </div>
                    <div id="kt_signin_password_edit" class="flex-row-fluid @if (!$errors->hasBag('changePasswordErrors')) d-none @endif">
                        <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('change_password') }}">
                            @csrf
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current password</label>
                                        <input  id="currentpassword"
                                                type="password" 
                                                name="currentpassword" 
                                                class="form-control form-control-lg form-control-solid @if ($errors->changePasswordErrors->first('currentpassword')) border-danger is-invalid @endif">
                                        @if($errors->changePasswordErrors->has('currentpassword'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="currentpassword" data-validator="notEmpty">
                                                    {{ $errors->changePasswordErrors->first('currentpassword') }}
                                                </div>
                                            </div>
                                        @endif
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New password</label>
                                        <input  id="newpassword" 
                                                type="password" 
                                                name="newpassword" 
                                                class="form-control form-control-lg form-control-solid @if ($errors->changePasswordErrors->first('newpassword')) border-danger is-invalid @endif">
                                        @if($errors->changePasswordErrors->has('newpassword'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="newpassword" data-validator="notEmpty">
                                                    {{ $errors->changePasswordErrors->first('newpassword') }}
                                                </div>
                                            </div>
                                        @endif
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="newpassword_confirmation" class="form-label fs-6 fw-bolder mb-3">Confirm new password</label>
                                        <input id="newpassword_confirmation" 
                                                type="password" 
                                                name="newpassword_confirmation"
                                                class="form-control form-control-lg form-control-solid @if ($errors->changePasswordErrors->first('newpassword_confirmation')) border-danger is-invalid @endif">
                                        @if($errors->changePasswordErrors->has('newpassword_confirmation'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="newpassword_confirmation" data-validator="notEmpty">
                                                    {{ $errors->changePasswordErrors->first('newpassword_confirmation') }}
                                                </div>
                                            </div>
                                        @endif
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                            </div>
                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary me-2 px-6">Update password</button>
                                <button type="reset" id="kt_password_cancel"  class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        <div></div></form>
                    </div>
                    <div id="kt_signin_password_button" class="ms-auto @if ($errors->hasBag('changePasswordErrors')) d-none @endif">
                        <button class="btn btn-light btn-active-light-primary">Reset password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection