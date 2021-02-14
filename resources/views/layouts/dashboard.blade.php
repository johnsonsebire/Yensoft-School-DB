


@include('inc.head')

<div id="main_content">
    <!-- Start Main top header -->
    <body class="font-muli gradient {{themeSwitch(Auth::user()->theme)}}">
    
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
            </div>
        </div>
    

    @include('components.left-sidebar')

    <!-- Start Rightbar setting panel -->
   
    <!-- Start Theme panel do not add in project -->
    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Light Version</p>
                        <a href="/"><img src="{{asset('images/themes/default.png')}}" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Dark Version</p>
                        <a href="#"><img src="{{asset('images/themes/dark.png')}}" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="#"><img src="{{asset('images/themes/rtl.png')}}" class="img-fluid" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
    @include('components.quick-navigation')
    @include('components.left-sidebar-expanded')
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        @include('components.topbar')
        <!-- Breadcrumbs --> 
        @include('components.breadcrumbs')

        <!-- Content Area --> 

        @yield('content')
       

@include('inc.footer')
