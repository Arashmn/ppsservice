    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/panel/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/js/menu.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/loder/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/loder/vendorscripts.bundle.js') }}"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/panel/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/toastr/toastr.js') }}"></script>
    @yield('vendor-js')
    <!-- Main JS -->
    <script src="{{ asset('assets/panel/js/main.js') }}"></script>
    <!-- Page JS -->
    @yield('page-js')
