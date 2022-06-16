@extends('layouts.app')

@section('main-content')
    {{-- SESSION MESSAGE --}}
    @if (session('status'))
        <div class="d-flex flex-column card bg-transparent">
            <div class="alert alert-success px-10 d-flex justify-content-between" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    {{-- FORM --}}
    <div id="kt_content_container" class="container-xxl">
        <form method="post" action="{{ route('profile_update', $user) }}" class="card mb-5 mb-xl-10" id="kt_profile_details_view" enctype="multipart/form-data">
            @csrf
            {{-- HEADER --}}
            <div class="card-header">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0 me-3">{{ $user->fullName() }}</h3>
                    <div class="d-flex flex-wrap fw-bold fs-6 m-0 pe-2">
                        <span class="text-gray-400">(Edit profile info)</span>
                    </div>
                </div>
            </div>
            {{-- BODY --}}
            <div class="card-body p-9">
                <div class="row mb-9">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mx-0 required">Photo</div>
                        <div class="form-text mt-0">Allowed file types: png, jpg, jpeg.</div>
                    </div>
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{  $user->url ? asset($user->url) : asset('assets/user.svg') }})">
                            <div class="image-input-wrapper w-200px h-200px" style="background-position: center; background-size: 95%;  background-image: url({{  $user->url ? asset($user->url) : asset('assets/user.svg') }})"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                <i class="fs-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                            </label>
                            <div data-url="delete-image-button" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" title="" data-bs-original-title="Set default image" style="position: absolute; right: -11px; bottom: -11px">
                                <i class="fs-7">
                                    <span class="svg-icon svg-icon-muted svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"/>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </i>
                                <input data-url="delete-image-input" type="hidden" value="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- IMAGE --}}
                {{-- <div class="d-flex flex-wrap flex-sm-nowrap mb-5">
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative" style="width: 200px; height: 200px; border-radius: 15%; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid lightgrey; object-fit: contain; overflow: hidden">
                            <img src="{{ $user->url ? asset($user->url) : asset('assets/user.svg') }}" style="display: block; width: 100%; height: auto; max-height: 100%; max-width: 190px;" alt="image">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                        </div>
                    </div>
                </div> --}}
                {{-- FIRST NAME --}}
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mx-0 required">First name</div>
                        <div class="form-text mt-0">Max length: 80 characters</div>
                    </div>
                    <div class="col-lg-9 fv-row fv-plugins-icon-container">
                        <input type="text" 
                                name="first_name" 
                                class="form-control form-control-solid @error('first_name') border-danger @enderror"
                                placeholder="Enter first name"  
                                value="{{ old('first_name') ?? $user->first_name }}">
                        @error('first_name')
                            <span>
                                <span class="m-0 mx-4 text-danger">
                                    {{ $message }}
                                </span>
                            </span>
                        @enderror
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                </div>
                {{-- LAST NAME --}}
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mx-0 required">Last name</div>
                        <div class="form-text mt-0">Max length: 80 characters</div>
                    </div>
                    <div class="col-lg-9 fv-row fv-plugins-icon-container">
                        <input type="text" 
                                name="last_name" 
                                class="form-control form-control-solid @error('last_name') border-danger @enderror"
                                placeholder="Enter last name"  
                                value="{{ old('last_name') ?? $user->last_name }}">
                        @error('last_name')
                            <span>
                                <span class="m-0 mx-4 text-danger">
                                    {{ $message }}
                                </span>
                            </span>
                        @enderror
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                </div>
                {{-- CONTACT PHONE --}}
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mx-0 required">Contact phone</div>
                        <div class="form-text mt-0">Format: +XX(XXX)XXX-XX-XX</div>
                    </div>
                    <div class="col-lg-9 fv-row fv-plugins-icon-container">
                        <input type="text" 
                                name="phone" 
                                class="form-control form-control-solid @error('phone') border-danger @enderror"
                                placeholder="Enter phone number"  
                                value="{{ old('phone') ?? $user->phone }}">
                        @error('phone')
                            <span>
                                <span class="m-0 mx-4 text-danger">
                                    {{ $message }}
                                </span>
                            </span>
                        @enderror
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                </div>
            </div>
            {{-- CANCEL/SAVE BLOCK --}}
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary px-10">Save</button>
            </div>
        </form>
    </div>
@endsection
