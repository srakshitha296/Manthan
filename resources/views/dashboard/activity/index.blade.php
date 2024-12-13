@extends('layouts.dashboard.dashboard')

@section('content')
<div class="mb-9">
    <div id="projectSummary" {{--
         
        <div class="row mb-4 gx-6 gy-3 align-items-center">
            <div class="col-auto">
                <h2 class="mb-0">Activities<span class="fw-normal text-body-tertiary ms-3">(32)</span>
                </h2>
            </div>

        </div>

        <div class="table-responsive scrollbar">
            <table class="table fs-9 mb-0 border-top border-translucent">
                <thead>
                    <tr>
                        <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="activityTitle"
                            style="width:30%;">TITLE</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">
                            START DATE</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="end" style="width:15%;">END
                            DATE</th>
                        <th class="sort align-middle" scope="col" data-sort="statuses" style="width:20%;">STATUS</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="points" style="width:12%;">
                            POINTS</th>
                        <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                    </tr>
                </thead>
                <tbody class="list" id="project-list-table-body">
                    <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 activityTitle py-4"><a class="fw-bold fs-8"
                                href="#">Skill rural population</a>
                        </td>

                        <td class="align-middle white-space-nowrap start ps-3 py-4">
                            <p class="mb-0 fs-9 text-body">Mar 08, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap end ps-3 py-4">
                            <p class="mb-0 fs-9 text-body">Sep 15, 2022</p>
                        </td>
                        <td class="align-middle white-space-nowrap statuses"><span
                                class="badge badge-phoenix fs-10 badge-phoenix-warning">PENDING</span></td>
                        <td class="align-middle white-space-nowrap points ps-3 py-4">
                            <p class="fw-bo text-body fs-9 mb-0">0</p>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="btn-reveal-trigger position-static"><button
                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent"><span
                                        class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                        href="#!">View</a>
                                    <a class="dropdown-item" href="#!">Export</a>
                                    @if (Auth::user()->role == 'student')
                                    <a class="dropdown-item" href="{{ route('user.activity.edit') }}">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <div
            class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs-9 border-bottom border-translucent">
            <div class="d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                <a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!"
                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
            </div>
            <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
            </div>
        </div> --}}
    </div>
</div>
@endsection