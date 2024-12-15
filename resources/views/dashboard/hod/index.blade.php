@extends('layouts.dashboard.dashboard')

@section('content')
<div class="pb-5">
    <div class="mb-9">
        <div id="dept-faculties">
            <!-- data-list='{"valueNames":["studentName","usn","start","end","points","projectprogress","status","action"],"page":6,"pagination":true}' -->
            <div class="row mb-4 gx-6 gy-3 align-items-center">
                <div class="col-auto">
                    <h2 class="mb-0">Faculties<span class="fw-normal text-body-tertiary ms-3">(30)</span>
                    </h2>
                </div>

            </div>

            <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                    <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                data-sort="faculty name" style="width:30%">NAME</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="email"
                                style="width:30%">EMAIL</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="phone" style="width:30%;">
                                PHONE
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="designation"
                                style="width:30%">
                                DESIGNATION
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="qualification"
                                style="width:30%">
                                QUALIFICATION
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="specialization"
                                style="width:30%">
                                SPECIALIZATION
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="experience"
                                style="width:30%">
                                EXPERIENCE
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="doj" style="width:30%">
                                D.O.J
                            </th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="dol" style="width:30%">
                                D.O.L
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" id="project-list-table-body">
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a
                                    class="fw-bold fs-8" href="#">Mrs. Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>

                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>

                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>

                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>

                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>

                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                        <tr class="position-static">
                            <td class="align-middle time white-space-nowrap ps-0 facultyName py-4"><a class="fw-bold fs-8" href="#">Mrs.
                                    Ashwitha Shetty</a>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ashwitha@gmail.com</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">9743838214</p>
                            </td>
                            <td class="align-middle white-space-nowrap points ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">Assistant professor</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">B.Tech, M.Tech. PhD</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">ML</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">7</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2023</p>
                            </td>
                            <td class="align-middle white-space-nowrap end ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">16-04-2025</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection