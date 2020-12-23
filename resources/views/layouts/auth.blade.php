@include('inc.head')

@yield('form')

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{{asset('bundles/lib.vendor.bundle.js')}}" defer></script>

<!-- Start project main js  and page js -->
<script src="{{asset('js/core.js')}}" defer></script>
</body>
</html>