<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">deeplearning</li>

                <li>
                    <a href="/">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('category')}}">
                        <i class="mdi mdi-seed-outline"></i>
                        <span> Category Expression </span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <i class="mdi mdi-chart-arc"></i>--}}
{{--                        <span> Customers </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{route('report')}}">
                        <i class="mdi mdi-chart-bar"></i>
                        <span> Reports </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Configurations</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-settings"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{route('users')}}">
                                <i class="mdi mdi-account"></i>
                                <span> Users </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
