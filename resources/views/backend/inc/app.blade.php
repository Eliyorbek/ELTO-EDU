@include('backend.inc.header')
<div class="container-fluid page-body-wrapper">      
    @include('backend.inc.menus')
      <div class="main-panel">
        <div class="content-wrapper">
@yield('content')
        </div>
@include('backend.inc.footer')