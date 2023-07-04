<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>انا مهندس - لوحه التحكم</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/favicon.svg">
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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}">


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
            </section></div>
    </div>
    <!-- END: Content-->
    <div class="col-md-12">


        @include('alerts')
        <div class="card">
            <div class="card-header">
                <h4 class="card-title font">بيانات القسم</h4>
            </div>


            <div class="card-body">
                <form method="POST" action="{{route('section.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label font" for="basicInput">اسم القسم</label>
                                <input type="text" class="form-control font" id="basicInput"
                                       placeholder="مثل'الهندسه المدنيه'" name="name" required>
                            </div>
                        </div>






                        <div class="col-xl-4 col-md-6 col-12">
                            <label class="form-label font" for="basicSelect">اختر اسم الكورس</label>
                            <select class="form-select font" id="basicSelect" name="course">
                                @foreach ($courses as $course)--}}
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                 @endforeach
                            </select>
                        </div>

                    </div>

                    <br>

                    <div class="col-xl-4 col-md-6 col-12 font ">
                        <button type="submit"  class="btn btn-gradient-success font">اضف</button>
                    </div>


                </form>

                {{--                    <div id="editor" placeholder=""   name="description"></div>--}}

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
    <script src="{{asset('dashbord/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- END: Quill Js-->
    <script src="{{asset('dashbord/app-assets/js/script/quill.js')}}"></script>

    <script src="{{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/forms/form-repeater.min.js')}}"></script>

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



    <script>
        var toolbarOptions = ['code-block'];
        var quill = new Quill('#editor', {
            modules: { toolbar: true },
            theme: 'snow'
        });

    </script>

    <script type="text/javascript">
        function displaySelected(){
            var sel = document.getElementById("mySelect").selectedOptions;
            var result = "";
            for (var i=0; i < sel.length; i++){
                result += sel[i].text + " ";
            }
            document.getElementById("result").innerHTML = result;
        }
    </script>

</div>
</body>
<!-- END: Body-->

</html>
