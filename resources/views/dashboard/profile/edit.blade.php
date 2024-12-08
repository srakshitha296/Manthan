@extends('layouts.dashboard.dashboard')

@section('content')
<div class="border-bottom border-translucent mb-7 mx-n3 px-2 mx-lg-n6 px-lg-6">
    <div class="row">
        <div class="col-xl-9">
            <div class="d-sm-flex justify-content-between">
                <h2 class="mb-4">Edit Profile</h2>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-9">
        <div class="d-flex align-items-end position-relative mb-7"><input class="d-none" id="upload-avatar"
                type="file" />
            <div class="hoverbox" style="width: 150px; height: 150px">
                <div class="hoverbox-content rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;">
                    <span class="fa-solid fa-camera fs-1 text-body-quaternary"></span>
                </div>
                <div
                    class="position-relative bg-body-quaternary rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                    <div class="avatar avatar-5xl"><img class="rounded-circle"
                            src="{{ asset('dashboard/assets/img/team/150x150/58.webp') }}" alt="" /></div><label
                        class="w-100 h-100 position-absolute z-1" for="upload-avatar"></label>
                </div>
            </div>
        </div>
        <h4 class="mb-3">Details</h4>
        <form class="row g-3 mb-9">
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputName" type="text"
                        placeholder="Name" /><label for="floatingInputName">Name</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputUsn" type="text"
                        placeholder="USN" /><label for="floatingInputName">USN</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputEmail" type="text"
                        placeholder="email" /><label for="floatingInputEmail">Email</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputPhone" type="tel"
                        placeholder="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" /><label
                        for="floatingInputPhone">Phone</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectInstitution">
                        <option selected="selected">AJIET</option>
                        <option value="1">SJEC</option>
                        <option value="2">AIT</option>
                        <option value="3">MITE</option>
                        <option value="4">VCM</option>
                    </select><label for="floatingSelectInstitution">Institution</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputBranch" type="text"
                        placeholder="title" /><label for="floatingInputBranch">Branch</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputSem" type="text"
                        placeholder="title" /><label for="floatingInputSem">Sem</label></div>
            </div>
            <h4 class="mt-6">Address Information</h4>
            <div class="col-12">
                <div class="form-floating"><textarea class="form-control" id="floatingStudentAddress"
                        placeholder="Leave a comment here" style="height: 128px"></textarea><label
                        for="floatingStudentAddress">Address</label></div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-6"><button class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection