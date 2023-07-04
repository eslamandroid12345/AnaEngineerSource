<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>انا مهندس - لوحه التحكم</title>
    <link rel="apple-touch-icon" href="{{asset('dashbord/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashbord/app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/font.css')}}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
  <!-- BEGIN: Header-->
@include('Dashbord.layout.header')

<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@include('Dashbord.layout.RightSide')
<!-- END: Main Menu-->

<!-- END: Main Menu-->

<!-- BEGIN: Content-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->

                    <!--/ Medal Card -->

                    <!-- Statistics Card -->

                </div>
        </div>
    </div>

    <!-- END: Content-->
    @include('alerts')
    <h5 class="mb-1 fontBig">الدورات </h5>


    <a href="{{route('course.create')}}"> <button type="button" class="btn btn-success waves-effect waves-float waves-light align-items-start fontSize">+
            اضف دوره</button></a>

    <div class="btn-group">
        <a href="{{route('section.index')}}"><button type="button" class="btn btn-danger fontSize"  aria-expanded="false">
            عرض اقسام الكورسات
        </button></a>

    </div>


    <a href="{{route('video.index')}}"> <button type="button" class="btn btn-success waves-effect waves-float waves-light align-items-start fontSize">
        عرض فيدوهات</button></a>



    <div class="row" id="table-without-card">
        <div class="col-12 my-2">

            <div class="table-responsive">
                <table class="table font">
                    <thead class="font">
                    <tr>
                        <th>الاسم</th>
                        <th> مكان الكورس</th>
                        <th>  </th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($courses as $course)
                    <tr>
                        <td>
                            <span class="fw-bold">{{$course->name}}</span>
                        </td>
                        <td>

                            @if($course->price_online > 0)
                                <span class="badge rounded-pill badge-light-primary me-1 fontSize">اونلاين</span>
                            @endif
                            @if($course->price > 0)
                                <span class="badge rounded-pill badge-light-info me-1 fontSize"> المنصه</span>
                            @endif
                            @if($course->price_offline > 0)
                                <span class="badge rounded-pill badge-light-warning me-1 fontSize">في المقر</span>
                            @endif
                        </td>


                        <td>

                            <div class="dropdown">
                                <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light"
                                        data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{route('course.edit',$course->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit-2 me-50">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg>
                                        <span>تعديل</span>
                                    </a>
                                    <form action="{{ route('course.destroy', $course->id) }}" method="POST" onsubmit="return confirm('هل متأكد من حذف الدوره ؟ ')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>حذف</span>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </td>
                    </tr>
                    @endforeach




                </table>
                <div class="pagination">
                    {{ $courses->links() }}
                </div>
            </div>

        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
