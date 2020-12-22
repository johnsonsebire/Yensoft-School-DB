   <!-- Start main footer -->
   <div class="section-body">
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Copyright © 2021 <a href="https://yensoftgh.com">Yensoft</a>.
                </div>
                <div class="col-md-6 col-sm-12 text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="{{route('dash')}}">Legal</a></li>
                        <li class="list-inline-item"><a href="{{route('dash')}}">Terms of Use</a></li>
                        <li class="list-inline-item"><a href="{{route('dash')}}">Releases</a></li>
                        <li class="list-inline-item"><a href="{{route('dash')}}">FAQ</a></li>
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

<!-- Start all plugin js -->
<script src="{{asset('bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('bundles/summernote.bundle.js')}}"></script>

<!-- Start project main js  and page js -->
<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('js/page/index.js')}}"></script>
<script src="{{asset('js/page/summernote.js')}}"></script>
</body>
</html>
