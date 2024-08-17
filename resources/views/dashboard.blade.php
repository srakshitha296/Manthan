<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="max-w-9xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!--Bootstrap code-->
                    <div class="row mx-0 ">
                        <div class="col-md-2 bg-dark m-4px">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                        role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="activities-tab" data-bs-toggle="tab" href="#activities"
                                        role="tab" aria-controls="activities" aria-selected="false">Activities</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="activityTypes-tab" data-bs-toggle="tab"
                                        href="#activityTypes" role="tab" aria-controls="activityTypes"
                                        aria-selected="false">Activity Types</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                    aria-labelledby="dashboard-tab">
                                    <h3>Dashboard</h3>
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="activities" role="tabpanel"
                                    aria-labelledby="activities-tab">
                                    <h3>Activities</h3>
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="activityTypes" role="tabpanel"
                                    aria-labelledby="activityTypes-tab">
                                    <h3>Activity Types</h3>
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3>Profile</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
