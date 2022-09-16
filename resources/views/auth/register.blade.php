@extends('base1')
@section('content')
<div class="container">
    <div class="login-box">
        <h2>Register?</h2>
        <form action="{{'/register'}}" method="POST">
            {{csrf_field()}}
          <div class="user-box">
            <input type="text" name="name"  id="name" class="form-control">
            <label>Name</label>
            @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
          <div class="user-box">
            <input type="email" name="email"  id="email" class="form-control">
            <label>Email</label>
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" class="form-control">
            <label>Password</label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            <label>Confirm Password</label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
            <a href="{{'/log'}}">Already have an account?</a>
          <button class="btn btn-primary" type="submit">
            Submit
          </button>
        </form>
      </div>
</div>
@endsection
<style>
  html {
height: 100%;
}
body {
margin:0;
padding:0;
font-family: sans-serif;
background: linear-gradient(#c4cddd, #243b55);
}

.login-box h2 {
margin: 0 0 30px;
padding: 0;
color: #fff;
text-align: center;
}

.login-box .user-box {
position: relative;
}

.login-box .user-box input {
width: 100%;
padding: 10px 0;
font-size: 16px;
color: #fff;
margin-bottom: 30px;
border: none;
border-bottom: 1px solid #fff;
outline: none;
background: transparent;
}
.login-box .user-box label {
position: absolute;
top:0;
left: 0;
padding: 10px 0;
font-size: 16px;
color: #fff;
pointer-events: none;
transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
top: -20px;
left: 0;
color: #feffff;
font-size: 12px;
}

.login-box form a {
position: relative;
display: inline-block;
padding: 10px 20px;
color: #ffffff;
font-size: 16px;
text-decoration: none;
text-transform: uppercase;
overflow: hidden;
transition: .5s;
margin-top: 40px;
letter-spacing: 4px
}



.login-box a span {
position: absolute;
display: block;
}

.login-box a span:nth-child(1) {
top: 0;
left: -100%;
width: 100%;
height: 2px;
background: linear-gradient(90deg, transparent, #ffffff);
animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
0% {
  left: -100%;
}
50%,100% {
  left: 100%;
}
}

.login-box a span:nth-child(2) {
top: -100%;
right: 0;
width: 2px;
height: 100%;
background: linear-gradient(180deg, transparent, #ffffff);
animation: btn-anim2 1s linear infinite;
animation-delay: .25s
}

@keyframes btn-anim2 {
0% {
  top: -100%;
}
50%,100% {
  top: 100%;
}
}

.login-box a span:nth-child(3) {
bottom: 0;
right: -100%;
width: 100%;
height: 2px;
background: linear-gradient(270deg, transparent, #e8ecec);
animation: btn-anim3 1s linear infinite;
animation-delay: .5s
}

@keyframes btn-anim3 {
0% {
  right: -100%;
}
50%,100% {
  right: 100%;
}
}

.login-box a span:nth-child(4) {
bottom: -100%;
left: 0;
width: 2px;
height: 100%;
background: linear-gradient(360deg, transparent, #ffffff);
animation: btn-anim4 1s linear infinite;
animation-delay: .75s
}

@keyframes btn-anim4 {
0% {
  bottom: -100%;
}
50%,100% {
  bottom: 100%;
}
}

</style>