@extends('layouts.dashboard')
@section('sidebar')
    <div class="navbar-vertical-content">
        <ul class="navbar-nav nav nav-pills flex-column" id="navbarVerticalNav" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab"
                    aria-controls="dashboard" aria-selected="true">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Dashboard</span></div>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="studentDetails-tab" data-bs-toggle="tab" href="#studentDetails"
                    role="tab" aria-controls="studentDetails" aria-selected="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Student Details</span></div>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="viewActivity-tab" data-bs-toggle="tab" href="#viewActivity" role="tab"
                    aria-controls="viewActivity" aria-selected="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Student Activity</span></div>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="events-tab" data-bs-toggle="tab" href="#events" role="tab"
                    aria-controls="events" aria-selected="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Events</span></div>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- Tab panes -->
    <div class="tab-content">

        <!-- Dashboard content  -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="row gy-3 mb-6 justify-content-between">
                <div class="col-md-9 col-auto">
                    <h2 class="mb-2 text-body-emphasis">Report</h2>
                    {{-- <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5> --}}
                </div>
                <div class="col-md-3 col-auto">
                    <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker"
                            type="text"
                            data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                </div>
            </div>
            <div class="row mb-3 gy-6">
                <div class="col-12 col-xxl-2">
                    <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">2</h2><span
                                            class="fs-7 fw-semibold text-body">Completed</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Valued</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-users-alt text-success-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">2</h2><span class="fs-7 fw-semibold text-body">In
                                            progress</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">To be assessed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">1</h2><span class="fs-7 fw-semibold text-body">Pending</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Soon to be done</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-refresh text-danger-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">3</h2><span class="fs-7 fw-semibold text-body">Refunds</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Fresh start</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-xl-12 col-xxl-5">
                    <div class="mx-xxl-0">
                        <h3>Activity: zero Roadmap</h3>
                        <p class="text-body-tertiary">Phase 2 is now ongoing</p>
                        <div class="gantt-zero-roadmap">
                            <div class="row g-2 flex-between-center mb-3">
                                <div class="col-12 col-sm-auto">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-end me-3"><label
                                                class="form-check-label mb-0 me-2 lh-1 text-body"
                                                for="progress">Progress</label>
                                            <div class="form-check form-switch min-h-auto mb-0"><input
                                                    class="form-check-input" id="progress" type="checkbox" checked=""
                                                    data-gantt-progress="data-gantt-progress" /></div>
                                        </div>
                                        <div class="d-flex align-items-end flex-1"><label
                                                class="form-check-label mb-0 me-2 lh-1 text-body"
                                                for="links">Links</label>
                                            <div class="form-check form-switch min-h-auto flex-1 mb-0"><input
                                                    class="form-check-input" id="links" type="checkbox"
                                                    checked="" data-gantt-links="data-gantt-links" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input
                                            class="btn-check" id="weekView" type="radio" name="scaleView"
                                            value="week" checked="" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="weekView">Week</label><input class="btn-check" id="monthView"
                                            type="radio" name="scaleView" value="month" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="monthView">Month</label><input class="btn-check" id="yearView"
                                            type="radio" name="scaleView" value="year" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="yearView">Year</label></div>
                                </div>
                            </div>
                            <div class="gantt-zero-roadmap-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
                <div class="row">
                    <div class="col-12 col-xl-7 col-xxl-6">
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-6">
                                <h3 class="text-body-emphasis text-nowrap">Issues Discovered</h3>
                                <p class="text-body-tertiary mb-md-7">Newly found and yet to be solved</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fw-bold">Issue type </p>
                                    <p class="mb-0 fs-9">Total count <span class="fw-bold">257</span></p>
                                </div>
                                <hr class="bg-body-secondary mb-2 mt-2" />
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-info-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Product design</p>
                                    <h5 class="mb-0 text-body">78</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-warning-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Development</p>
                                    <h5 class="mb-0 text-body">63</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-danger-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">QA &amp; Testing</p>
                                    <h5 class="mb-0 text-body">56</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-success-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Customer queries</p>
                                    <h5 class="mb-0 text-body">36</h5>
                                </div>
                                <div class="d-flex align-items-center"><span
                                        class="d-inline-block bg-primary bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">R &amp; D</p>
                                    <h5 class="mb-0 text-body">24</h5>
                                </div><button class="btn btn-outline-primary mt-5">See Details<span
                                        class="fas fa-angle-right ms-2 fs-10 text-center"></span></button>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="position-relative mb-sm-4 mb-xl-0">
                                    <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-6">
                        <h3>Project: eleven Progress</h3>
                        <p class="text-body-tertiary mb-0 mb-xl-3">End &amp; progress</p>
                        <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 border-top">
                        <div id="projectSummary"
                            data-list='{"valueNames":["project","assignees","start","end","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
                            <div class="row align-items-end justify-content-between pb-4 g-3">
                                <div class="col-auto">
                                    <h3>Projects</h3>
                                    <p class="text-body-tertiary lh-sm mb-0">Brief summary of all projects</p>
                                </div>
                            </div>
                            <div class="table-responsive ms-n1 ps-1 scrollbar">
                                <table class="table fs-9 mb-0 border-top border-translucent">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                                data-sort="projectName" style="width:30%;">ACTIVITY NAME</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="start"
                                                style="width:10%;">START DATE</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="end"
                                                style="width:15%;">END DATE</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="task"
                                                style="width:12%;">TASK</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress"
                                                style="width:5%;">PROGRESS</th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="statuses"
                                                style="width:10%;">STATUS</th>
                                            <th class="sort align-middle text-end" scope="col" style="width:10%;">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="project-list-table-body">
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">May 21, 2028</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">287</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-success">completed</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Water resistant mosquito killer
                                                    gun</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Mar 08, 2021</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Sep 15, 2022</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">125</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 66.3677130044843%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-warning">inactive</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Execution of Micky the foul
                                                    mouse</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Sep 23, 2026</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">72</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 51.39146567717996%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Harnessing stupidity from
                                                    Jerry</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Jan 01, 2016</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Apr 04, 2022</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">91</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 42.89340101522843%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Making the Butterflies shoot
                                                    each other dead</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Dec 24, 2019</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Jan 15, 2024</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">134</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">The chewing gum attack</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Aug 4, 2018</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Oct 22, 2023</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">24</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-secondary">Cancelled</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                                                    class="fw-bold fs-8" href="#">Olga Dies Dreaming by Xóchitl
                                                    González</a></td>

                                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Jan 01, 2018</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                                <p class="mb-0 fs-9 text-body">Jan 04, 2022</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap task ps-3 py-4">
                                                <p class="fw-bo text-body fs-9 mb-0">80</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">150 / 294</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 51.02040816326531%"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end statuses"><span
                                                    class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                        data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                        href="#!" data-list-view="less">View Less<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                            class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Student Details  -->
        <div class="tab-pane fade" id="studentDetails" role="tabpanel" aria-labelledby="studentDetails-tab">
            <div class="mb-9">
                <div class="row g-2 mb-4">
                    <div class="col-auto">
                        <h2 class="mb-0">Students</h2>
                    </div>
                </div>
                <div id="products"
                    data-list='{"valueNames":["customer","email","submitted-activities","verified-activities","usn","student-record","last-order"],"page":10,"pagination":true}'>
                    <div class="mb-4">
                        <div class="row g-3">
                            <div class="col-auto">
                                <div class="search-box">
                                    <form class="position-relative"><input class="form-control search-input search"
                                            type="search" placeholder="Search customers" aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                        <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="white-space-nowrap fs-9 align-middle ps-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                    id="checkbox-bulk-customers-select" type="checkbox"
                                                    data-bulk-select='{"body":"customers-table-body"}' /></div>
                                        </th>
                                        <th class="sort align-middle pe-7" scope="col" data-sort="customer"
                                            style="width:10%;">STUDENT</th>
                                        <th class="sort align-middle pe-7" scope="col" data-sort="usn"
                                            style="width:25%;">USN</th>
                                        <th class="sort align-middle pe-7" scope="col" data-sort="email"
                                            style="width:20%;">EMAIL</th>
                                        <th class="sort align-middle pe-7" scope="col"
                                            data-sort="submitted-activities" style="width:10%">SUBMITTED</th>
                                        <th class="sort align-middle text-end ps-3" scope="col"
                                            data-sort="verified-activities" style="width:10%">VERIFIED</th>

                                        <th class="sort align-middle pe-7" scope="col" data-sort="student-record"
                                            style="width:25%;">RECORD</th>
                                       
                                    </tr>
                                </thead>
                                <tbody class="list" id="customers-table-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle ps-0 py-3">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                    type="checkbox"
                                                    data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","usn":"Budapest","totalOrders":89,"totalSpent":23987,"lastSeen":"34 min ago","lastOrder":"Dec 12, 12:56 PM"}' />
                                            </div>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap pe-7"><a
                                                class="d-flex align-items-center text-body-emphasis"
                                                href="customer-details.html">
                                                <div class="avatar avatar-m"><img class="rounded-circle"
                                                        src="../../../assets/img/team/32.webp" alt="" /></div>
                                                <p class="mb-0 ms-3 text-body-emphasis fw-bold">Carry Anna</p>
                                            </a></td>
                                        <td class="usn align-middle white-space-nowrap text-body-highlight pe-7">4JK21CS048
                                        </td>
                                        <td class="email align-middle white-space-nowrap pe-7"><a class="fw-semibold"
                                                href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                                        <td
                                            class="submitted-activities align-middle white-space-nowrap fw-semibold pe-7 text-body-highlight">
                                            3</td>
                                        <td
                                            class="verified-activities align-middle white-space-nowrap fw-bold text-end pe-7 text-body-emphasis">
                                            2</td>

                                        <td
                                            class="student-record align-middle white-space-nowrap text-body-tertiary pe-7">
                                            <button class="btn btn-primary me-1 mb-1" type="button">VIEW</button></td>

                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle ps-0 py-3">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                    type="checkbox"
                                                    data-bulk-select-row='{"customer":{"avatar":"/team/avatar.webp","name":"Milind Mikuja","placeholder":true},"email":"mimiku@yahoo.com","usn":"Manchester","totalOrders":76,"totalSpent":21567,"lastSeen":"6 hours ago","lastOrder":"Dec 9, 2:28 PM"}' />
                                            </div>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap pe-7"><a
                                                class="d-flex align-items-center text-body-emphasis"
                                                href="customer-details.html">
                                                <div class="avatar avatar-m"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="../../../assets/img/team/avatar.webp" alt="" /></div>
                                                <p class="mb-0 ms-3 text-body-emphasis fw-bold">Milind Mikuja</p>
                                            </a></td>
                                            <td class="usn align-middle white-space-nowrap text-body-highlight pe-7">4JK21CS084
                                        </td>
                                        <td class="email align-middle white-space-nowrap pe-7"><a class="fw-semibold"
                                                href="mailto:mimiku@yahoo.com">mimiku@yahoo.com</a></td>
                                        <td
                                            class="submitted-activities align-middle white-space-nowrap fw-semibold pe-7 text-body-highlight">
                                            4</td>
                                        <td
                                            class="verified-activities align-middle white-space-nowrap fw-bold text-end pe-7 text-body-emphasis">
                                            1</td>
                                        <td
                                            class="student-record align-middle white-space-nowrap text-body-tertiary pe-7">
                                            <button class="btn btn-primary me-1 mb-1" type="button">VIEW</button></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                    data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                    data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                    href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.viewActivity')
        
        @include('dashboard.events')

    </div>
@endsection
