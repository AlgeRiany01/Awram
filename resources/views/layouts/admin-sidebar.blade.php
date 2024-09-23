<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="/admin"><i class="ti-home"></i><span class="right-nav-text">
                                الرئيسية</span> </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">الخيارات </li>

                    <!-- menu item todo-->
                    <li>
                        <a href="{{ route('hospitals.index') }}"><i class="fa fa-hospital-o"></i><span
                                class="right-nav-text">
                                المستشفيات</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard2">
                            <div class="pull-left"><i class="fa fa-medkit"></i><span
                                    class="right-nav-text">الادوية</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard2" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('medicines.index') }}">الادوية المتوفرة</a> </li>
                            <li> <a href="{{ route('RequestedMedicines') }}">الادوية المطلوبة</a> </li>
                            <li> <a href="{{ route('acceptedMedicine') }}">الادوية المحجوزة</a> </li>

                        </ul>
                    </li>

                    <!-- menu item mailbox-->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">المستخدمين </li>
                    <li>
                        <a href="{{ route('Donors.index') }}"><i class="fa fa-users"></i><span class="right-nav-text">
                                المتبرعين </span> </a>
                    </li>

                    <li>
                        <a href="{{ route('patients.index') }}"><i class="fa fa-users"></i><span class="right-nav-text">
                                المرضى </span> </a>
                    </li>

                    <li>
                        <a href="{{ route('admins.index') }}"><i class="fa fa-users"></i><span class="right-nav-text">
                                المسؤولين </span> </a>
                    </li>

                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">ادارة المحتوى </li>
                    <li>
                        <a href="{{ route('adminAds.index') }}"><i class="fa fa-bullhorn"></i><span
                                class="right-nav-text">
                                الاعلانات </span> </a>
                    </li>

                    <li>
                        <a href="{{ route('patientsPosts.index') }}"><i class="fa fa-file-text-o"></i><span
                                class="right-nav-text">
                                منشورات المرضى </span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
