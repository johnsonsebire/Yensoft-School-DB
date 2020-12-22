@include('inc.head')
<!-- Header --> 

@yield('header')

@yield('mainsidebar')

<!-- Start project content area -->
 <div class="page">
<!-- Tob bar --> 
    @yield('topbar')

<!-- Breadcrumbs -->     
    @yield('breadcrumbs')

<!-- Main Content -->     
<div class="section-body mt-4">

    <div class="container-fluid">
        
        @yield('quickaccess')

        <div class="tab-content">

            <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
        
                @yield('reportstats')               
                @yield('examtoppers')
                @yield('newstudentlist')
        
            </div>
            
            @yield('activitypane')
        
        </div>

@yield('maincontent')
    </div>
</div>


<!-- Footer Area -->
@yield('footer')