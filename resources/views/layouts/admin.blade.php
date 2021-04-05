<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Capture Admin Dashboard</title>

  <!-- General CSS Files -->
  @include('includes.admin.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('includes.admin.navbar')
      
     @include('includes.admin.sidebar')
      <!-- Main Content -->
      @yield('content')

      @include('includes.admin.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
    @include('includes.admin.script')
    @stack('addon-script')
</body>
</html>