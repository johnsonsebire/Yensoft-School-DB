 <!-- Start main footer -->
 <div class="section-body">
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Copyright © {{ now()->year }} <a href="https://yensoftgh.com" target="_blank">Yensoft</a>.
                </div>
                <div class="col-md-6 col-sm-12 text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Legal</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>

<!-- Start project main js  and page js -->
<script src="{{asset('js/core.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/js-cookie/dist/js.cookie.min.js"></script>
  <script>
    // code to set the `color_scheme` cookie
    var $color_scheme = Cookies.get("color_scheme");
    function get_color_scheme() {
      return (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) ? "dark" : "light";
    }
    function update_color_scheme() {
      Cookies.set("color_scheme", get_color_scheme());
    }
    // read & compare cookie `color-scheme`
    if ((typeof $color_scheme === "undefined") || (get_color_scheme() != $color_scheme))
      update_color_scheme();
    // detect changes and change the cookie
    if (window.matchMedia)
      window.matchMedia("(prefers-color-scheme: dark)").addListener( update_color_scheme );
  </script>
  
</body>
</html>