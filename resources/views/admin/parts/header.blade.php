<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->

            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel"
                        data-menu-toggle="click" aria-haspopup="true">
                        <div style="margin: 10px;">
                            <a style="font-size: 2rem;">Site management</a> <a
                                style="font-size: 1rem;">Photons Lab</a>
                        </div>
                    </li>
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel"
                        data-menu-toggle="click" aria-haspopup="true" >
                        <a href="{{route('home')}}" class="menu-link" target="_blank">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
                                <i class="flaticon-home"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Site Preview</span>
                        </a>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">

            <!--begin::Notifications-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path
                                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                            fill="#000000" opacity="0.3"/>
														<path
                                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                            fill="#000000"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div
                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                             style="background-image: url({{asset('adminAssets/media/misc/bg-1.jpg')}})">
                            <!--begin::Title-->
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">User Notifications</span>
                                <span
                                    class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="tab-content">
                            <!--begin::Tabpane-->
                            <div class="tab-pane active show p-8" id="topbar_notifications_notifications"
                                 role="tabpanel">
                                <!--begin::Scroll-->
                                <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                                     data-mobile-height="200">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light-primary mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
                                                                                      height="24"/>
																				<path
                                                                                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                    fill="#000000"/>
																				<rect fill="#000000" opacity="0.3"
                                                                                      transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                      x="16.3255682" y="2.94551858"
                                                                                      width="3" height="18" rx="1"/>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>
																</span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a href="#"
                                               class="text-dark text-hover-primary mb-1 font-size-lg">Cool
                                                App</a>
                                            <span class="text-muted">Marketing campaign planning</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light-warning mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-warning">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
                                                                                      height="24"/>
																				<path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3"/>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>
																</span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome
                                                SAAS</a>
                                            <span class="text-muted">Project status update meeting</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Tabpane-->
                        </div>
                        <!--end::Content-->
                    </form>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->
            <!--begin::Settings-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
		        				<span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
    </g>
