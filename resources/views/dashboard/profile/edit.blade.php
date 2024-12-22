@extends('layouts.dashboard.dashboard')

@section('content')
@if (Auth::user()->role == 'student')
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row g-3 mb-9" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-end position-relative mb-7">
                <input class="" id="upload-avatar" type="file" name="image" />
            </div>
            <h4 class="mb-3">User Details</h4>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control @error('name') is-invalid @enderror" id="floatingInputName" type="text" value="{{ old('name', $user->name) }}" name="name" />
                    <label for="floatingInputName">Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control @error('usn') is-invalid @enderror" id="floatingInputUsn" type="text" placeholder="USN" value="{{ old('usn', $user->student->usn) }}" name="usn" />
                    <label for="floatingInputUsn">USN</label>
                    @error('usn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control @error('email') is-invalid @enderror" id="floatingInputEmail" type="text" placeholder="email" value="{{ old('email', $user->email) }}" name="email" />
                    <label for="floatingInputEmail">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control @error('phone') is-invalid @enderror" id="floatingInputPhone" type="tel" placeholder="phone" value="{{ old('phone', $user->phone) }}" name="phone" />
                    <label for="floatingInputPhone">Phone</label>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select @error('college') is-invalid @enderror" id="floatingSelectInstitution" name="college">
                        @foreach ($college as $item)
                            <option value="{{ $item->id }}" {{ old('college', $user->student->college->id) == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectInstitution">Institution</label>
                    @error('college')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select @error('branch') is-invalid @enderror" id="floatingSelectBranch" name="branch">
                        @foreach ($departments as $item)
                            <option value="{{ $item->id }}" {{ old('branch', $user->student->department->id) == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectBranch">Branch</label>
                    @error('branch')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select @error('semester') is-invalid @enderror" id="floatingSelectSemester" name="semester">
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}" {{ old('semester', $user->student->semester) == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    <label for="floatingSelectSemester">Semester</label>
                    @error('semester')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h4 class="mt-6">Address Information</h4>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control @error('address') is-invalid @enderror" id="floatingStudentAddress" placeholder="your address" style="height: 128px" name="address">{{ old('address', $user->address) }}</textarea>
                    <label for="floatingStudentAddress">Address</label>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>


@elseif (Auth::user()->role == 'faculty')
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form class="row g-3 mb-9" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
        <div class="d-flex align-items-end position-relative mb-7">
            {{-- <label class="w-100 h-100" for="upload-avatar">Profile Photo</label> --}}
            <input class="" id="upload-avatar" type="file" name="image" accept="image/*" />
            {{-- <div class="hoverbox" style="width: 150px; height: 150px">
                <div class="hoverbox-content rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;">
                    <span class="fa-solid fa-camera fs-1 text-body-quaternary"></span>
                </div>
                <div class="position-relative bg-body-quaternary rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                    <div class="avatar avatar-5xl">
                        <img class="rounded-circle" src="../../assets/img/team/150x150/58.webp" alt="" />
                    </div>
                    <label class="w-100 h-100 position-absolute z-1" for="upload-avatar"></label>
                </div>
            </div> --}}
        </div>
        <h4 class="mb-3">Details</h4>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputName" type="text" placeholder="Name" value="{{ $user->name }}" name="name" />
                    <label for="floatingInputName">Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputEmail" type="email" value="{{ $user->email }}" name="email" />
                    <label for="floatingInputEmail">Email</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputPhone" type="tel" placeholder="phone" name="phone" value="{{ $user->phone }}" />
                    <label for="floatingInputPhone">Phone</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectInstitution" name="college">
                        @foreach ($college as $item)
                        <option value="{{ $item->id }}" {{ old('college', $user->faculty->college->id) == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                    </select><label for="floatingSelectInstitution">Institution</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select @error('branch') is-invalid @enderror" id="floatingSelectBranch" name="branch">
                        @foreach ($departments as $item)
                            <option value="{{ $item->id }}" {{ old('branch', $user->faculty->department->id) == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectBranch">Branch</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectDesignation">
                        <option selected="selected">Principal</option>
                        <option value="1">Assistant Professor</option>
                        <option value="2">Associate Professor</option>
                        <option value="3">HoD</option>
                    </select>
                    <label for="floatingSelectDesignationt">Designation</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputExperience" type="text" placeholder="Experience" value="{{ $user->faculty->experience }}" name="expierience" />
                    <label for="floatingInputExperience">Experience</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-joining" type="date" name="join_date" value="{{ $user->faculty->joining_date ? \Carbon\Carbon::parse($user->faculty->joining_date)->format('Y-m-d') : '' }}" />
                    <label class="form-label" for="date-o-f-joining">Date of Joining</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-leaving" type="date" name="leave_date" value="{{ $user->faculty->leaving_date ? \Carbon\Carbon::parse($user->faculty->leaving_date)->format('Y-m-d') : '' }}" />
                    <label class="form-label"
                        for="date-o-f-leaving">Date of Leaving</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="form-floating form-floating-advance-select">
                            <label for="floaTingLabelFacultyQualification">QUALIFICATION</label>
                            <select 
                                class="form-select" 
                                id="floaTingLabelFacultyQualification" 
                                data-choices="data-choices" 
                                multiple="multiple" 
                                name="qualification[]" 
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                
                                @php
                                    $qualifications = ['B.Tech', 'M.Tech', 'PhD', 'M.Sc', 'B.Sc'];
                                @endphp
                        
                                @foreach ($qualifications as $qualification)
                                    <option 
                                        value="{{ $qualification }}" 
                                        {{ in_array($qualification, old('qualification', $user->faculty->qualification ?? [])) ? 'selected' : '' }}>
                                        {{ $qualification }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="form-floating form-floating-advance-select">
                            <label for="floaTingLabelFacultySpecialization">Specialization</label>
                            <select 
                                class="form-select" 
                                id="floaTingLabelFacultySpecialization" 
                                data-choices="data-choices" 
                                multiple="multiple" 
                                name="specialization[]" 
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                
                                @php
                                    $specializations = [
                                        'Artificial Intelligence',
                                        'Data Science',
                                        'Cyber Security',
                                        'Robotics',
                                        'Quantum Computing',
                                        'Blockchain Technology',
                                        'Internet of Things',
                                        'Cloud Computing',
                                        'Augmented Reality',
                                        'Virtual Reality',
                                        'Machine Learning',
                                        'Big Data',
                                        'Bioinformatics',
                                        'Computer Vision',
                                        'Natural Language Processing',
                                        'Human-Computer Interaction',
                                        'Software Engineering',
                                        'Network Security',
                                        'Embedded Systems',
                                        'Mobile Computing',
                                    ];
                                @endphp
                
                                @foreach ($specializations as $specialization)
                                    <option 
                                        value="{{ $specialization }}" 
                                        {{ in_array($specialization, old('specialization', $user->faculty->specialization ?? [])) ? 'selected' : '' }}>
                                        {{ $specialization }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>

            <h4 class="mt-4">Address Information</h4>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" id="floatingStudentAddress" placeholder="Leave a comment here" style="height: 128px" name="address">
                        {{ $user->address }}
                    </textarea>
                    <label for="floatingStudentAddress">Address</label>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>

@elseif (Auth::user()->role == 'HoD')
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form class="row g-3 mb-9" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
        <div class="d-flex align-items-end position-relative mb-7">
            {{-- <label class="w-100 h-100" for="upload-avatar">Profile Photo</label> --}}
            <input class="" id="upload-avatar" type="file" name="image" accept="image/*" />
            {{-- <div class="hoverbox" style="width: 150px; height: 150px">
                <div class="hoverbox-content rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;">
                    <span class="fa-solid fa-camera fs-1 text-body-quaternary"></span>
                </div>
                <div class="position-relative bg-body-quaternary rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                    <div class="avatar avatar-5xl">
                        <img class="rounded-circle" src="../../assets/img/team/150x150/58.webp" alt="" />
                    </div>
                    <label class="w-100 h-100 position-absolute z-1" for="upload-avatar"></label>
                </div>
            </div> --}}
        </div>
        <h4 class="mb-3">Details</h4>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputName" type="text" placeholder="Name" value="{{ $user->name }}" name="name" />
                    <label for="floatingInputName">Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputEmail" type="email" value="{{ $user->email }}" name="email" />
                    <label for="floatingInputEmail">Email</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputPhone" type="tel" placeholder="phone" name="phone" value="{{ $user->phone }}" />
                    <label for="floatingInputPhone">Phone</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectInstitution" name="college">
                        @foreach ($college as $item)
                        <option value="{{ $item->id }}" {{ old('college', $user->faculty->college->id) == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                    </select><label for="floatingSelectInstitution">Institution</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select @error('branch') is-invalid @enderror" id="floatingSelectBranch" name="branch">
                        @foreach ($departments as $item)
                            <option value="{{ $item->id }}" {{ old('branch', $user->faculty->department->id) == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectBranch">Branch</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectDesignation" name="designation">
                        <option value="Principal" selected="selected">Principal</option>
                        <option value="Assistant Professor">Assistant Professor</option>
                        <option value="Associate Professor">Associate Professor</option>
                        <option value="HoD">HoD</option>
                    </select>
                    <label for="floatingSelectDesignationt">Designation</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="floatingInputExperience" type="text" placeholder="Experience" value="{{ $user->faculty->experience }}" name="expierience" />
                    <label for="floatingInputExperience">Experience</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-joining" type="date" name="join_date" value="{{ $user->faculty->joining_date ? \Carbon\Carbon::parse($user->faculty->joining_date)->format('Y-m-d') : '' }}" />
                    <label class="form-label" for="date-o-f-joining">Date of Joining</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-leaving" type="date" name="leave_date" value="{{ $user->faculty->leaving_date ? \Carbon\Carbon::parse($user->faculty->leaving_date)->format('Y-m-d') : '' }}" />
                    <label class="form-label"
                        for="date-o-f-leaving">Date of Leaving</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="form-floating form-floating-advance-select">
                            <label for="floaTingLabelFacultyQualification">QUALIFICATION</label>
                            <select 
                                class="form-select" 
                                id="floaTingLabelFacultyQualification" 
                                data-choices="data-choices" 
                                multiple="multiple" 
                                name="qualification[]" 
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                
                                @php
                                    $qualifications = ['B.Tech', 'M.Tech', 'PhD', 'M.Sc', 'B.Sc'];
                                @endphp
                        
                                @foreach ($qualifications as $qualification)
                                    <option 
                                        value="{{ $qualification }}" 
                                        {{ in_array($qualification, old('qualification', $user->faculty->qualification ?? [])) ? 'selected' : '' }}>
                                        {{ $qualification }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="form-floating form-floating-advance-select">
                            <label for="floaTingLabelFacultySpecialization">Specialization</label>
                            <select 
                                class="form-select" 
                                id="floaTingLabelFacultySpecialization" 
                                data-choices="data-choices" 
                                multiple="multiple" 
                                name="specialization[]" 
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                
                                @php
                                    $specializations = [
                                        'Artificial Intelligence',
                                        'Data Science',
                                        'Cyber Security',
                                        'Robotics',
                                        'Quantum Computing',
                                        'Blockchain Technology',
                                        'Internet of Things',
                                        'Cloud Computing',
                                        'Augmented Reality',
                                        'Virtual Reality',
                                        'Machine Learning',
                                        'Big Data',
                                        'Bioinformatics',
                                        'Computer Vision',
                                        'Natural Language Processing',
                                        'Human-Computer Interaction',
                                        'Software Engineering',
                                        'Network Security',
                                        'Embedded Systems',
                                        'Mobile Computing',
                                    ];
                                @endphp
                
                                @foreach ($specializations as $specialization)
                                    <option 
                                        value="{{ $specialization }}" 
                                        {{ in_array($specialization, old('specialization', $user->faculty->specialization ?? [])) ? 'selected' : '' }}>
                                        {{ $specialization }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>

            <h4 class="mt-4">Address Information</h4>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" id="floatingStudentAddress" placeholder="Leave a comment here" style="height: 128px" name="address">
                        {{ $user->address }}
                    </textarea>
                    <label for="floatingStudentAddress">Address</label>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>

@elseif (Auth::user()->role == 'Principle')
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
                            src="../../assets/img/team/150x150/58.webp" alt="" /></div><label
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
                <div class="form-floating"><select class="form-select" id="floatingSelectDepartment">
                        <option selected="selected">CSE</option>
                        <option value="1">ISE</option>
                        <option value="2">ECE</option>
                        <option value="3">MECH</option>
                        <option value="4">CIVIL</option>
                        <option value="5">AIML</option>
                        <option value="6">AIDS</option>
                        <option value="7">ICB</option>
                    </select><label for="floatingSelectDepartment">Department</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectDesignation">
                        <option selected="selected">Principal</option>
                        <option value="1">Assistant Professor</option>
                        <option value="2">Associate Professor</option>
                        <option value="3">HoD</option>

                    </select><label for="floatingSelectDesignationt">Designation</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating"><input class="form-control" id="floatingInputExperience" type="tel"
                        placeholder="Experience" /><label for="floatingInputExperience">Experience</label></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-joining" type="date" /><label class="form-label"
                        for="date-o-f-joining">Date of Joining</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="date-o-f-leaving" type="date" /><label class="form-label"
                        for="date-o-f-leaving">Date of Leaving</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="floating-label-example-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating form-floating-advance-select mb-3&quot;&gt;&lt;label for=&quot;floaTingLabelSingleSelect&quot;&gt;Single&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelSingleSelect&quot; data-choices=&quot;data-choices&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
                                                &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
                                                &lt;option&gt;University of Chicago&lt;/option&gt;
                                                &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
                                                &lt;option&gt;California Institute of Technology&lt;/option&gt;
                                              &lt;/select&gt;&lt;/div&gt;
                                            &lt;div class=&quot;form-floating form-floating-advance-select&quot;&gt;&lt;label for=&quot;floaTingLabelFacultyQualification&quot;&gt;Multiple&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelFacultyQualification&quot; data-choices=&quot;data-choices&quot; multiple=&quot;multiple&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
                                                &lt;option selected=&quot;selected&quot;&gt;Massachusetts Institute of Technology&lt;/option&gt;
                                                &lt;option&gt;University of Chicago&lt;/option&gt;
                                                &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
                                                &lt;option&gt;California Institute of Technology&lt;/option&gt;
                                              &lt;/select&gt;&lt;/div&gt;</code></pre>
                        </div>

                        <div class="form-floating form-floating-advance-select"><label
                                for="floaTingLabelFacultyQualification">QUALIFICATION</label><select class="form-select"
                                id="floaTingLabelFacultyQualification" data-choices="data-choices" multiple="multiple"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option selected="selected">B.Tech
                                </option>
                                <option>M.Tech</option>
                                <option>PhD</option>
                                <option>Bsc</option>
                            </select></div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="floating-label-example-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating form-floating-advance-select mb-3&quot;&gt;&lt;label for=&quot;floaTingLabelSingleSelect&quot;&gt;Single&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelSingleSelect&quot; data-choices=&quot;data-choices&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
                                                                            &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
                                                                            &lt;option&gt;University of Chicago&lt;/option&gt;
                                                                            &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
                                                                            &lt;option&gt;California Institute of Technology&lt;/option&gt;
                                                                          &lt;/select&gt;&lt;/div&gt;
                                                                        &lt;div class=&quot;form-floating form-floating-advance-select&quot;&gt;&lt;label for=&quot;floaTingLabelFacultySpecialization&quot;&gt;Multiple&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelFacultySpecialization&quot; data-choices=&quot;data-choices&quot; multiple=&quot;multiple&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
                                                                            &lt;option selected=&quot;selected&quot;&gt;Massachusetts Institute of Technology&lt;/option&gt;
                                                                            &lt;option&gt;University of Chicago&lt;/option&gt;
                                                                            &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
                                                                            &lt;option&gt;California Institute of Technology&lt;/option&gt;
                                                                          &lt;/select&gt;&lt;/div&gt;</code></pre>
                        </div>

                        <div class="form-floating form-floating-advance-select"><label
                                for="floaTingLabelFacultySpecialization">specialization</label><select
                                class="form-select" id="floaTingLabelFacultySpecialization" data-choices="data-choices"
                                multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option selected="selected">AIML
                                </option>
                                <option>Data Science</option>
                                <option>Full Stack Web Development</option>
                                <option>Cyber Security</option>
                            </select></div>


                    </div>
                </div>
            </div>


            <h4 class="mt-4">Address Information</h4>
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
@endif

@endsection