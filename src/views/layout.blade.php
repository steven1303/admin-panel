<!DOCTYPE html>
<html lang="en">
@include('admin::components.header')

<body>
    @include('admin::components.navbar')
    <div id="layoutSidenav">
        @include('admin::components.sidebar')
        <div id="layoutSidenav_content">
            @livewire('counter')
            @include('admin::components.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
