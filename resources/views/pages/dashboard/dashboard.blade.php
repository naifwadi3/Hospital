@extends('layout.dashboard')
@section('css')
@endsection
@section('co')


<div id="kt_app_content_container" class="app-container container-fluid">
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 20-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
              
                <!--end::Card body-->
            </div>
            <!--end::Card widget 20-->

        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 17-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 17-->

        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Engage widget 10-->
            <div class="card card-flush h-md-100">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px">
                            <li class="nav-item w-100 me-0 mb-md-2">

                                <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                    <span class="svg-icon svg-icon-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Link 1</span>
                                        <span class="fs-7">Description</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-info" data-bs-toggle="tab" href="#kt_vtab_pane_5">
                                    <span class="svg-icon svg-icon-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Link 2</span>
                                        <span class="fs-7">Description</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-danger" data-bs-toggle="tab" href="#kt_vtab_pane_6">
                                    <span class="svg-icon svg-icon-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Link 3</span>
                                        <span class="fs-7">Description</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    <!--begin::Wrapper-->
                    <!--begin::Illustration-->
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 10-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6 mb-5 mb-xl-10">
            <!--begin::Chart widget 8-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance Overview</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab" aria-selected="false" tabindex="-1" role="tab">Month</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab" aria-selected="true" role="tab">Week</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel" aria-labelledby="#kt_chart_widget_8_week_toggle">
                            <!--begin::Statistics-->
                            <div class="mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                    <span class="badge badge-light-success fs-base">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->4,8%</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-<gray-600 fs-6">Google Ads</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Items-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel" aria-labelledby="#kt_chart_widget_8_month_toggle">
                            <!--begin::Statistics-->
                            <div class="mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                    <span class="badge badge-light-success fs-base">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->2.2%</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px; min-height: 290px;"><div id="apexchartsdbdo4g3g" class="apexcharts-canvas apexchartsdbdo4g3g apexcharts-theme-light" style="width: 731px; height: 275px;"><svg id="SvgjsSvg3546" width="731" height="275" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3548" class="apexcharts-inner apexcharts-graphical" transform="translate(50.484375, 30)"><defs id="SvgjsDefs3547"><clipPath id="gridRectMaskdbdo4g3g"><rect id="SvgjsRect3554" width="664.515625" height="210.8" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdbdo4g3g"></clipPath><clipPath id="nonForecastMaskdbdo4g3g"></clipPath><clipPath id="gridRectMarkerMaskdbdo4g3g"><rect id="SvgjsRect3555" width="664.515625" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3553" width="0" height="210.8" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="1" stroke="#b6b6b6" stroke-dasharray="3" fill="#b1b9c4" class="apexcharts-xcrosshairs" y2="210.8" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3605" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3606" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3608" font-family="inherit" x="0" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3609">0</tspan><title>0</title></text><text id="SvgjsText3611" font-family="inherit" x="94.359375" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3612">100</tspan><title>100</title></text><text id="SvgjsText3614" font-family="inherit" x="188.71875" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3615">200</tspan><title>200</title></text><text id="SvgjsText3617" font-family="inherit" x="283.078125" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3618">300</tspan><title>300</title></text><text id="SvgjsText3620" font-family="inherit" x="377.4375" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3621">400</tspan><title>400</title></text><text id="SvgjsText3623" font-family="inherit" x="471.796875" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3624">500</tspan><title>500</title></text><text id="SvgjsText3626" font-family="inherit" x="566.15625" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3627">600</tspan><title>600</title></text><text id="SvgjsText3629" font-family="inherit" x="660.515625" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3630">700</tspan><title>700</title></text></g></g><g id="SvgjsG3657" class="apexcharts-grid"><g id="SvgjsG3658" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3668" x1="0" y1="0" x2="660.515625" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3669" x1="0" y1="30.114285714285717" x2="660.515625" y2="30.114285714285717" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3670" x1="0" y1="60.228571428571435" x2="660.515625" y2="60.228571428571435" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3671" x1="0" y1="90.34285714285716" x2="660.515625" y2="90.34285714285716" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3672" x1="0" y1="120.45714285714287" x2="660.515625" y2="120.45714285714287" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3673" x1="0" y1="150.57142857142858" x2="660.515625" y2="150.57142857142858" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3674" x1="0" y1="180.6857142857143" x2="660.515625" y2="180.6857142857143" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3675" x1="0" y1="210.80000000000004" x2="660.515625" y2="210.80000000000004" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3659" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3660" x1="0" y1="211.8" x2="0" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3661" x1="94.359375" y1="211.8" x2="94.359375" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3662" x1="188.71875" y1="211.8" x2="188.71875" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3663" x1="283.078125" y1="211.8" x2="283.078125" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3664" x1="377.4375" y1="211.8" x2="377.4375" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3665" x1="471.796875" y1="211.8" x2="471.796875" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3666" x1="566.15625" y1="211.8" x2="566.15625" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3667" x1="660.515625" y1="211.8" x2="660.515625" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3677" x1="0" y1="210.8" x2="660.515625" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3676" x1="0" y1="1" x2="0" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3556" class="apexcharts-bubble-series apexcharts-plot-series"><g id="SvgjsG3557" class="apexcharts-series" seriesName="SocialxCampaigns" data:longestSeries="true" rel="1" data:realIndex="0"><g id="SvgjsG3558" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG3560" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3561" r="0" cx="117.94921875" cy="120.45714285714286" class="apexcharts-marker w5a9ae78i" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="0"></circle><circle id="SvgjsCircle3562" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="0"></circle></g><g id="SvgjsG3563" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3564" r="35.13333333333333" cx="117.94921875" cy="120.45714285714286" x="113.94921875" y="116.45714285714286" fill="rgba(0,158,247,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="35.13333333333333" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3683" r="0" cx="0" cy="0" class="apexcharts-marker wbsbxv8kli" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3565" class="apexcharts-series" seriesName="EmailxNewsletter" data:longestSeries="true" rel="2" data:realIndex="1"><g id="SvgjsG3566" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG3568" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3569" r="0" cx="235.8984375" cy="105.4" class="apexcharts-marker wq4fc7i7t" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="0"></circle><circle id="SvgjsCircle3570" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="0"></circle></g><g id="SvgjsG3571" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3572" r="30.74166666666667" cx="235.8984375" cy="105.4" x="231.8984375" y="101.4" fill="rgba(80,205,137,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="30.74166666666667" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3684" r="0" cx="0" cy="0" class="apexcharts-marker wrq3x8s4z" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3573" class="apexcharts-series" seriesName="TVxCampaign" data:longestSeries="true" rel="3" data:realIndex="2"><g id="SvgjsG3574" class="apexcharts-series-markers-wrap" data:realIndex="2"><g id="SvgjsG3576" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3577" r="0" cx="330.2578125" cy="75.28571428571428" class="apexcharts-marker wb6q7l6qo" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="0"></circle><circle id="SvgjsCircle3578" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="0"></circle></g><g id="SvgjsG3579" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3580" r="26.35" cx="330.2578125" cy="75.28571428571428" x="326.2578125" y="71.28571428571428" fill="rgba(255,199,0,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3685" r="0" cx="0" cy="0" class="apexcharts-marker wm3g9po4of" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3581" class="apexcharts-series" seriesName="GooglexAds" data:longestSeries="true" rel="4" data:realIndex="3"><g id="SvgjsG3582" class="apexcharts-series-markers-wrap" data:realIndex="3"><g id="SvgjsG3584" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3585" r="0" cx="424.6171875" cy="135.51428571428573" class="apexcharts-marker w0ehk275q" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="0"></circle><circle id="SvgjsCircle3586" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="3" default-marker-size="0"></circle></g><g id="SvgjsG3587" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3588" r="21.958333333333336" cx="424.6171875" cy="135.51428571428573" x="420.6171875" y="131.51428571428573" fill="rgba(241,65,108,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="21.958333333333336" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3686" r="0" cx="0" cy="0" class="apexcharts-marker w22iqoshs" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3589" class="apexcharts-series" seriesName="Courses" data:longestSeries="true" rel="5" data:realIndex="4"><g id="SvgjsG3590" class="apexcharts-series-markers-wrap" data:realIndex="4"><g id="SvgjsG3592" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3593" r="0" cx="471.796875" cy="60.22857142857143" class="apexcharts-marker wqbdmsq53" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="0"></circle><circle id="SvgjsCircle3594" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="4" default-marker-size="0"></circle></g><g id="SvgjsG3595" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3596" r="26.35" cx="471.796875" cy="60.22857142857143" x="467.796875" y="56.22857142857143" fill="rgba(114,57,234,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3687" r="0" cx="0" cy="0" class="apexcharts-marker wwcyr65uc" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3597" class="apexcharts-series" seriesName="Radio" data:longestSeries="true" rel="6" data:realIndex="5"><g id="SvgjsG3598" class="apexcharts-series-markers-wrap" data:realIndex="5"><g id="SvgjsG3600" class="" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3601" r="0" cx="566.15625" cy="135.51428571428573" class="apexcharts-marker wu7zz93dv" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="0"></circle><circle id="SvgjsCircle3602" r="0" cx="117.94921875" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="5" default-marker-size="0"></circle></g><g id="SvgjsG3603" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskdbdo4g3g)"><circle id="SvgjsCircle3604" r="24.593333333333334" cx="566.15625" cy="135.51428571428573" x="562.15625" y="131.51428571428573" fill="rgba(67,206,215,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="24.593333333333334" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle3688" r="0" cx="0" cy="0" class="apexcharts-marker w8yv9y8b7" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3559" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG3567" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG3575" class="apexcharts-datalabels" data:realIndex="2"></g><g id="SvgjsG3583" class="apexcharts-datalabels" data:realIndex="3"></g><g id="SvgjsG3591" class="apexcharts-datalabels" data:realIndex="4"></g><g id="SvgjsG3599" class="apexcharts-datalabels" data:realIndex="5"></g></g><line id="SvgjsLine3678" x1="0" y1="0" x2="660.515625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3679" x1="0" y1="0" x2="660.515625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3680" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3681" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3682" class="apexcharts-point-annotations"></g><rect id="SvgjsRect3689" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect3690" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG3631" class="apexcharts-yaxis" rel="0" transform="translate(20.484375, 0)"><g id="SvgjsG3632" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3634" font-family="inherit" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3635">700</tspan><title>700</title></text><text id="SvgjsText3637" font-family="inherit" x="20" y="61.81428571428572" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3638">600</tspan><title>600</title></text><text id="SvgjsText3640" font-family="inherit" x="20" y="91.92857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3641">500</tspan><title>500</title></text><text id="SvgjsText3643" font-family="inherit" x="20" y="122.04285714285714" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3644">400</tspan><title>400</title></text><text id="SvgjsText3646" font-family="inherit" x="20" y="152.15714285714284" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3647">300</tspan><title>300</title></text><text id="SvgjsText3649" font-family="inherit" x="20" y="182.27142857142857" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3650">200</tspan><title>200</title></text><text id="SvgjsText3652" font-family="inherit" x="20" y="212.3857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3653">100</tspan><title>100</title></text><text id="SvgjsText3655" font-family="inherit" x="20" y="242.50000000000003" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3656">0</tspan><title>0</title></text></g></g><g id="SvgjsG3549" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 137.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 199, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 65, 108);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 206, 215);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Items-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6 mb-5 mb-xl-10">
            <!--begin::Tables widget 16-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="fonticon-drive fs-1 p-0"></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" role="tab" tabindex="-1">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="fonticon-bank fs-1 p-0"></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" role="tab" tabindex="-1">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="fonticon-like-1 fs-1 p-0"></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" role="tab" tabindex="-1">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="fonticon-remote-control fs-1 p-0"></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" role="tab" tabindex="-1">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="fonticon-telegram fs-1 p-0"></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts9sk5ltsy" class="apexcharts-canvas apexcharts9sk5ltsy apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3140" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3142" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3141"><clipPath id="gridRectMask9sk5ltsy"><rect id="SvgjsRect3146" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask9sk5ltsy"></clipPath><clipPath id="nonForecastMask9sk5ltsy"></clipPath><clipPath id="gridRectMarkerMask9sk5ltsy"><rect id="SvgjsRect3147" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3154" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3155" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3171" class="apexcharts-grid"><g id="SvgjsG3172" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3174" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3175" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3176" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3177" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3178" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3179" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3180" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3181" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3182" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3183" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3184" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3173" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3186" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3185" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3148" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3149" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3152" d="M 0 50L 0 36.666666666666664C 2.483653846153846 36.666666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 37.5 14.192307692307693 37.5C 16.67596153846154 37.5 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9sk5ltsy)" pathTo="M 0 50L 0 36.666666666666664C 2.483653846153846 36.666666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 37.5 14.192307692307693 37.5C 16.67596153846154 37.5 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3153" d="M 0 36.666666666666664C 2.483653846153846 36.666666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 37.5 14.192307692307693 37.5C 16.67596153846154 37.5 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9sk5ltsy)" pathTo="M 0 36.666666666666664C 2.483653846153846 36.666666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 37.5 14.192307692307693 37.5C 16.67596153846154 37.5 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3150" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3151" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3187" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3188" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3189" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3190" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3191" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3170" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3143" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-2.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsx1nzwhfg" class="apexcharts-canvas apexchartsx1nzwhfg apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3192" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3194" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3193"><clipPath id="gridRectMaskx1nzwhfg"><rect id="SvgjsRect3198" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskx1nzwhfg"></clipPath><clipPath id="nonForecastMaskx1nzwhfg"></clipPath><clipPath id="gridRectMarkerMaskx1nzwhfg"><rect id="SvgjsRect3199" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3206" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3207" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3223" class="apexcharts-grid"><g id="SvgjsG3224" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3226" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3227" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3228" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3229" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3230" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3231" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3232" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3233" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3234" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3235" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3236" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3225" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3238" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3237" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3200" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3201" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3204" d="M 0 50L 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 37.5 49.67307692307693 37.5C 52.156730769230776 37.5 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1nzwhfg)" pathTo="M 0 50L 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 37.5 49.67307692307693 37.5C 52.156730769230776 37.5 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3205" d="M 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 37.5 49.67307692307693 37.5C 52.156730769230776 37.5 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1nzwhfg)" pathTo="M 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 37.5 49.67307692307693 37.5C 52.156730769230776 37.5 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3202" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3203" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3239" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3240" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3241" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3242" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3243" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3222" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3195" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsh0xuok8vf" class="apexcharts-canvas apexchartsh0xuok8vf apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3244" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3246" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3245"><clipPath id="gridRectMaskh0xuok8vf"><rect id="SvgjsRect3250" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskh0xuok8vf"></clipPath><clipPath id="nonForecastMaskh0xuok8vf"></clipPath><clipPath id="gridRectMarkerMaskh0xuok8vf"><rect id="SvgjsRect3251" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3258" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3259" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3275" class="apexcharts-grid"><g id="SvgjsG3276" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3278" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3279" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3280" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3281" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3282" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3283" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3284" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3285" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3286" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3287" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3288" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3277" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3290" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3289" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3252" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3253" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3256" d="M 0 50L 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45 7.096153846153847 45C 9.579807692307693 45 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh0xuok8vf)" pathTo="M 0 50L 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45 7.096153846153847 45C 9.579807692307693 45 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3257" d="M 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45 7.096153846153847 45C 9.579807692307693 45 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh0xuok8vf)" pathTo="M 0 43.333333333333336C 2.483653846153846 43.333333333333336 4.612500000000001 45 7.096153846153847 45C 9.579807692307693 45 11.708653846153847 36.666666666666664 14.192307692307693 36.666666666666664C 16.67596153846154 36.666666666666664 18.804807692307694 47.5 21.28846153846154 47.5C 23.772115384615386 47.5 25.90096153846154 30.833333333333332 28.384615384615387 30.833333333333332C 30.868269230769233 30.833333333333332 32.997115384615384 36.666666666666664 35.48076923076923 36.666666666666664C 37.96442307692308 36.666666666666664 40.09326923076924 40.83333333333333 42.57692307692308 40.83333333333333C 45.06057692307692 40.83333333333333 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 47.5 56.769230769230774 47.5C 59.252884615384616 47.5 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 37.5 70.96153846153847 37.5C 73.44519230769231 37.5 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 35.83333333333333 85.15384615384616 35.83333333333333C 87.6375 35.83333333333333 89.76634615384616 42.5 92.25 42.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3254" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3255" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3291" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3292" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3293" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3294" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3295" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3274" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3247" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-7.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts4osy4emy" class="apexcharts-canvas apexcharts4osy4emy apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3296" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3298" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3297"><clipPath id="gridRectMask4osy4emy"><rect id="SvgjsRect3302" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask4osy4emy"></clipPath><clipPath id="nonForecastMask4osy4emy"></clipPath><clipPath id="gridRectMarkerMask4osy4emy"><rect id="SvgjsRect3303" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3310" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3311" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3327" class="apexcharts-grid"><g id="SvgjsG3328" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3330" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3331" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3332" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3333" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3334" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3335" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3336" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3337" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3338" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3339" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3340" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3329" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3342" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3341" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3304" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3305" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3308" d="M 0 50L 0 40C 2.483653846153846 40 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 40 21.28846153846154 40C 23.772115384615386 40 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 33.33333333333333 49.67307692307693 33.33333333333333C 52.156730769230776 33.33333333333333 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 39.166666666666664 78.0576923076923 39.166666666666664C 80.54134615384615 39.166666666666664 82.67019230769232 35 85.15384615384616 35C 87.6375 35 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4osy4emy)" pathTo="M 0 50L 0 40C 2.483653846153846 40 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 40 21.28846153846154 40C 23.772115384615386 40 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 33.33333333333333 49.67307692307693 33.33333333333333C 52.156730769230776 33.33333333333333 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 39.166666666666664 78.0576923076923 39.166666666666664C 80.54134615384615 39.166666666666664 82.67019230769232 35 85.15384615384616 35C 87.6375 35 89.76634615384616 42.5 92.25 42.5C 92.25 42.5 92.25 42.5 92.25 50M 92.25 42.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3309" d="M 0 40C 2.483653846153846 40 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 40 21.28846153846154 40C 23.772115384615386 40 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 33.33333333333333 49.67307692307693 33.33333333333333C 52.156730769230776 33.33333333333333 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 39.166666666666664 78.0576923076923 39.166666666666664C 80.54134615384615 39.166666666666664 82.67019230769232 35 85.15384615384616 35C 87.6375 35 89.76634615384616 42.5 92.25 42.5" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4osy4emy)" pathTo="M 0 40C 2.483653846153846 40 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 40 21.28846153846154 40C 23.772115384615386 40 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 33.33333333333333 49.67307692307693 33.33333333333333C 52.156730769230776 33.33333333333333 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 39.166666666666664 78.0576923076923 39.166666666666664C 80.54134615384615 39.166666666666664 82.67019230769232 35 85.15384615384616 35C 87.6375 35 89.76634615384616 42.5 92.25 42.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3306" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3307" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3343" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3344" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3345" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3346" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3347" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3326" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3299" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_2">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-25.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsl3vx7i4l" class="apexcharts-canvas apexchartsl3vx7i4l" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3691" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3694" class="apexcharts-annotations"></g><g id="SvgjsG3693" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3692"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-24.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsmskgy7ox" class="apexcharts-canvas apexchartsmskgy7ox" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3695" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3698" class="apexcharts-annotations"></g><g id="SvgjsG3697" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3696"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-20.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsc4udn8wc" class="apexcharts-canvas apexchartsc4udn8wc" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3699" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3702" class="apexcharts-annotations"></g><g id="SvgjsG3701" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3700"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-17.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts0ugfrn1o" class="apexcharts-canvas apexcharts0ugfrn1o" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3703" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3706" class="apexcharts-annotations"></g><g id="SvgjsG3705" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3704"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-11.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">New York</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartspfojigt2" class="apexcharts-canvas apexchartspfojigt2" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3707" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3710" class="apexcharts-annotations"></g><g id="SvgjsG3709" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3708"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-23.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsx04dhgbyh" class="apexcharts-canvas apexchartsx04dhgbyh" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3711" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3714" class="apexcharts-annotations"></g><g id="SvgjsG3713" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3712"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-4.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsjinw912k" class="apexcharts-canvas apexchartsjinw912k" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3715" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3718" class="apexcharts-annotations"></g><g id="SvgjsG3717" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3716"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-1.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts4ioxctlti" class="apexcharts-canvas apexcharts4ioxctlti" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3719" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3722" class="apexcharts-annotations"></g><g id="SvgjsG3721" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3720"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_4">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-12.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartszxjcxwvb" class="apexcharts-canvas apexchartszxjcxwvb" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3723" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3726" class="apexcharts-annotations"></g><g id="SvgjsG3725" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3724"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-21.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts9kp5iw65" class="apexcharts-canvas apexcharts9kp5iw65" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3727" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3730" class="apexcharts-annotations"></g><g id="SvgjsG3729" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3728"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-30.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsif7ea9ti" class="apexcharts-canvas apexchartsif7ea9ti" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3731" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3734" class="apexcharts-annotations"></g><g id="SvgjsG3733" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3732"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts0oan2zpr" class="apexcharts-canvas apexcharts0oan2zpr" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3735" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3738" class="apexcharts-annotations"></g><g id="SvgjsG3737" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3736"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_5">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-6.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartslnrl9yq2" class="apexcharts-canvas apexchartslnrl9yq2" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3739" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3742" class="apexcharts-annotations"></g><g id="SvgjsG3741" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3740"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-10.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts9d77nce0k" class="apexcharts-canvas apexcharts9d77nce0k" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3743" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3746" class="apexcharts-annotations"></g><g id="SvgjsG3745" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3744"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartspct2z8o8" class="apexcharts-canvas apexchartspct2z8o8" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3747" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3750" class="apexcharts-annotations"></g><g id="SvgjsG3749" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3748"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartst05cmfzf" class="apexcharts-canvas apexchartst05cmfzf" style="width: 0px; height: 50px;"><svg id="SvgjsSvg3751" width="0" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3754" class="apexcharts-annotations"></g><g id="SvgjsG3753" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3752"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--end::Table container-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Tables widget 16-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Card widget 18-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body py-9">
                    <!--begin::Row-->
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('/metronic8/demo1/assets/media/stock/600x600/img-65.jpg')"></div>
                            <!--end::Image-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column h-100">
                                <!--begin::Header-->
                                <div class="mb-7">
                                    <!--begin::Headin-->
                                    <div class="d-flex flex-stack mb-6">
                                        <!--begin::Title-->
                                        <div class="flex-shrink-0 me-5">
                                            <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                            <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                        </div>
                                        <!--end::Title-->
                                        <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Items-->
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
                                                <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label bg-success">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
                                                <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="mb-6">
                                    <!--begin::Text-->
                                    <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                    <!--end::Text-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                            <!--begin::Date-->
                                            <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                            <!--end::Date-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                            <!--begin::Number-->
                                            <span class="fs-6 text-gray-700 fw-bold">$
                                            <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold text-gray-400">Budget</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-3.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                    </div>
                                    <!--end::Users group-->
                                    <!--begin::Actions-->
                                    <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                    <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                            <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                            <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 18-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Chart widget 36-->
            <div class="card card-flush overflow-hidden h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">12 Nov 2022</div>
                            <!--end::Display range-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                            <span class="svg-icon svg-icon-1 ms-2 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end p-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartscla95gpn" class="apexcharts-canvas apexchartscla95gpn apexcharts-theme-light" style="width: 740.5px; height: 300px;"><svg id="SvgjsSvg3407" width="740.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3409" class="apexcharts-inner apexcharts-graphical" transform="translate(47.835205078125, 30)"><defs id="SvgjsDefs3408"><clipPath id="gridRectMaskcla95gpn"><rect id="SvgjsRect3414" width="689.664794921875" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcla95gpn"></clipPath><clipPath id="nonForecastMaskcla95gpn"></clipPath><clipPath id="gridRectMarkerMaskcla95gpn"><rect id="SvgjsRect3415" width="686.664794921875" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient3420" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3421" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop3422" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop3423" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient3429" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3430" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop><stop id="SvgjsStop3431" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop3432" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG3435" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3436" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText3438" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3439"></tspan><title></title></text><text id="SvgjsText3441" font-family="inherit" x="37.92582194010417" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3442"></tspan><title></title></text><text id="SvgjsText3444" font-family="inherit" x="75.85164388020833" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3445"></tspan><title></title></text><text id="SvgjsText3447" font-family="inherit" x="113.77746582031249" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 114.7774658203125 239.32000732421875)"><tspan id="SvgjsTspan3448">9 AM</tspan><title>9 AM</title></text><text id="SvgjsText3450" font-family="inherit" x="151.70328776041663" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3451"></tspan><title></title></text><text id="SvgjsText3453" font-family="inherit" x="189.6291097005208" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3454"></tspan><title></title></text><text id="SvgjsText3456" font-family="inherit" x="227.55493164062494" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 228.554931640625 239.32000732421875)"><tspan id="SvgjsTspan3457">12 PM</tspan><title>12 PM</title></text><text id="SvgjsText3459" font-family="inherit" x="265.48075358072913" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3460"></tspan><title></title></text><text id="SvgjsText3462" font-family="inherit" x="303.4065755208333" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3463"></tspan><title></title></text><text id="SvgjsText3465" font-family="inherit" x="341.3323974609375" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 342.3323974609375 239.32000732421875)"><tspan id="SvgjsTspan3466">15 PM</tspan><title>15 PM</title></text><text id="SvgjsText3468" font-family="inherit" x="379.2582194010417" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3469"></tspan><title></title></text><text id="SvgjsText3471" font-family="inherit" x="417.18404134114587" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3472"></tspan><title></title></text><text id="SvgjsText3474" font-family="inherit" x="455.10986328125006" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 456.10986328125 239.32000732421875)"><tspan id="SvgjsTspan3475">18 PM</tspan><title>18 PM</title></text><text id="SvgjsText3477" font-family="inherit" x="493.03568522135424" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3478"></tspan><title></title></text><text id="SvgjsText3480" font-family="inherit" x="530.9615071614584" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3481"></tspan><title></title></text><text id="SvgjsText3483" font-family="inherit" x="568.8873291015625" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 569.8873291015625 239.32000732421875)"><tspan id="SvgjsTspan3484">19 PM</tspan><title>19 PM</title></text><text id="SvgjsText3486" font-family="inherit" x="606.8131510416666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3487"></tspan><title></title></text><text id="SvgjsText3489" font-family="inherit" x="644.7389729817708" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3490"></tspan><title></title></text><text id="SvgjsText3492" font-family="inherit" x="682.6647949218749" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan3493"></tspan><title></title></text></g></g><g id="SvgjsG3517" class="apexcharts-grid"><g id="SvgjsG3518" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3520" x1="0" y1="0" x2="682.664794921875" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3521" x1="0" y1="36.97" x2="682.664794921875" y2="36.97" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3522" x1="0" y1="73.94" x2="682.664794921875" y2="73.94" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3523" x1="0" y1="110.91" x2="682.664794921875" y2="110.91" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3524" x1="0" y1="147.88" x2="682.664794921875" y2="147.88" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3525" x1="0" y1="184.85" x2="682.664794921875" y2="184.85" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3526" x1="0" y1="221.82" x2="682.664794921875" y2="221.82" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3519" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3528" x1="0" y1="221.82" x2="682.664794921875" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3527" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3416" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3417" class="apexcharts-series" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3424" d="M 0 221.82L 0 135.55666666666667C 13.274037679036457 135.55666666666667 24.651784261067707 98.58666666666667 37.925821940104164 98.58666666666667C 51.199859619140625 98.58666666666667 62.577606201171875 98.58666666666667 75.85164388020833 98.58666666666667C 89.12568155924478 98.58666666666667 100.50342814127605 147.88 113.7774658203125 147.88C 127.05150349934895 147.88 138.4292500813802 147.88 151.70328776041666 147.88C 164.97732543945312 147.88 176.35507202148438 184.85 189.62910970052084 184.85C 202.9031473795573 184.85 214.28089396158856 184.85 227.554931640625 184.85C 240.82896931966147 184.85 252.20671590169272 98.58666666666667 265.4807535807292 98.58666666666667C 278.7547912597656 98.58666666666667 290.1325378417969 98.58666666666667 303.4065755208333 98.58666666666667C 316.68061319986975 98.58666666666667 328.05835978190106 123.23333333333335 341.3323974609375 123.23333333333335C 354.60643513997394 123.23333333333335 365.98418172200525 123.23333333333335 379.2582194010417 123.23333333333335C 392.5322570800781 123.23333333333335 403.9100036621094 73.94 417.1840413411458 73.94C 430.45807902018225 73.94 441.83582560221356 73.94 455.10986328125 73.94C 468.38390096028644 73.94 479.76164754231775 98.58666666666667 493.0356852213542 98.58666666666667C 506.3097229003906 98.58666666666667 517.6874694824219 98.58666666666667 530.9615071614584 98.58666666666667C 544.2355448404949 98.58666666666667 555.613291422526 98.58666666666667 568.8873291015625 98.58666666666667C 582.161366780599 98.58666666666667 593.5391133626301 147.88 606.8131510416666 147.88C 620.0871887207031 147.88 631.4649353027344 147.88 644.7389729817709 147.88C 658.0130106608074 147.88 669.3907572428385 172.52666666666667 682.664794921875 172.52666666666667C 682.664794921875 172.52666666666667 682.664794921875 172.52666666666667 682.664794921875 221.82M 682.664794921875 172.52666666666667z" fill="url(#SvgjsLinearGradient3420)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcla95gpn)" pathTo="M 0 221.82L 0 135.55666666666667C 13.274037679036457 135.55666666666667 24.651784261067707 98.58666666666667 37.925821940104164 98.58666666666667C 51.199859619140625 98.58666666666667 62.577606201171875 98.58666666666667 75.85164388020833 98.58666666666667C 89.12568155924478 98.58666666666667 100.50342814127605 147.88 113.7774658203125 147.88C 127.05150349934895 147.88 138.4292500813802 147.88 151.70328776041666 147.88C 164.97732543945312 147.88 176.35507202148438 184.85 189.62910970052084 184.85C 202.9031473795573 184.85 214.28089396158856 184.85 227.554931640625 184.85C 240.82896931966147 184.85 252.20671590169272 98.58666666666667 265.4807535807292 98.58666666666667C 278.7547912597656 98.58666666666667 290.1325378417969 98.58666666666667 303.4065755208333 98.58666666666667C 316.68061319986975 98.58666666666667 328.05835978190106 123.23333333333335 341.3323974609375 123.23333333333335C 354.60643513997394 123.23333333333335 365.98418172200525 123.23333333333335 379.2582194010417 123.23333333333335C 392.5322570800781 123.23333333333335 403.9100036621094 73.94 417.1840413411458 73.94C 430.45807902018225 73.94 441.83582560221356 73.94 455.10986328125 73.94C 468.38390096028644 73.94 479.76164754231775 98.58666666666667 493.0356852213542 98.58666666666667C 506.3097229003906 98.58666666666667 517.6874694824219 98.58666666666667 530.9615071614584 98.58666666666667C 544.2355448404949 98.58666666666667 555.613291422526 98.58666666666667 568.8873291015625 98.58666666666667C 582.161366780599 98.58666666666667 593.5391133626301 147.88 606.8131510416666 147.88C 620.0871887207031 147.88 631.4649353027344 147.88 644.7389729817709 147.88C 658.0130106608074 147.88 669.3907572428385 172.52666666666667 682.664794921875 172.52666666666667C 682.664794921875 172.52666666666667 682.664794921875 172.52666666666667 682.664794921875 221.82M 682.664794921875 172.52666666666667z" pathFrom="M -1 295.76L -1 295.76L 37.925821940104164 295.76L 75.85164388020833 295.76L 113.7774658203125 295.76L 151.70328776041666 295.76L 189.62910970052084 295.76L 227.554931640625 295.76L 265.4807535807292 295.76L 303.4065755208333 295.76L 341.3323974609375 295.76L 379.2582194010417 295.76L 417.1840413411458 295.76L 455.10986328125 295.76L 493.0356852213542 295.76L 530.9615071614584 295.76L 568.8873291015625 295.76L 606.8131510416666 295.76L 644.7389729817709 295.76L 682.664794921875 295.76"></path><path id="SvgjsPath3425" d="M 0 135.55666666666667C 13.274037679036457 135.55666666666667 24.651784261067707 98.58666666666667 37.925821940104164 98.58666666666667C 51.199859619140625 98.58666666666667 62.577606201171875 98.58666666666667 75.85164388020833 98.58666666666667C 89.12568155924478 98.58666666666667 100.50342814127605 147.88 113.7774658203125 147.88C 127.05150349934895 147.88 138.4292500813802 147.88 151.70328776041666 147.88C 164.97732543945312 147.88 176.35507202148438 184.85 189.62910970052084 184.85C 202.9031473795573 184.85 214.28089396158856 184.85 227.554931640625 184.85C 240.82896931966147 184.85 252.20671590169272 98.58666666666667 265.4807535807292 98.58666666666667C 278.7547912597656 98.58666666666667 290.1325378417969 98.58666666666667 303.4065755208333 98.58666666666667C 316.68061319986975 98.58666666666667 328.05835978190106 123.23333333333335 341.3323974609375 123.23333333333335C 354.60643513997394 123.23333333333335 365.98418172200525 123.23333333333335 379.2582194010417 123.23333333333335C 392.5322570800781 123.23333333333335 403.9100036621094 73.94 417.1840413411458 73.94C 430.45807902018225 73.94 441.83582560221356 73.94 455.10986328125 73.94C 468.38390096028644 73.94 479.76164754231775 98.58666666666667 493.0356852213542 98.58666666666667C 506.3097229003906 98.58666666666667 517.6874694824219 98.58666666666667 530.9615071614584 98.58666666666667C 544.2355448404949 98.58666666666667 555.613291422526 98.58666666666667 568.8873291015625 98.58666666666667C 582.161366780599 98.58666666666667 593.5391133626301 147.88 606.8131510416666 147.88C 620.0871887207031 147.88 631.4649353027344 147.88 644.7389729817709 147.88C 658.0130106608074 147.88 669.3907572428385 172.52666666666667 682.664794921875 172.52666666666667" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcla95gpn)" pathTo="M 0 135.55666666666667C 13.274037679036457 135.55666666666667 24.651784261067707 98.58666666666667 37.925821940104164 98.58666666666667C 51.199859619140625 98.58666666666667 62.577606201171875 98.58666666666667 75.85164388020833 98.58666666666667C 89.12568155924478 98.58666666666667 100.50342814127605 147.88 113.7774658203125 147.88C 127.05150349934895 147.88 138.4292500813802 147.88 151.70328776041666 147.88C 164.97732543945312 147.88 176.35507202148438 184.85 189.62910970052084 184.85C 202.9031473795573 184.85 214.28089396158856 184.85 227.554931640625 184.85C 240.82896931966147 184.85 252.20671590169272 98.58666666666667 265.4807535807292 98.58666666666667C 278.7547912597656 98.58666666666667 290.1325378417969 98.58666666666667 303.4065755208333 98.58666666666667C 316.68061319986975 98.58666666666667 328.05835978190106 123.23333333333335 341.3323974609375 123.23333333333335C 354.60643513997394 123.23333333333335 365.98418172200525 123.23333333333335 379.2582194010417 123.23333333333335C 392.5322570800781 123.23333333333335 403.9100036621094 73.94 417.1840413411458 73.94C 430.45807902018225 73.94 441.83582560221356 73.94 455.10986328125 73.94C 468.38390096028644 73.94 479.76164754231775 98.58666666666667 493.0356852213542 98.58666666666667C 506.3097229003906 98.58666666666667 517.6874694824219 98.58666666666667 530.9615071614584 98.58666666666667C 544.2355448404949 98.58666666666667 555.613291422526 98.58666666666667 568.8873291015625 98.58666666666667C 582.161366780599 98.58666666666667 593.5391133626301 147.88 606.8131510416666 147.88C 620.0871887207031 147.88 631.4649353027344 147.88 644.7389729817709 147.88C 658.0130106608074 147.88 669.3907572428385 172.52666666666667 682.664794921875 172.52666666666667" pathFrom="M -1 295.76L -1 295.76L 37.925821940104164 295.76L 75.85164388020833 295.76L 113.7774658203125 295.76L 151.70328776041666 295.76L 189.62910970052084 295.76L 227.554931640625 295.76L 265.4807535807292 295.76L 303.4065755208333 295.76L 341.3323974609375 295.76L 379.2582194010417 295.76L 417.1840413411458 295.76L 455.10986328125 295.76L 493.0356852213542 295.76L 530.9615071614584 295.76L 568.8873291015625 295.76L 606.8131510416666 295.76L 644.7389729817709 295.76L 682.664794921875 295.76"></path><g id="SvgjsG3418" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3536" r="0" cx="0" cy="0" class="apexcharts-marker wgkafivmx no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3426" class="apexcharts-series" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath3433" d="M 0 221.82L 0 73.94C 13.274037679036457 73.94 24.651784261067707 24.646666666666704 37.925821940104164 24.646666666666704C 51.199859619140625 24.646666666666704 62.577606201171875 24.646666666666704 75.85164388020833 24.646666666666704C 89.12568155924478 24.646666666666704 100.50342814127605 61.616666666666674 113.7774658203125 61.616666666666674C 127.05150349934895 61.616666666666674 138.4292500813802 61.616666666666674 151.70328776041666 61.616666666666674C 164.97732543945312 61.616666666666674 176.35507202148438 86.26333333333335 189.62910970052084 86.26333333333335C 202.9031473795573 86.26333333333335 214.28089396158856 86.26333333333335 227.554931640625 86.26333333333335C 240.82896931966147 86.26333333333335 252.20671590169272 61.616666666666674 265.4807535807292 61.616666666666674C 278.7547912597656 61.616666666666674 290.1325378417969 61.616666666666674 303.4065755208333 61.616666666666674C 316.68061319986975 61.616666666666674 328.05835978190106 12.323333333333323 341.3323974609375 12.323333333333323C 354.60643513997394 12.323333333333323 365.98418172200525 12.323333333333323 379.2582194010417 12.323333333333323C 392.5322570800781 12.323333333333323 403.9100036621094 49.29333333333335 417.1840413411458 49.29333333333335C 430.45807902018225 49.29333333333335 441.83582560221356 49.29333333333335 455.10986328125 49.29333333333335C 468.38390096028644 49.29333333333335 479.76164754231775 12.323333333333323 493.0356852213542 12.323333333333323C 506.3097229003906 12.323333333333323 517.6874694824219 12.323333333333323 530.9615071614584 12.323333333333323C 544.2355448404949 12.323333333333323 555.613291422526 61.616666666666674 568.8873291015625 61.616666666666674C 582.161366780599 61.616666666666674 593.5391133626301 61.616666666666674 606.8131510416666 61.616666666666674C 620.0871887207031 61.616666666666674 631.4649353027344 86.26333333333335 644.7389729817709 86.26333333333335C 658.0130106608074 86.26333333333335 669.3907572428385 86.26333333333335 682.664794921875 86.26333333333335C 682.664794921875 86.26333333333335 682.664794921875 86.26333333333335 682.664794921875 221.82M 682.664794921875 86.26333333333335z" fill="url(#SvgjsLinearGradient3429)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcla95gpn)" pathTo="M 0 221.82L 0 73.94C 13.274037679036457 73.94 24.651784261067707 24.646666666666704 37.925821940104164 24.646666666666704C 51.199859619140625 24.646666666666704 62.577606201171875 24.646666666666704 75.85164388020833 24.646666666666704C 89.12568155924478 24.646666666666704 100.50342814127605 61.616666666666674 113.7774658203125 61.616666666666674C 127.05150349934895 61.616666666666674 138.4292500813802 61.616666666666674 151.70328776041666 61.616666666666674C 164.97732543945312 61.616666666666674 176.35507202148438 86.26333333333335 189.62910970052084 86.26333333333335C 202.9031473795573 86.26333333333335 214.28089396158856 86.26333333333335 227.554931640625 86.26333333333335C 240.82896931966147 86.26333333333335 252.20671590169272 61.616666666666674 265.4807535807292 61.616666666666674C 278.7547912597656 61.616666666666674 290.1325378417969 61.616666666666674 303.4065755208333 61.616666666666674C 316.68061319986975 61.616666666666674 328.05835978190106 12.323333333333323 341.3323974609375 12.323333333333323C 354.60643513997394 12.323333333333323 365.98418172200525 12.323333333333323 379.2582194010417 12.323333333333323C 392.5322570800781 12.323333333333323 403.9100036621094 49.29333333333335 417.1840413411458 49.29333333333335C 430.45807902018225 49.29333333333335 441.83582560221356 49.29333333333335 455.10986328125 49.29333333333335C 468.38390096028644 49.29333333333335 479.76164754231775 12.323333333333323 493.0356852213542 12.323333333333323C 506.3097229003906 12.323333333333323 517.6874694824219 12.323333333333323 530.9615071614584 12.323333333333323C 544.2355448404949 12.323333333333323 555.613291422526 61.616666666666674 568.8873291015625 61.616666666666674C 582.161366780599 61.616666666666674 593.5391133626301 61.616666666666674 606.8131510416666 61.616666666666674C 620.0871887207031 61.616666666666674 631.4649353027344 86.26333333333335 644.7389729817709 86.26333333333335C 658.0130106608074 86.26333333333335 669.3907572428385 86.26333333333335 682.664794921875 86.26333333333335C 682.664794921875 86.26333333333335 682.664794921875 86.26333333333335 682.664794921875 221.82M 682.664794921875 86.26333333333335z" pathFrom="M -1 295.76L -1 295.76L 37.925821940104164 295.76L 75.85164388020833 295.76L 113.7774658203125 295.76L 151.70328776041666 295.76L 189.62910970052084 295.76L 227.554931640625 295.76L 265.4807535807292 295.76L 303.4065755208333 295.76L 341.3323974609375 295.76L 379.2582194010417 295.76L 417.1840413411458 295.76L 455.10986328125 295.76L 493.0356852213542 295.76L 530.9615071614584 295.76L 568.8873291015625 295.76L 606.8131510416666 295.76L 644.7389729817709 295.76L 682.664794921875 295.76"></path><path id="SvgjsPath3434" d="M 0 73.94C 13.274037679036457 73.94 24.651784261067707 24.646666666666704 37.925821940104164 24.646666666666704C 51.199859619140625 24.646666666666704 62.577606201171875 24.646666666666704 75.85164388020833 24.646666666666704C 89.12568155924478 24.646666666666704 100.50342814127605 61.616666666666674 113.7774658203125 61.616666666666674C 127.05150349934895 61.616666666666674 138.4292500813802 61.616666666666674 151.70328776041666 61.616666666666674C 164.97732543945312 61.616666666666674 176.35507202148438 86.26333333333335 189.62910970052084 86.26333333333335C 202.9031473795573 86.26333333333335 214.28089396158856 86.26333333333335 227.554931640625 86.26333333333335C 240.82896931966147 86.26333333333335 252.20671590169272 61.616666666666674 265.4807535807292 61.616666666666674C 278.7547912597656 61.616666666666674 290.1325378417969 61.616666666666674 303.4065755208333 61.616666666666674C 316.68061319986975 61.616666666666674 328.05835978190106 12.323333333333323 341.3323974609375 12.323333333333323C 354.60643513997394 12.323333333333323 365.98418172200525 12.323333333333323 379.2582194010417 12.323333333333323C 392.5322570800781 12.323333333333323 403.9100036621094 49.29333333333335 417.1840413411458 49.29333333333335C 430.45807902018225 49.29333333333335 441.83582560221356 49.29333333333335 455.10986328125 49.29333333333335C 468.38390096028644 49.29333333333335 479.76164754231775 12.323333333333323 493.0356852213542 12.323333333333323C 506.3097229003906 12.323333333333323 517.6874694824219 12.323333333333323 530.9615071614584 12.323333333333323C 544.2355448404949 12.323333333333323 555.613291422526 61.616666666666674 568.8873291015625 61.616666666666674C 582.161366780599 61.616666666666674 593.5391133626301 61.616666666666674 606.8131510416666 61.616666666666674C 620.0871887207031 61.616666666666674 631.4649353027344 86.26333333333335 644.7389729817709 86.26333333333335C 658.0130106608074 86.26333333333335 669.3907572428385 86.26333333333335 682.664794921875 86.26333333333335" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcla95gpn)" pathTo="M 0 73.94C 13.274037679036457 73.94 24.651784261067707 24.646666666666704 37.925821940104164 24.646666666666704C 51.199859619140625 24.646666666666704 62.577606201171875 24.646666666666704 75.85164388020833 24.646666666666704C 89.12568155924478 24.646666666666704 100.50342814127605 61.616666666666674 113.7774658203125 61.616666666666674C 127.05150349934895 61.616666666666674 138.4292500813802 61.616666666666674 151.70328776041666 61.616666666666674C 164.97732543945312 61.616666666666674 176.35507202148438 86.26333333333335 189.62910970052084 86.26333333333335C 202.9031473795573 86.26333333333335 214.28089396158856 86.26333333333335 227.554931640625 86.26333333333335C 240.82896931966147 86.26333333333335 252.20671590169272 61.616666666666674 265.4807535807292 61.616666666666674C 278.7547912597656 61.616666666666674 290.1325378417969 61.616666666666674 303.4065755208333 61.616666666666674C 316.68061319986975 61.616666666666674 328.05835978190106 12.323333333333323 341.3323974609375 12.323333333333323C 354.60643513997394 12.323333333333323 365.98418172200525 12.323333333333323 379.2582194010417 12.323333333333323C 392.5322570800781 12.323333333333323 403.9100036621094 49.29333333333335 417.1840413411458 49.29333333333335C 430.45807902018225 49.29333333333335 441.83582560221356 49.29333333333335 455.10986328125 49.29333333333335C 468.38390096028644 49.29333333333335 479.76164754231775 12.323333333333323 493.0356852213542 12.323333333333323C 506.3097229003906 12.323333333333323 517.6874694824219 12.323333333333323 530.9615071614584 12.323333333333323C 544.2355448404949 12.323333333333323 555.613291422526 61.616666666666674 568.8873291015625 61.616666666666674C 582.161366780599 61.616666666666674 593.5391133626301 61.616666666666674 606.8131510416666 61.616666666666674C 620.0871887207031 61.616666666666674 631.4649353027344 86.26333333333335 644.7389729817709 86.26333333333335C 658.0130106608074 86.26333333333335 669.3907572428385 86.26333333333335 682.664794921875 86.26333333333335" pathFrom="M -1 295.76L -1 295.76L 37.925821940104164 295.76L 75.85164388020833 295.76L 113.7774658203125 295.76L 151.70328776041666 295.76L 189.62910970052084 295.76L 227.554931640625 295.76L 265.4807535807292 295.76L 303.4065755208333 295.76L 341.3323974609375 295.76L 379.2582194010417 295.76L 417.1840413411458 295.76L 455.10986328125 295.76L 493.0356852213542 295.76L 530.9615071614584 295.76L 568.8873291015625 295.76L 606.8131510416666 295.76L 644.7389729817709 295.76L 682.664794921875 295.76"></path><g id="SvgjsG3427" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3537" r="0" cx="0" cy="0" class="apexcharts-marker wb6stzzgx no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3419" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG3428" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine3530" x1="0" y1="0" x2="0" y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine3531" x1="0" y1="0" x2="682.664794921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3532" x1="0" y1="0" x2="682.664794921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3533" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3534" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3535" class="apexcharts-point-annotations"></g><rect id="SvgjsRect3538" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect3539" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG3494" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)"><g id="SvgjsG3495" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3497" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3498">120</tspan><title>120</title></text><text id="SvgjsText3500" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3501">105</tspan><title>105</title></text><text id="SvgjsText3503" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3504">90</tspan><title>90</title></text><text id="SvgjsText3506" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3507">75</tspan><title>75</title></text><text id="SvgjsText3509" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3510">60</tspan><title>60</title></text><text id="SvgjsText3512" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3513">45</tspan><title>45</title></text><text id="SvgjsText3515" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3516">30</tspan><title>30</title></text></g></g><rect id="SvgjsRect3529" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3410" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 36-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart Widget 35-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-6">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Currency-->
                            <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                            <!--end::Currency-->
                            <!--begin::Value-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->9.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                        <!--end::Description-->
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0 px-0">
                    <!--begin::Nav-->
                    <ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">1d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1" role="tab">5d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1" role="tab">1m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1" role="tab">6m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1" role="tab">1y</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content mt-n6">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_1">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;"><div id="apexcharts8a40vkym" class="apexcharts-canvas apexcharts8a40vkym apexcharts-theme-light" style="width: 474.75px; height: 200px;"><svg id="SvgjsSvg3349" width="474.75" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3351" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs3350"><clipPath id="gridRectMask8a40vkym"><rect id="SvgjsRect3354" width="449.75" height="158" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8a40vkym"></clipPath><clipPath id="nonForecastMask8a40vkym"></clipPath><clipPath id="gridRectMarkerMask8a40vkym"><rect id="SvgjsRect3355" width="446.75" height="159" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient3360" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3361" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop3362" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop3363" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG3366" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG3367" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3385" class="apexcharts-grid"><g id="SvgjsG3386" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3388" x1="0" y1="0" x2="442.75" y2="0" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3389" x1="0" y1="38.75" x2="442.75" y2="38.75" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3390" x1="0" y1="77.5" x2="442.75" y2="77.5" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3391" x1="0" y1="116.25" x2="442.75" y2="116.25" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3392" x1="0" y1="155" x2="442.75" y2="155" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3387" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3394" x1="0" y1="155" x2="442.75" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3393" x1="0" y1="1" x2="0" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3356" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3357" class="apexcharts-series" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3364" d="M 0 155L 0 98.16666666666666C 11.068750000000001 98.16666666666666 20.556250000000002 46.5 31.625000000000004 46.5C 42.69375000000001 46.5 52.181250000000006 46.5 63.25000000000001 46.5C 74.31875000000001 46.5 83.80625 82.66666666666666 94.875 82.66666666666666C 105.94375000000001 82.66666666666666 115.43125 82.66666666666666 126.50000000000001 82.66666666666666C 137.56875000000002 82.66666666666666 147.05625 113.66666666666666 158.125 113.66666666666666C 169.19375 113.66666666666666 178.68125 113.66666666666666 189.75 113.66666666666666C 200.81875000000002 113.66666666666666 210.30625000000003 82.66666666666666 221.37500000000003 82.66666666666666C 232.44375000000002 82.66666666666666 241.93125000000003 82.66666666666666 253.00000000000003 82.66666666666666C 264.06875 82.66666666666666 273.55625000000003 41.33333333333334 284.625 41.33333333333334C 295.69375 41.33333333333334 305.18125 41.33333333333334 316.25 41.33333333333334C 327.31875 41.33333333333334 336.80625 62 347.875 62C 358.94375 62 368.43125 62 379.5 62C 390.56875 62 400.05625 38.75 411.125 38.75C 422.19375 38.75 431.68125000000003 38.75 442.75000000000006 38.75C 442.75000000000006 38.75 442.75000000000006 38.75 442.75000000000006 155M 442.75000000000006 38.75z" fill="url(#SvgjsLinearGradient3360)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8a40vkym)" pathTo="M 0 155L 0 98.16666666666666C 11.068750000000001 98.16666666666666 20.556250000000002 46.5 31.625000000000004 46.5C 42.69375000000001 46.5 52.181250000000006 46.5 63.25000000000001 46.5C 74.31875000000001 46.5 83.80625 82.66666666666666 94.875 82.66666666666666C 105.94375000000001 82.66666666666666 115.43125 82.66666666666666 126.50000000000001 82.66666666666666C 137.56875000000002 82.66666666666666 147.05625 113.66666666666666 158.125 113.66666666666666C 169.19375 113.66666666666666 178.68125 113.66666666666666 189.75 113.66666666666666C 200.81875000000002 113.66666666666666 210.30625000000003 82.66666666666666 221.37500000000003 82.66666666666666C 232.44375000000002 82.66666666666666 241.93125000000003 82.66666666666666 253.00000000000003 82.66666666666666C 264.06875 82.66666666666666 273.55625000000003 41.33333333333334 284.625 41.33333333333334C 295.69375 41.33333333333334 305.18125 41.33333333333334 316.25 41.33333333333334C 327.31875 41.33333333333334 336.80625 62 347.875 62C 358.94375 62 368.43125 62 379.5 62C 390.56875 62 400.05625 38.75 411.125 38.75C 422.19375 38.75 431.68125000000003 38.75 442.75000000000006 38.75C 442.75000000000006 38.75 442.75000000000006 38.75 442.75000000000006 155M 442.75000000000006 38.75z" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 31.625000000000004 206.66666666666666L 63.25000000000001 206.66666666666666L 94.875 206.66666666666666L 126.50000000000001 206.66666666666666L 158.125 206.66666666666666L 189.75 206.66666666666666L 221.37500000000003 206.66666666666666L 253.00000000000003 206.66666666666666L 284.625 206.66666666666666L 316.25 206.66666666666666L 347.875 206.66666666666666L 379.5 206.66666666666666L 411.125 206.66666666666666L 442.75000000000006 206.66666666666666"></path><path id="SvgjsPath3365" d="M 0 98.16666666666666C 11.068750000000001 98.16666666666666 20.556250000000002 46.5 31.625000000000004 46.5C 42.69375000000001 46.5 52.181250000000006 46.5 63.25000000000001 46.5C 74.31875000000001 46.5 83.80625 82.66666666666666 94.875 82.66666666666666C 105.94375000000001 82.66666666666666 115.43125 82.66666666666666 126.50000000000001 82.66666666666666C 137.56875000000002 82.66666666666666 147.05625 113.66666666666666 158.125 113.66666666666666C 169.19375 113.66666666666666 178.68125 113.66666666666666 189.75 113.66666666666666C 200.81875000000002 113.66666666666666 210.30625000000003 82.66666666666666 221.37500000000003 82.66666666666666C 232.44375000000002 82.66666666666666 241.93125000000003 82.66666666666666 253.00000000000003 82.66666666666666C 264.06875 82.66666666666666 273.55625000000003 41.33333333333334 284.625 41.33333333333334C 295.69375 41.33333333333334 305.18125 41.33333333333334 316.25 41.33333333333334C 327.31875 41.33333333333334 336.80625 62 347.875 62C 358.94375 62 368.43125 62 379.5 62C 390.56875 62 400.05625 38.75 411.125 38.75C 422.19375 38.75 431.68125000000003 38.75 442.75000000000006 38.75" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8a40vkym)" pathTo="M 0 98.16666666666666C 11.068750000000001 98.16666666666666 20.556250000000002 46.5 31.625000000000004 46.5C 42.69375000000001 46.5 52.181250000000006 46.5 63.25000000000001 46.5C 74.31875000000001 46.5 83.80625 82.66666666666666 94.875 82.66666666666666C 105.94375000000001 82.66666666666666 115.43125 82.66666666666666 126.50000000000001 82.66666666666666C 137.56875000000002 82.66666666666666 147.05625 113.66666666666666 158.125 113.66666666666666C 169.19375 113.66666666666666 178.68125 113.66666666666666 189.75 113.66666666666666C 200.81875000000002 113.66666666666666 210.30625000000003 82.66666666666666 221.37500000000003 82.66666666666666C 232.44375000000002 82.66666666666666 241.93125000000003 82.66666666666666 253.00000000000003 82.66666666666666C 264.06875 82.66666666666666 273.55625000000003 41.33333333333334 284.625 41.33333333333334C 295.69375 41.33333333333334 305.18125 41.33333333333334 316.25 41.33333333333334C 327.31875 41.33333333333334 336.80625 62 347.875 62C 358.94375 62 368.43125 62 379.5 62C 390.56875 62 400.05625 38.75 411.125 38.75C 422.19375 38.75 431.68125000000003 38.75 442.75000000000006 38.75" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 31.625000000000004 206.66666666666666L 63.25000000000001 206.66666666666666L 94.875 206.66666666666666L 126.50000000000001 206.66666666666666L 158.125 206.66666666666666L 189.75 206.66666666666666L 221.37500000000003 206.66666666666666L 253.00000000000003 206.66666666666666L 284.625 206.66666666666666L 316.25 206.66666666666666L 347.875 206.66666666666666L 379.5 206.66666666666666L 411.125 206.66666666666666L 442.75000000000006 206.66666666666666"></path><g id="SvgjsG3358" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3402" r="0" cx="0" cy="0" class="apexcharts-marker wdlblc4byl no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3359" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3396" x1="0" y1="0" x2="0" y2="155" stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="155" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine3397" x1="0" y1="0" x2="442.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3398" x1="0" y1="0" x2="442.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3399" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3400" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3401" class="apexcharts-point-annotations"></g><rect id="SvgjsRect3403" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect3404" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG3383" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG3384" class="apexcharts-yaxis-texts-g"></g></g><rect id="SvgjsRect3395" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3352" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_2">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+134.02</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_3">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">-154.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+144.65</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_5">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+165.86</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart Widget 35-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table widget 14-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                    <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                    <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-49.jpg" class="" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartskl8vo60d" class="apexcharts-canvas apexchartskl8vo60d apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2880" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2882" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2881"><clipPath id="gridRectMaskkl8vo60d"><rect id="SvgjsRect2886" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkl8vo60d"></clipPath><clipPath id="nonForecastMaskkl8vo60d"></clipPath><clipPath id="gridRectMarkerMaskkl8vo60d"><rect id="SvgjsRect2887" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2894" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2895" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2911" class="apexcharts-grid"><g id="SvgjsG2912" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2914" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2915" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2916" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2917" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2918" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2919" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2920" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2921" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2922" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2923" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2924" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2913" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2926" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2925" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2888" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2889" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2892" d="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkl8vo60d)" pathTo="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath2893" d="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkl8vo60d)" pathTo="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG2890" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2891" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2927" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2928" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2929" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2930" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2931" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2910" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2883" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-40.jpg" class="" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.4%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsah7n0vt7" class="apexcharts-canvas apexchartsah7n0vt7 apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2932" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2934" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2933"><clipPath id="gridRectMaskah7n0vt7"><rect id="SvgjsRect2938" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskah7n0vt7"></clipPath><clipPath id="nonForecastMaskah7n0vt7"></clipPath><clipPath id="gridRectMarkerMaskah7n0vt7"><rect id="SvgjsRect2939" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2946" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2947" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2963" class="apexcharts-grid"><g id="SvgjsG2964" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2966" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2967" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2968" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2969" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2970" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2971" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2972" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2973" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2974" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2975" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2976" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2965" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2978" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2977" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2940" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2941" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2944" d="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskah7n0vt7)" pathTo="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath2945" d="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskah7n0vt7)" pathTo="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG2942" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2943" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2979" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2980" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2981" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2982" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2983" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2962" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2935" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-39.jpg" class="" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsf6lxxdywg" class="apexcharts-canvas apexchartsf6lxxdywg apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2984" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2986" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2985"><clipPath id="gridRectMaskf6lxxdywg"><rect id="SvgjsRect2990" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskf6lxxdywg"></clipPath><clipPath id="nonForecastMaskf6lxxdywg"></clipPath><clipPath id="gridRectMarkerMaskf6lxxdywg"><rect id="SvgjsRect2991" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2998" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2999" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3015" class="apexcharts-grid"><g id="SvgjsG3016" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3018" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3019" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3020" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3021" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3022" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3023" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3024" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3025" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3026" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3027" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3028" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3017" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3030" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3029" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2992" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2993" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2996" d="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf6lxxdywg)" pathTo="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath2997" d="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf6lxxdywg)" pathTo="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG2994" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2995" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3031" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3032" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3033" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3034" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3035" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3014" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2987" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-47.jpg" class="" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsgnggls5k" class="apexcharts-canvas apexchartsgnggls5k apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3036" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3038" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3037"><clipPath id="gridRectMaskgnggls5k"><rect id="SvgjsRect3042" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgnggls5k"></clipPath><clipPath id="nonForecastMaskgnggls5k"></clipPath><clipPath id="gridRectMarkerMaskgnggls5k"><rect id="SvgjsRect3043" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3050" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3051" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3067" class="apexcharts-grid"><g id="SvgjsG3068" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3070" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3071" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3072" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3073" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3074" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3075" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3076" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3077" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3078" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3079" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3080" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3069" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3082" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3081" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3044" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3045" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3048" d="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgnggls5k)" pathTo="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3049" d="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgnggls5k)" pathTo="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3046" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3047" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3083" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3084" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3085" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3086" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3087" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3066" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3039" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-48.jpg" class="" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.4%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsq77v7b0w" class="apexcharts-canvas apexchartsq77v7b0w apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg3088" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3090" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3089"><clipPath id="gridRectMaskq77v7b0w"><rect id="SvgjsRect3094" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq77v7b0w"></clipPath><clipPath id="nonForecastMaskq77v7b0w"></clipPath><clipPath id="gridRectMarkerMaskq77v7b0w"><rect id="SvgjsRect3095" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3102" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3103" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG3119" class="apexcharts-grid"><g id="SvgjsG3120" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3122" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3123" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3124" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3125" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3126" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3127" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3128" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3129" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3130" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3131" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3132" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3121" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3134" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3133" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3096" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3097" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3100" d="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq77v7b0w)" pathTo="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath3101" d="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq77v7b0w)" pathTo="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG3098" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG3099" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3135" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3136" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3137" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3138" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3139" class="apexcharts-point-annotations"></g></g><g id="SvgjsG3118" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3091" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart widget 31-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7 mb-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_31_chart" class="w-100 h-300px"><div style="position: relative; height: 100%;"><div style="position: absolute; width: 445px; height: 300px;"><div><canvas width="445" height="300" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;"></canvas><canvas width="445" height="300" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;"></canvas></div></div><div style="position: absolute; pointer-events: none; overflow: hidden; width: 445px; height: 300px;"></div><div role="alert" style="z-index: -100000; opacity: 0; position: absolute; top: 0px;"></div><div role="application" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 445px; height: 300px;"><div role="button" aria-label="Zoom Out" style="position: absolute; pointer-events: none; top: 24px; left: 377px; width: 40px; height: 40px;"></div><div tabindex="0" role="checkbox" aria-label="Revenue; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" role="checkbox" aria-label="Expense; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div><div role="tooltip" style="position: absolute; top: -1e+06px; opacity: 1e-07; pointer-events: none;">Revenue:
Expense:</div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 31-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Chart widget 24-->
            <div class="card card-flush overflow-hidden h-xl-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Human Resources</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"><div style="position: relative; height: 100%;"><div style="position: absolute; width: 982px; height: 300px;"><div><canvas width="982" height="300" style="position: absolute; top: 0px; left: 0px; width: 982px; height: 300px;"></canvas><canvas width="982" height="300" style="position: absolute; top: 0px; left: 0px; width: 982px; height: 300px;"></canvas></div></div><div style="position: absolute; pointer-events: none; overflow: hidden; width: 982px; height: 300px;"></div><div role="alert" style="z-index: -100000; opacity: 0; position: absolute; top: 0px;"></div><div role="application" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 982px; height: 300px;"><div role="button" aria-label="Zoom Out" style="position: absolute; pointer-events: none; top: 24px; left: 448.004px; width: 40px; height: 40px;"></div></div><div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 24-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>








@endsection
@section('js')

@endsection
