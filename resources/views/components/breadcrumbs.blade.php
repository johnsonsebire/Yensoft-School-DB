<!-- Start Page title and tab -->
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">@yield('current-page-title')</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Yensoft</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('current-page-title')</li>
                </ol>
            </div>
        </div>
    </div>
</div>