<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - HR</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CoreUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.4.3/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-oMIIhJL1T5s+PxJr6+Qb0pO1IRFB6OGMM+J57UBT3UQKxSVsb++MkXpu9cLqaJxu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .wrapper {
            margin-left: 256px;
            transition: margin-left 0.15s;
        }
        .sidebar-narrow ~ .wrapper {
            margin-left: 64px;
        }
        @media (max-width: 991.98px) {
            .wrapper {
                margin-left: 0;
            }
        }
        .sidebar-brand-full {
            letter-spacing: 1px;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-brand">
                <div class="sidebar-brand-full fw-bold fs-5 text-white">HR PANEL</div>
                <div class="sidebar-brand-narrow fw-bold text-white">HR</div>
            </div>
            <button class="btn-close d-lg-none" type="button" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hr.dashboard') }}">
                    <svg class="nav-icon">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-speedometer"></use>
                    </svg> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-people"></use>
                    </svg> Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-user"></use>
                    </svg> Employees
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-chart"></use>
                    </svg> Report
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-calendar"></use>
                    </svg> Leave
                </a>
            </li>
        </ul>
        <div class="sidebar-footer border-top d-none d-md-flex">
            <button class="sidebar-toggler" type="button" id="sidebar-toggler"></button>
        </div>
    </div>

    <div class="wrapper d-flex flex-column min-vh-100">
        <header class="header header-sticky p-0 mb-4 bg-white">
            <div class="container-fluid border-bottom px-4">
                <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
                    <svg class="icon icon-lg">
                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-menu"></use>
                    </svg>
                </button>
                <ul class="header-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md bg-info text-white d-flex align-items-center justify-content-center">
                                <i class="cil-user"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">HR Account</div>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <svg class="icon me-2">
                                        <use xlink:href="https://cdn.jsdelivr.net/npm/@coreui/icons@3.0.1/sprites/free.svg#cil-account-logout"></use>
                                    </svg> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="body flex-grow-1">
            <div class="container-lg px-4">
                @yield('content')
            </div>
        </div>
        <footer class="footer px-4 bg-white border-top">
            <div><a href="#">{{ config('app.name') }}</a> © 2026</div>
            <div class="ms-auto text-secondary small">HR Management Dashboard</div>
        </footer>
    </div>

    <!-- CoreUI Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.4.3/dist/js/coreui.bundle.min.js" integrity="sha384-SWhFOmxmv1pfTLKVBW7q8uossvuaWNeQFdmaWi6xdldiUjyqG9F6V2R2BOC8gkxx" crossorigin="anonymous"></script>
    <script>
        const header = document.querySelector('header.header');
        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggler = document.getElementById('sidebar-toggler');
            const sidebar = document.getElementById('sidebar');
            
            if (sidebarToggler && sidebar) {
                sidebarToggler.addEventListener('click', function() {
                    sidebar.classList.toggle('sidebar-narrow');
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>

