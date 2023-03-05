<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
                <div class="profile-image">
                    <img src="https://via.placeholder.com/37x37" alt="image">
                </div>
                <div class="profile-name">
                    <p class="name">
                        Edwin Harring
                    </p>
                    <p class="designation">
                        Manager
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-shield-check menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account-circle menu-icon"></i>
                <span class="menu-title">Access</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.index') }}">Admin </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="mdi mdi-alert-circle menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html">
                            404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html">
                            500 </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<!-- partial -->
