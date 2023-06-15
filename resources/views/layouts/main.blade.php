<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
 
  <title>Akuntan App</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css" />
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" />

  <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
</head>

<style>
  #table_length label {
    transform: translateY(30px);
  }

  #table_length label select {
    border:  1px solid #eaeaea;
    border-radius: 0px;
  }

  #table_paginate {
    transform: translateY(-20px);
  }

  #table_paginate .paginate_button {
    border:  1px solid #eaeaea;
    transform: translateX(-1px);
    padding:  4px 5px;
    color: #555;
  }

  #table_paginate .paginate_button.current {  
    color:  #fff;
    background-color: #2cabe3;
  }
</style>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
 <!--  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div> -->

  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    @include('partials.navbar')
    @include('partials.aside')

    <div class="page-wrapper">
      @include('partials.sidebar-toggle')


      @yield('container')
    </div>

  </div>

    <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
