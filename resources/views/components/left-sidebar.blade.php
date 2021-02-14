<div id="header_top" class="header_top">
    <div class="container">
        <div class="hleft">
            <a class="header-brand" href="/dashboard"><img src="{{asset('images/favicon.png')}}"></a>
            <div class="dropdown">
                <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                <a href="/dashboard" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                {{-- <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a> --}}
                <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
            </div>
        </div>
        <div class="hright">
            {{-- <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="nav-link icon settingbar" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"> <i class="fe fe-power"></i>
                    {{-- {{ __('Logout') }} --}}
              </a>
            </form>
            {{-- <a href="#" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                 --}}
        </div>
    </div>
</div>