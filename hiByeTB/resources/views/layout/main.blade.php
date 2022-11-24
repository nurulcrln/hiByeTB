<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/main.css') !!}">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">HiByeTB</a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/forum') }}">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/konsultasi') }}">Konsultasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="profile" href="#">
                    <img class="icon-profile" src="{{ ('assets/images/profile-icon.png') }}" alt="icon profile">
                </a>
                <div class="dropdown-menu">
                    <p>Hi User</p>
                    <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ url('/reminder') }}">Setting Reminder</a>
                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    
@yield('container')

<!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


