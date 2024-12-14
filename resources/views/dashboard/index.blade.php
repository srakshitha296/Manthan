@extends('layouts.dashboard.dashboard')

@section('content')

@if (Auth::user()->role == 'student')
<div class="pb-5">
    <div class="row g-4">
        <div class="col-12 col-xxl-6">
            <div class="mb-8">
                <h2 class="mb-2">Ecommerce Dashboard</h2>
                <h5 class="text-body-tertiary fw-semibold">Here's what's going on at your business right now
                </h5>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-star text-success "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">57 new orders</h4>
                            <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-pause text-warning "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">5 orders</h4>
                            <p class="text-body-secondary fs-9 mb-0">On hold</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-xmark text-danger "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">15 products</h4>
                            <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="bg-body-secondary mb-6 mt-4" />
            <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                    <h3>Total sells</h3>
                    <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-8 col-sm-4"><select class="form-select form-select-sm" id="select-gross-revenue-month">
                        <option>Mar 1 - 31, 2022</option>
                        <option>April 1 - 30, 2022</option>
                        <option>May 1 - 31, 2022</option>
                    </select></div>
            </div>
            <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
        </div>
        <div class="col-12 col-xxl-6">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-1">Total orders<span
                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span
                                                class="badge-label">-6.8%</span></span></h5>
                                    <h6 class="text-body-tertiary">Last 7 days</h6>
                                </div>
                                <h4>16,247</h4>
                            </div>
                            <div class="d-flex justify-content-center px-4 py-6">
                                <div class="echart-total-orders" style="height:85px;width:115px"></div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bullet-item bg-primary me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                                    <h6 class="text-body fw-semibold mb-0">52%</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bullet-item bg-primary-subtle me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                                    <h6 class="text-body fw-semibold mb-0">48%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-1">New customers<span
                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2">
                                            <span class="badge-label">+26.5%</span></span></h5>
                                    <h6 class="text-body-tertiary">Last 7 days</h6>
                                </div>
                                <h4>356</h4>
                            </div>
                            <div class="pb-0 pt-4">
                                <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-2">Top coupons</h5>
                                    <h6 class="text-body-tertiary">Last 7 days</h6>
                                </div>
                            </div>
                            <div class="pb-4 pt-3">
                                <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bullet-item bg-primary me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                                    <h6 class="text-body fw-semibold mb-0">72%</h6>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bullet-item bg-primary-lighter me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                                    <h6 class="text-body fw-semibold mb-0">18%</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bullet-item bg-info-dark me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount
                                    </h6>
                                    <h6 class="text-body fw-semibold mb-0">10%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-2">Paying vs non paying</h5>
                                    <h6 class="text-body-tertiary">Last 7 days</h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-3 flex-1">
                                <div class="echarts-paying-customer-chart" style="height:100%;width:100%;">
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bullet-item bg-primary me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                                    <h6 class="text-body fw-semibold mb-0">30%</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bullet-item bg-primary-subtle me-2"></div>
                                    <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                                    <h6 class="text-body fw-semibold mb-0">70%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

@elseif (Auth::user()->role == 'faculty')
<div class="row gy-3 mb-6 justify-content-between">
    <div class="col-md-9 col-auto">
        <h2 class="mb-2 text-body-emphasis">Report</h2>
        
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
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                    <div class="ms-2">
                        <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">2</h2><span class="fs-7 fw-semibold text-body">Completed</span>
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
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                    <div class="ms-2">
                        <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">1</h2><span class="fs-7 fw-semibold text-body">Pending</span>
                        </div>
                        <p class="text-body-secondary fs-9 mb-0">Soon to be done</p>
                    </div>
                </div>
            </div>
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
                                    class="form-check-label mb-0 me-2 lh-1 text-body" for="progress">Progress</label>
                                <div class="form-check form-switch min-h-auto mb-0"><input class="form-check-input"
                                        id="progress" type="checkbox" checked=""
                                        data-gantt-progress="data-gantt-progress" /></div>
                            </div>
                            <div class="d-flex align-items-end flex-1"><label
                                    class="form-check-label mb-0 me-2 lh-1 text-body" for="links">Links</label>
                                <div class="form-check form-switch min-h-auto flex-1 mb-0"><input
                                        class="form-check-input" id="links" type="checkbox" checked=""
                                        data-gantt-links="data-gantt-links" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input class="btn-check"
                                id="weekView" type="radio" name="scaleView" value="week" checked="" /><label
                                class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                for="weekView">Week</label><input class="btn-check" id="monthView" type="radio"
                                name="scaleView" value="month" /><label
                                class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                for="monthView">Month</label><input class="btn-check" id="yearView" type="radio"
                                name="scaleView" value="year" /><label
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

@elseif (Auth::user()->role == 'HoD')
    <h1>hod dashboard</h1>


@elseif (Auth::user()->role == 'Principle')
    <h1>principle dashboard</h1>
@endif

@endsection