 <!-- Jquery 3. 7. 1 Min Js -->
 <script src="{{ asset('') }}assets/web/scripts/jquery-3.7.1.min.js"></script>


 
 <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="{{ asset('') }}assets/web/js/jquery.js"></script>
 <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
 <script src="{{ asset('') }}assets/web/js/plugins.js"></script>
 <script src="{{ asset('') }}assets/web/js/typed.js"></script>
 <script src="{{ asset('') }}assets/web/js/swiper-bundle.min.js"></script>
 <script src="{{ asset('') }}assets/web/js/Ordio_Init.js"></script>
 <script src="{{ asset('') }}assets/web/js/init.js"></script>
 <script src="{{ asset('') }}assets/web/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script src="https://cdn.jsdelivr.net/textillate/0.4.0/jquery.textillate.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.3/sweetalert2.all.js"
  integrity="sha512-5gz/at+6LT6tuaX/ritelLOHwVc0CoXsspPbUBPdoIrOLshcpguRTMBAKVZCdG//YdwyYP2c4n7NMaDqVXWTJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{asset('')}}assets/web/js/organictheme.js"></script> --}}
@stack('script')

@if ($massage = Session::get('success'))
<script>
    Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ $massage }}",
                showConfirmButton: !1,
                timer: 3000
            })
            Swal();
</script>
@endif
