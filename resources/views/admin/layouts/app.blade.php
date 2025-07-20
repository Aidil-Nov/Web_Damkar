<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Link to Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3iQK5f6HZZOtrCU9iZG5e1B6v" crossorigin="anonymous">
    
    <!-- Optional: You can add custom styles here -->
    <style>
        .sidebar {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color: #343a40;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center text-white">Admin Panel</h3>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.contact') }}">Pesan Kontak</a>
    <a href="{{ route('admin.news.index') }}">Berita</a>
    <a href="{{ route('admin.gallery.index') }}">Gallery</a>
    <a href="{{ route('admin.visitors.index') }}">Pengunjung</a>
</div>

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="d-flex">
                <!-- Add user info or logout button here -->
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container mt-3">
        @yield('content') <!-- This will be replaced by the content of each specific page -->
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Admin Panel. All rights reserved.</p>
</div>

<!-- Optional: Link to Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Ki6a6+Lfa68v8+Eaa5G7l5Io5wpSkjaNoyZw8+/5Q+bMXj0" crossorigin="anonymous"></script>

</body>
</html>
