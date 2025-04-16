@extends('auth.app')
@section('content')
<section class="container-fluid section1">
    <div class="container_login">
         <form action="{{route('login')}}" method="GET">
              @csrf
              <p class="topTitle">Elto Education</p>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Password">
              <button type="submit">Login</button>

         </form>
    </div>
    <audio id="audios" controls="true" autoplay="autoplay" class="audio" style="display:none;"></audio>

</section>
@endsection


