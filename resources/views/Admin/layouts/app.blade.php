<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      width: 250px;
      background-color: #161B39;
      min-height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding: 1rem;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #343a40;
      border-radius: 5px;
    }
    .main-content {
      margin-left: 250px;
      padding: 2rem;
    }
    .avatar-img {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>

<!-- Toggle Button (for small screens) -->
{{-- <button class="btn btn-light d-sm-none m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
  <span class="navbar-toggler-icon"></span>
</button> --}}

<!-- Sidebar -->
@include('admin.layouts.sidebar')


<!-- Main Content Area -->
 <section>@yield('admin-content')</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
