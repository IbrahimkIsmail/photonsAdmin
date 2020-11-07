@extends('admin.layouts.master')
@section('pageTitle')
   Home
@endsection
@section('styles')

@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div
                class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        <a class="text-dark" href="{{route('admin.home')}}">Home</a>
                    </h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                {{--                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>--}}
                {{--                    <span class="text-muted font-weight-bold mr-4">#XRS-45670</span>--}}
                <!--end::Actions-->
                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="row">
                    <!--put here your code-->
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Mixed Widget 1-->
                        <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 bg-danger py-5">
                                <h3 class="card-title font-weight-bolder text-white">Fast Access</h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0 position-relative overflow-hidden">
                                <!--begin::Chart-->
                                <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-spacer mt-n25 ">
                                    <!--begin::Row-->
                                    <div class="row m-0">
                                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <a href="#" class="text-warning font-weight-bold font-size-h6">Weekly Sales</a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">New Users</a>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row m-0">
                                        <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item Orders</a>
                                        </div>
                                        <div class="col bg-light-success px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Bug Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 1-->
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-10" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-primary svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Mirror.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Get Started</a>
                                        <div class="text-dark-75">Get Started statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-10" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-danger svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																	<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Tutorials</a>
                                        <div class="text-dark-75">Tutorials statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom wave wave-animate-fast wave-success mb-8 mb-lg-10" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-success svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Sketch.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" />
																	<polygon fill="#000000" points="23 8 12 20 1 8" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">User Guide</a>
                                        <div class="text-dark-75">User Guide statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="card card-custom wave wave-animate-slow wave-dark mb-8 mb-lg-10" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-primary svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Mirror.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
																	<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
																	<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
																	<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Get Started</a>
                                        <div class="text-dark-75">Get Started statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom wave wave-animate wave-info mb-8 mb-lg-10" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-danger svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
																	<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000"></path>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Tutorials</a>
                                        <div class="text-dark-75">Tutorials statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom wave wave-animate-fast wave-warning mb-8 mb-lg-0" >
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <div class="mr-6">
														<span class="svg-icon svg-icon-success svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Sketch.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<circle fill="#000000" opacity="0.3" cx="16" cy="10" r="5"></circle>
																	<path d="M5.74714567,18.0425758 C4.09410362,16.9740356 3,15.1147886 3,13 C3,9.6862915 5.6862915,7 9,7 C11.7957591,7 14.1449096,8.91215918 14.8109738,11.5 L17.25,11.5 C19.3210678,11.5 21,13.1789322 21,15.25 C21,17.3210678 19.3210678,19 17.25,19 L8.25,19 C7.28817895,19 6.41093178,18.6378962 5.74714567,18.0425758 Z" fill="#000000"></path>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">User Guide</a>
                                        <div class="text-dark-75">User Guide statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <!--put here your code-->
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::List Widget 9-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="font-weight-bolder text-dark">Recent Activities</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <div class="timeline timeline-5 mt-3">
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">08:42</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content text-dark-50">Outlines of the recent activities that happened last weekend</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">3 hr</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex">
                                            <span class="mr-4 font-weight-bolder text-dark-75">AEOL meeting with</span>
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-start mt-n2">
                                                <!--begin::Symbol-->
                                                <a href="#" class="symbol symbol-35 symbol-light-success mr-2">
																	<span class="symbol-label">
																		<img src="{{asset('adminAssets/media/svg/avatars/004-boy-1.svg')}}" class="h-75 align-self-end" alt="" />
																	</span>
                                                </a>
                                                <!--end::Symbol-->
                                                <!--begin::Symbol-->
                                                <a href="#" class="symbol symbol-35 symbol-light-success">
																	<span class="symbol-label">
																		<img src="{{asset('adminAssets/media/svg/avatars/002-girl.svg')}}" class="h-75 align-self-end" alt="" />
																	</span>
                                                </a>
                                                <!--end::Symbol-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">14:37</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-info icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content font-weight-bolder text-dark-75">Submit initial budget -
                                            <a href="#" class="text-primary">USD 700</a>.</div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">16:50</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content text-dark-50">Stakeholder meeting scheduling.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">17:30</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content text-dark-50">Project scoping &amp; estimations with stakeholders.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">21:03</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-warning icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content font-weight-bolder text-dark-75">New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.</div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin: Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">21:07</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content text-dark-50">Company BBQ to celebrate the last quater achievements and goals.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end: Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">20:30</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-info icon-xxl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content text-dark-50">Marketing campaign planning with customer.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end: Items-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: Card-->
                        <!--end: List Widget 9-->
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::List Widget 9-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Market Leaders</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Customer</span>
																				</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Partner</span>
																				</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Suplier</span>
																				</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Member</span>
																				</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Staff</span>
																				</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label" style="background-image: url('{{asset('adminAssets/media/stock-600x400/img-17.jpg')}}')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Cup &amp; Green</a>
                                        <span class="text-muted font-weight-bold font-size-sm my-1">Local, clean &amp; environmental</span>
                                        <span class="text-muted font-weight-bold font-size-sm">Created by:
																<span class="text-primary font-weight-bold">CoreAd</span></span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-weight-bolder font-size-h4">24,900</span>
                                            <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin: Item-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label" style="background-image: url('{{asset('adminAssets/media/stock-600x400/img-10.jpg')}}')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Yellow Background</a>
                                        <span class="text-muted font-weight-bold font-size-sm my-1">Strong abstract concept</span>
                                        <span class="text-muted font-weight-bold font-size-sm">Created by:
																<span class="text-primary font-weight-bold">KeenThemes</span></span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-weight-bolder font-size-h4">70,380</span>
                                            <span class="text-muted font-weight-bolder font-size-sm">votes</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end: Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label" style="background-image: url('{{asset('adminAssets/media/stock-600x400/img-1.jpg')}}')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 pr-3">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Nike &amp; Blue</a>
                                        <span class="text-muted font-weight-bold font-size-sm my-1">Footwear overalls</span>
                                        <span class="text-muted font-weight-bold font-size-sm">Created by:
																<span class="text-primary font-weight-bold">Invision Inc.</span></span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-size-h4 font-weight-bolder">7,200</span>
                                            <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label" style="background-image: url('{{asset('adminAssets/media/stock-600x400/img-9.jpg')}}')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Desserts platter</a>
                                        <span class="text-muted font-size-sm font-weight-bold my-1">Food trends &amp; reviews</span>
                                        <span class="text-muted font-size-sm font-weight-bold">Created by:
																<span class="text-primary font-weight-bold">Figma Studio</span></span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-size-h4 font-weight-bolder">36,450</span>
                                            <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-wrap align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label" style="background-image: url('{{asset('adminAssets/media/stock-600x400/img-12.jpg')}}')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Cup &amp; Green</a>
                                        <span class="text-muted font-weight-bold font-size-sm my-1">Local, clean &amp; environmental</span>
                                        <span class="text-muted font-weight-bold font-size-sm">Created by:
																<span class="text-primary font-weight-bold">CoreAd</span></span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-weight-bolder font-size-h4">23,900</span>
                                            <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: Card-->
                        <!--end: List Widget 9-->
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="card card-custom bg-light-success card-stretch gutter-b" style="height: 180px;">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block">SAP UI Progress</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-size-h2 font-weight-bolder mr-2">67%</span>Average</div>
                                <div class="progress progress-xs mt-7 bg-success-o-60">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 67%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end:: Body-->
                        </div>
                        <div class="card card-custom bg-info card-stretch gutter-b" style="height: 180px;">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">Airplus Budget</a>
                                <div class="font-weight-bold text-white font-size-sm">
                                    <span class="font-size-h2 mr-2">87K%</span>23k to goal</div>
                                <div class="progress progress-xs mt-7 bg-white-o-90">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <div class="card card-custom bg-light-warning card-stretch gutter-b"style="height: 180px;">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-warning font-size-h6 mb-4 text-hover-state-dark d-block">Airplus Budget</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">87K%</span>23k to goal</div>
                                <div class="progress progress-xs mt-7 bg-warning-o-60">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                </div>
                <!--end::Row-->
                <!--end::Dashboard-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
@section('scripts')

@endsection
