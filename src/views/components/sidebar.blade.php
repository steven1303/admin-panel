<!-- partial:../../partials/_settings-panel.html -->
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                aria-controls="chats-section">CHATS</a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                        <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                    </div>
                </form>
            </div>
            <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Team review meeting at 3.00 PM
                            </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Prepare for presentation
                            </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Resolve all the low priority tickets due today
                            </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Schedule meeting for next week
                            </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Project review
                            </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                    </li>
                </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="mdi mdi-circle-outline text-primary me-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="mdi mdi-circle-outline text-primary me-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pe-3 fw-normal">See
                    All</small>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="offline"></span>
                    </div>
                    <div class="info">
                        <div class="wrapper d-flex">
                            <p>Catherine</p>
                        </div>
                        <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="offline"></span>
                    </div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile">
                        <img src="https://via.placeholder.com/37x37" alt="image">
                        <span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- chat tab ends -->
    </div>
</div>
<!-- partial -->
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
            <a class="nav-link" href="../../index.html">
                <i class="mdi mdi-shield-check menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/widgets/widgets.html">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Widgets<span class="badge badge-danger">New</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-view-array menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.html">Badges</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/modals.html">Modals</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/progress.html">Progress
                            bar</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/typography.html">Typography</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/tooltips.html">Tooltips</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <i class="mdi mdi-palette menu-icon"></i>
                <span class="menu-title">Advanced UI</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Dragula</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/slider.html">Sliders</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="../../pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/colcade.html">Colcade</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/loaders.html">Loaders</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Forms <span class="badge badge-pill badge-info">2</span></span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic
                            Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced
                            Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Validation</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false"
                aria-controls="editors">
                <i class="mdi mdi-pencil menu-icon"></i>
                <span class="menu-title">Editors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Text
                            editors</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Code
                            editors</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <i class="mdi mdi-signal menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/google-charts.html">Google
                            charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline
                            js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/c3.html">C3
                            charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartist.html">Chartists</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/charts/justGage.html">JustGage</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                aria-controls="tables">
                <i class="mdi mdi-format-list-bulleted-square menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic
                            table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/tables/data-table.html">Data
                            table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/tables/sortable-table.html">Sortable
                            table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/popups.html">
                <i class="mdi mdi-drawing-box menu-icon"></i>
                <span class="menu-title">Popups</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/notifications.html">
                <i class="mdi mdi-bell menu-icon"></i>
                <span class="menu-title">Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                aria-controls="icons">
                <i class="mdi mdi-emoticon-excited-outline menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/icons/flag-icons.html">Flag icons</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi
                            icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.html">Font
                            Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/icons/simple-line-icon.html">Simple
                            line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/icons/themify.html">Themify icons</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false"
                aria-controls="maps">
                <i class="mdi mdi-map menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/maps/mapael.html">Mapael</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/maps/vector-map.html">Vector Map</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/maps/google-maps.html">Google Map</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                aria-controls="auth">
                <i class="mdi mdi-account-circle menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html">
                            Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html">
                            Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html">
                            Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html">
                            Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false"
                aria-controls="error">
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
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                aria-controls="general-pages">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html">
                            Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/profile.html">
                            Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq.html"> FAQ
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq-2.html"> FAQ
                            2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/news-grid.html">
                            News grid </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/timeline.html">
                            Timeline </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/search-results.html"> Search
                            Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/portfolio.html">
                            Portfolio </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
                aria-controls="e-commerce">
                <i class="mdi mdi-cart-outline menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/invoice.html">
                            Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/pricing-table.html"> Pricing
                            Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/samples/orders.html">
                            Orders </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/email.html">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">E-mail</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/calendar.html">
                <i class="mdi mdi-calendar-blank menu-icon"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/todo.html">
                <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
                <span class="menu-title">Todo List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/gallery.html">
                <i class="mdi mdi-image-filter menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../pages/documentation/documentation.html">
                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->
