<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="/patient"><i class="ti-home"></i><span class="right-nav-text">
                                الرئيسية</span> </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">الخيارات </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard2">
                            <div class="pull-left"><i class="fa fa-medkit"></i><span
                                    class="right-nav-text">الأدوية</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard2" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('patientMedicines.index') }}">عرض الادوية</a> </li>
                            <li> <a href="{{ route('patientMedicinesBooking.index') }}">الادوية المحجوزة</a> </li>

                        </ul>
                    </li>


                    <!-- menu item mailbox-->
                    <li>
                        <a href="{{ route('patientBookings.index') }}"><i class="fa fa-calendar"></i><span
                                class="right-nav-text">
                                الحجز </span> </a>
                    </li>



                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">ادارة المحتوى </li>
                    <li>
                        <a href="{{ route('ads.index') }}"><i class="fa fa-bullhorn"></i><span class="right-nav-text">
                                الاعلانات </span> </a>
                    </li>

                    <li>
                        <a href="{{ route('patientPosts.index') }}"><i class="fa fa-file-text-o"></i><span
                                class="right-nav-text">
                                منشوراتي </span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
