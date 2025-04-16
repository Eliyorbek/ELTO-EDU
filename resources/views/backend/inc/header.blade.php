<?php
$btn = App\Models\HamburgerActiveButton::first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ElTo EDU</title>
  <!-- base:css -->
  <link rel="stylesheet" href="/backend/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/backend/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/backend/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/backend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/backend/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="/backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/backend/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="stylesheet" href="/backend/assets/css/dark.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/logovaqf.png" />
</head>
<style>
  header a{
    color: #fff;
    text-decoration: none;
  }
  table tr td{
    text-transform: capitalize;
  }
</style>
<body class="{{$btn->event}}">  
  <div class="container-scroller">
    @include('backend.inc.top-navbar')