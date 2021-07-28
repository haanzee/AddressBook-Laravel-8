<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.css')}}">
    <title>@yield('title')</title>
</head>
<body>
  <div class="container shadow">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <a class="navbar-brand" href="#">Address Book</a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" a
          ria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ asset('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('display')}}">Address List</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ asset('addForm')}}">Addition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('edit')}}">Edit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('delete')}}">Delete</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Sigup</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          <ul>
        </div>
    </nav>
    <div>  
      @yield('content')
      @include('includes.footer')
    </div>
  </div>



  <script src="{{ asset('bs5/js/jquery.js')}}"></script>
  <script src="{{ asset('bs5/js/popper.js')}}"></script>
  <script src="{{ asset('bs5/js/all.min.js')}}"></script>
  <script src="{{ asset('bs5/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
