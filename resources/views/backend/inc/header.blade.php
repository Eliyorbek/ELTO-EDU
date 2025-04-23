<?php
$btn = App\Models\HamburgerActiveButton::first();
$darkOrLight = \App\Models\DarkOrLight::first();
$color = $darkOrLight->name == 'style'? '#000' : '#fff';
$moonOrSun = $darkOrLight->name == 'style' ? 'moon' : 'sun'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ElTo EDU</title>
  <link rel="stylesheet" href="/css/sweetalert2-theme.css">
  <link rel="stylesheet" href="/backend/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/backend/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/backend/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/backend/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="/backend/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="/backend/assets/css/{{$darkOrLight->name}}.css">
  <link rel="shortcut icon" href="/elto.png" />
  @livewireStyles
</head>
<style>
  header a{
    color: {{$color}};
    text-decoration: none;
  }
  table tr th{
    text-transform: capitalize;
  }

</style>
<body class="{{$btn->event}}">
  <div class="container-scroller">
    @include('backend.inc.top-navbar')
