<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">

                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">الخيارات </li>



                    <!-- menu item mailbox-->
                    <li>
                        <a href="{{ route('donor.index') }}"><i class="fa fa-medkit"></i><span class="right-nav-text">
                                التبرع بالدواء </span> </a>
                    </li>




                    <li>
                        <a href="{{ route('donatedMedications.index') }}"><i class="fa fa-medkit"></i><span
                                class="right-nav-text">
                                عرض الادوية </span> </a>
                    </li>
                    <li>
                        <a href="{{ route('donorAds.index') }}"><i class="fa fa-bullhorn"></i><span
                                class="right-nav-text">
                                عرض الاعلانات </span> </a>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
