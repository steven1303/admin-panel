<!DOCTYPE html>
<html lang="en">

<x-admin::header />

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <x-admin::navbar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <x-admin::sidebar-right />
            <x-admin::sidebar-left />
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        {{ $slot }}
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <x-admin::footer />
                <!-- partial -->
            </div>
            <!-- main ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->

    <!-- endinject -->
    <!-- Plugin js for this page-->
    @yield('javascripts')
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <x-admin::script />
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    @livewireScripts
</body>

</html>
