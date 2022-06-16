<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('layouts.Partial.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 @include('layouts.Partial.navbar')
 @include('layouts.Partial.sidebar')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('flash::message')
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('layouts.Partial.script')
</body>
</html>
