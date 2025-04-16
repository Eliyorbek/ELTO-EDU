@extends('auth.app')
@section('content')
<section class="container-fluid section1">
    <div class="container_login">
         <form action="" method="GET">
              @csrf
              <p class="topTitle">Elto Education</p>
              <label for="firstname">Firstname</label>
              <input type="text" id="firstname" name="firstname" placeholder="Firtname">
              <label for="lastname">Lastname</label>
              <input type="text" id="lastname" name="lasttname" placeholder="Lastname">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Password">
              <button type="button"><a href="{{route('login')}}">Login</a></button>
              <button  type="button"><a href="">Google</a> </button>
              <button  type="button"><a href="">Register</a></button>
              
         </form>
    </div>
    <audio id="audios" controls="true" autoplay="autoplay" class="audio" style="display:none;"></audio>
    
</section>
@endsection
    
   
    