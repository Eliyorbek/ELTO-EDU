<?php
use Illuminate\Support\Facades\Session;
?>
<footer class="footer">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://t.me/elto_dev" class="text-muted" target="_blank" style="font-size: 24px;text-decoration:none;">ElTo EDU</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted"><i class="typcn typcn-heart-full-outline text-danger" style="font-size: 26px;">Eliyorbek Tojimatov</i></span>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>

<script src="/backend/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="/backend/assets/vendors/chart.js/chart.umd.js"></script>
<script src="/backend/assets/js/jquery.cookie.js"></script>
<script src="/backend/assets/js/off-canvas.js"></script>
<script src="/backend/assets/js/hoverable-collapse.js"></script>
<script src="/backend/assets/js/template.js"></script>
<script src="/backend/assets/js/settings.js"></script>
<script src="/backend/assets/js/dashboard-dark.js"></script>
<script src="/backend/assets/js/file-upload.js"></script>
<script src="/backend/assets/js/typeahead.js"></script>
<script src="/js/sweetalert2.js"></script>

@if(Session::has('save'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                icon: 'success',
                title: '{{\session('save')}}'
            })
        });
    </script>
@endif

@if(Session::has('update'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                icon: 'success',
                title: '{{\session('update')}}'
            })
        });
    </script>
@endif

@if(Session::has('error'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                icon: 'success',
                title: '{{\session('error')}}'
            })
        });
    </script>
    @endif
</body>

</html>