</svg><!--end::Svg Icon--></span></div>
                </div>
                <!--end::Toggle-->

                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg" style="">
                    <!--begin:Header-->
                    <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top"
                         style="background-image: url('{{asset('/adminAssets/media/misc/bg-1.jpg')}}')">
                        <h4 class="text-white font-weight-bold">
                            Settings
                        </h4>
                    </div>
                    <!--end:Header-->

                    <!--begin:Nav-->
                    <div class="row row-paddingless">
                        <!--begin:Item-->
                        <div class="col-6">
                            <a href=""
                               class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            <span class="svg-icon svg-icon-3x svg-icon-success">
              <!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/General/Settings-2.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
            fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--> </span> <span
                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">General Settings</span>
                            </a>
                        </div>
                        <!--end:Item-->
                        <!--begin:Item-->
                        <div class="col-6">
                            <a href=""
                               class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            <span class="svg-icon svg-icon-3x svg-icon-success">
              <!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Money.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z"
            fill="#000000" opacity="0.3"
            transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
        <path
            d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z"
            fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--> </span> <span
                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Currencies</span>
                            </a>
                        </div>
                        <!--end:Item-->
                        <!--begin:Item-->
                        <div class="col-6">
                            <a href=""
                               class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            <span class="svg-icon svg-icon-3x svg-icon-success">
             <!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Code/Git4.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--> </span> <span
                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Walkthroughs</span>
                            </a>
                        </div>
                        <!--end:Item-->
                        <!--begin:Item-->
                        <div class="col-6">
                            <a href=""
                               class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            <span class="svg-icon svg-icon-3x svg-icon-success">
             <!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Code/Question-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--> </span> <span
                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">FAQ</span>
                            </a>
                        </div>
                        <!--end:Item-->
                    </div>
                    <!--end:Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Settings-->
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-circle"
                             src="{{asset('adminAssets/media/flags/226-united-states.svg')}}"
                             alt=""/>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div
                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
{{--                        <li class="navi-item {{currentLanguage() == 'ar'?'active':''}}">--}}
{{--                            <a href="{{url('/locale/ar')}}" class="navi-link">--}}
{{--													<span class="symbol symbol-20 mr-3">--}}
{{--														<img class="rounded-circle"--}}
{{--                                                             src="{{asset('adminAssets/media/flags/133-saudi-arabia.svg')}}"--}}
{{--                                                             alt=""/>--}}
{{--													</span>--}}
{{--                                <span class="navi-text">{{admin('Arabic')}}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <li class="navi-item {{currentLanguage() == 'en'?'active':''}}">--}}
{{--                            <a href="{{url('/locale/en')}}" class="navi-link">--}}
{{--													<span class="symbol symbol-20 mr-3">--}}
{{--														<img class="rounded-circle"--}}
{{--                                                             src="{{asset('adminAssets/media/flags/226-united-states.svg')}}"--}}
{{--                                                             alt=""/>--}}
{{--													</span>--}}
{{--                                <span class="navi-text">{{admin('English')}}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                                <span
                                    class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi</span>
                    <span
                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::guard('admin')->user()->name}}</span>
                    <img class="rounded-circle" alt="Pic" width="35" height="35" src=""/>

                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
            {{--            <small class="text-muted font-size-sm ml-2">12 messages</small></h3>--}}
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
{{--                <div class="symbol-label" style="background-image:url({{Auth::user()->profile_image}})"></div>--}}
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::guard('admin')->user()->name}}</a>
                <div class="text-muted mt-1">admin</div>
                <div class="navi mt-2">
                    <a class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path
                                                        d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                        fill="#000000"/>
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{Auth::guard('admin')->user()->email}}</span>
								</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="{{ route('admin.logout') }}"
                       class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<path
                                                    d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                    fill="#000000"/>
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Profile</div>
                        <div class="text-muted">Account settings
                            <span
                                class="label label-light-danger label-inline font-weight-bold">update</span>
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->
        <!--begin::Notifications-->
    {{--        <div>--}}
    {{--            <!--begin:Heading-->--}}
    {{--            <h5 class="mb-5">Recent Notifications</h5>--}}
    {{--            <!--end:Heading-->--}}
    {{--            <!--begin::Item-->--}}
    {{--            <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">--}}
    {{--						<span class="svg-icon svg-icon-warning mr-5">--}}
    {{--							<span class="svg-icon svg-icon-lg">--}}
    {{--								<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->--}}
    {{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
    {{--                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--										<rect x="0" y="0" width="24" height="24"/>--}}
    {{--										<path--}}
    {{--                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"--}}
    {{--                                            fill="#000000"/>--}}
    {{--										<rect fill="#000000" opacity="0.3"--}}
    {{--                                              transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"--}}
    {{--                                              x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>--}}
    {{--									</g>--}}
    {{--								</svg>--}}
    {{--                                <!--end::Svg Icon-->--}}
    {{--							</span>--}}
    {{--						</span>--}}
    {{--                <div class="d-flex flex-column flex-grow-1 mr-2">--}}
    {{--                    <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another--}}
    {{--                        purpose persuade</a>--}}
    {{--                    <span class="text-muted font-size-sm">Due in 2 Days</span>--}}
    {{--                </div>--}}
    {{--                <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>--}}
    {{--            </div>--}}
    {{--            <!--end::Item-->--}}
    {{--            <!--begin::Item-->--}}
    {{--            <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">--}}
    {{--						<span class="svg-icon svg-icon-success mr-5">--}}
    {{--							<span class="svg-icon svg-icon-lg">--}}
    {{--								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
    {{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
    {{--                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--										<rect x="0" y="0" width="24" height="24"/>--}}
    {{--										<path--}}
    {{--                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"--}}
    {{--                                            fill="#000000" fill-rule="nonzero"--}}
    {{--                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>--}}
    {{--										<path--}}
    {{--                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"--}}
    {{--                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
    {{--									</g>--}}
    {{--								</svg>--}}
    {{--                                <!--end::Svg Icon-->--}}
    {{--							</span>--}}
    {{--						</span>--}}
    {{--                <div class="d-flex flex-column flex-grow-1 mr-2">--}}
    {{--                    <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to--}}
    {{--                        people</a>--}}
    {{--                    <span class="text-muted font-size-sm">Due in 2 Days</span>--}}
    {{--                </div>--}}
    {{--                <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>--}}
    {{--            </div>--}}
    {{--            <!--end::Item-->--}}
    {{--            <!--begin::Item-->--}}
    {{--            <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">--}}
    {{--						<span class="svg-icon svg-icon-danger mr-5">--}}
    {{--							<span class="svg-icon svg-icon-lg">--}}
    {{--								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->--}}
    {{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
    {{--                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--										<rect x="0" y="0" width="24" height="24"/>--}}
    {{--										<path--}}
    {{--                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"--}}
    {{--                                            fill="#000000"/>--}}
    {{--										<path--}}
    {{--                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"--}}
    {{--                                            fill="#000000" opacity="0.3"/>--}}
    {{--									</g>--}}
    {{--								</svg>--}}
    {{--                                <!--end::Svg Icon-->--}}
    {{--							</span>--}}
    {{--						</span>--}}
    {{--                <div class="d-flex flex-column flex-grow-1 mr-2">--}}
    {{--                    <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose--}}
    {{--                        would be to persuade</a>--}}
    {{--                    <span class="text-muted font-size-sm">Due in 2 Days</span>--}}
    {{--                </div>--}}
    {{--                <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>--}}
    {{--            </div>--}}
    {{--            <!--end::Item-->--}}
    {{--            <!--begin::Item-->--}}
    {{--            <div class="d-flex align-items-center bg-light-info rounded p-5">--}}
    {{--						<span class="svg-icon svg-icon-info mr-5">--}}
    {{--							<span class="svg-icon svg-icon-lg">--}}
    {{--								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->--}}
    {{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
    {{--                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--										<rect x="0" y="0" width="24" height="24"/>--}}
    {{--										<path--}}
    {{--                                            d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"--}}
    {{--                                            fill="#000000" opacity="0.3"--}}
    {{--                                            transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"/>--}}
    {{--										<path--}}
    {{--                                            d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"--}}
    {{--                                            fill="#000000"--}}
    {{--                                            transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"/>--}}
    {{--										<path--}}
    {{--                                            d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"--}}
    {{--                                            fill="#000000" opacity="0.3"--}}
    {{--                                            transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"/>--}}
    {{--										<path--}}
    {{--                                            d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"--}}
    {{--                                            fill="#000000" opacity="0.3"--}}
    {{--                                            transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"/>--}}
    {{--									</g>--}}
    {{--								</svg>--}}
    {{--                                <!--end::Svg Icon-->--}}
    {{--							</span>--}}
    {{--						</span>--}}
    {{--                <div class="d-flex flex-column flex-grow-1 mr-2">--}}
    {{--                    <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best--}}
    {{--                        product</a>--}}
    {{--                    <span class="text-muted font-size-sm">Due in 2 Days</span>--}}
    {{--                </div>--}}
    {{--                <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>--}}
    {{--            </div>--}}
    {{--            <!--end::Item-->--}}
    {{--        </div>--}}
    <!--end::Notifications-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
