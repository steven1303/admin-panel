<!DOCTYPE html>
<html lang="en">

@include('admin::components.header')

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin::components.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('admin::components.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <main>
                        <div class="container-fluid px-4">
                            {{ $header }}
                            <div class="card mb-4">
                                {{ $slot }}
                            </div>
                        </div>
                    </main>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                @include('admin::components.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
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
    @include('admin::components.script')
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    @livewireScripts
</body>

</html>
