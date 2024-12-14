@extends('layouts.dashboard.dashboard')

@section('content')
<div class="pb-5">
    <div class="mb-9">
        <div id="dept-student">
            <!-- data-list='{"valueNames":["studentName","usn","start","end","points","projectprogress","status","action"],"page":6,"pagination":true}' -->
            <div class="row mb-4 gx-6 gy-3 align-items-center">
                <div class="col-auto">
                    <h2 class="mb-0">Students<span class="fw-normal text-body-tertiary ms-3"></span>
                    </h2>
                </div>

            </div>

            <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                    <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                data-sort="studentName" style="width:30%;">NAME</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="usn"
                                style="width:10%;">
                                USN</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="email"
                                style="width:10%;">EMAIL</th>
                            <th class="sort align-middle" scope="col" data-sort="phone" style="width:10%;">
                                PHONE
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="institution"
                                style="width:10%;">
                                INSTITUTION</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="sem"
                                style="width:10%;">
                                SEM</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="activity-count"
                                style="width:10%;">
                                ACTIVITY COUNT</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="project-list-table-body">
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 studentName py-4"><a
                                    class="fw-bold fs-8" href="#">Darshan</a>
                            </td>

                            <td class="align-middle white-space-nowrap start ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">4JK21CS016</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">drshnbhandary@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">7204066428</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">AJIET</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">5</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs-9 border-bottom border-translucent">
                <div class="d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                        data-list-info="data-list-info"></p>
                    <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                        class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                            class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                        data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection