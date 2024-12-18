@extends('layouts.dashboard.dashboard')

@section('content')
<div class="card mb-5">
    <div class="card-header d-flex justify-content-center align-items-end position-relative mb-7 mb-xxl-0"
        style="min-height: 214px; ">
        <div class="hover-actions-trigger position-static">
            <div class="bg-holder rounded-top" style="background-image:url(../../assets/img/generic/cover-photo.png);">
            </div>
            {{-- <input class="d-none" id="upload-cover-image" type="file" />
            <label class="cover-image-file-input" for="upload-cover-image"></label> --}}
            <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white">
                <span class="fa-solid fa-camera me-2 overlay-icon"></span>
            </div>
            <!--/.bg-holder-->
        </div>
        {{-- <input class="d-none" id="upload-porfile-picture" type="file" /> --}}
        <div class="hoverbox feed-profile" style="width: 150px; height: 150px">
            <div class="rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;">
                {{-- <span class="fa-solid fa-camera fs-3 text-secondary-light"></span> --}}
            </div>
            <div class="position-relative bg-body-quaternary rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                <div class="avatar avatar-5xl">
                    <img class="rounded-circle rounded-circle img-thumbnail shadow-sm border-0"
                        src="{{ Storage::url(Auth::user()->image) }}" alt="{{ Auth::user()->name }}" />
                </div>
                {{-- <label class="w-100 h-100 position-absolute z-1" for="upload-porfile-picture"></label> --}}
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row justify-content-xl-between">
            <div class="col-auto">
                <div class="d-flex flex-wrap mb-3 align-items-center">
                    <h2 class="me-2">{{ Auth::user()->name }}</h2>
                    {{-- <span class="fw-semibold fs-7 text-body-emphasis">u/hansolo</span> --}}
                </div>
            </div>
            <div class="col-12 gy-6">
                <div class="form-floating"><textarea class="form-control" id="floatingProjectOverview"
                        placeholder="Leave a comment here" style="height: 100px"></textarea><label
                        for="floatingProjectOverview">Your Experience</label></div>
            </div>
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    <div class="col-auto"><a href="my_testimonial.html"><button
                                class="btn btn-phoenix-primary px-5">Cancel</button></a>
                    </div>
                    <div class="col-auto"><button class="btn btn-primary px-5 ">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection