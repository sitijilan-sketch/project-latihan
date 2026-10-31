<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web Profile</title>

    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        .admin-wrapper {
            display: flex;
            flex: 1;
        }
        .admin-sidebar {
            width: 210px;
            background-color: #2b3035;
            min-height: 100vh;
        }
        .admin-sidebar .nav-link {
            color: #ffffff;
            opacity: 0.85;
            padding: 6px 0;
        }
        .admin-sidebar .nav-link:hover {
            opacity: 1;
        }
        .main-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
            padding: 2rem;
            background-color: #ffffff;
        }
        .footer-text {
            color: #6c757d;
            font-size: 0.875rem;
            text-align: center;
            margin-top: auto;
            padding-top: 2rem;
        }
    </style>
</head>
<body>

    <!-- Navbar Kuning -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning px-3 py-2 border-bottom">
        <div class="container-fluid">
            <!-- Brand Logo UNPAM + Teks -->
            <a class="navbar-brand text-dark fw-bold d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo-unpam.png') }}" alt="Logo" height="36" class="me-2" onerror="this.style.display='none'">
                <div>
                    <div style="font-size: 10px; line-height: 1.1; letter-spacing: 0.5px; font-weight: 700;">UNIVERSITAS PAMULANG</div>
                    <div style="font-size: 14px; font-weight: 800; line-height: 1.1;">SISTEM INFORMASI</div>
                </div>
            </a>

            <!-- Right Menu -->
            <div class="ms-auto d-flex align-items-center">
                <a href="{{ route('admin.dashboard') }}" class="text-dark me-3 text-decoration-none" style="font-size: 14px;">Dashboard</a>
                <a href="{{ route('logout') }}" class="text-dark text-decoration-none" style="font-size: 14px;">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content Wrapper -->
    <div class="admin-wrapper">
        <!-- Sidebar Admin -->
        <div class="admin-sidebar p-3 text-white">
            <h6 class="text-white-50 fw-bold mb-3" style="font-size: 13px;">Admin Menu</h6>
            <ul class="nav flex-column" style="font-size: 14px;">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('projects.index') }}" class="nav-link">Data Project</a>
                </li>
            </ul>
        </div>

        <!-- Main Content Area + Footer -->
        <main class="main-container">
            <div>
                @yield('content')
            </div>

            <!-- Footer -->
            <div class="footer-text">
                &copy; 2026 MyProfile. All rights reserved.
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    @stack('scripts')
</body>
</html>
