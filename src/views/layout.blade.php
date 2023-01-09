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
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <div class="footer-wrapper">
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 2021 All
                                rights reserved. </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by: <a
                                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. </span>
                        </div>
                    </footer>
                </div>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../../js/off-canvas.js"></script>
    <script src="../../../../js/hoverable-collapse.js"></script>
    <script src="../../../../js/template.js"></script>
    <script src="../../../../js/settings.js"></script>
    <script src="../../../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
