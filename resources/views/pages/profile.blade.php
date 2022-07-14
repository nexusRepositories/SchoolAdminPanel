@extends('layouts.app')

@section('title', __('My Profile'))

@section('main-content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0 me-3">{{ $user->fullName() }}</h3>
                    <div class="d-flex flex-wrap fw-bold fs-6 m-0 pe-2">
                        {{-- <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">Administrator</a> --}}
                        <span class="text-gray-400">(Administrator)</span>
                    </div>
                </div>
                <a href="{{ route('profile_edit_page') }}" class="btn btn-primary align-self-center">Edit Profile</a>
            </div>
            <div class="card-body p-9">
                <div class="d-flex flex-wrap flex-sm-nowrap mb-5">
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative" style="width: 200px; height: 200px; border-radius: 15%; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid lightgrey; object-fit: contain; overflow: hidden">
                            <img src="{{ $user->url ? asset('storage/' . $user->url) : asset('assets/user.svg') }}" style="display: block; width: 100%; height: auto; max-height: 100%; max-width: 190px;" alt="image">
                            {{-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div> --}}
                        </div>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">{{ $user->fullName() }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Birthday</label>
                    <div class="col-lg-8 fv-row">
                        <span class="fw-bolder fs-6 text-gray-800">{{ $user->birthday }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Country</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">Germany</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">City</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">Berlin</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Email</label>
                    <div class="col-lg-8 fv-row">
                        <span class="fw-bolder fs-6 text-gray-800">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Contact Phone</label>
                    <div class="col-lg-8 d-flex align-items-center">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $user->phone }}</span>
                        <span class="badge badge-success">Verified</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
