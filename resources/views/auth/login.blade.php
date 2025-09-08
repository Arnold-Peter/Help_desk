@extends('layout.app')
@section('content')
<div style="background-color: #dbbd68;color:black;height:350px;width:500px;margin-left:1000px; margin-top:55px;border-radius:5px;">
    <form action="{{ route('login') }}"method="POST">
        @csrf
      <div style="padding-top: 1px; padding-left:30px;">
        <h1 style="padding-left: 120px">SIGN IN</h1>
        <label style="margin-top:10px;" >EMAIL</email><br>
        <input type ="text" name="email" style="background-color: #dbbd68;border-right:0px;border-left:0px;border-bottom:2px solid black;border-top:0px;width:90%;margin-top:15px;">
      </div><br>

      <div style="padding-left:30px;">
        <label style="padding-top:20px" >PASSWORD</label><br>
        <input type="text" name="password" style="background-color: #dbbd68;border-right:0px;border-left:0px;border-bottom:2px solid black;border-top:0px;width:90%;margin-top:15px">
      </div>
      <div style="display: flex;margin-top:25px; padding-left:5px;">
     <div style="padding-left:30px;">
        <input type="checkbox">
        <label >REMEMBER ME</label>
     </div>
     <div>
        <a href="" style="color:black; padding-left:40px;text-decoration:none;margin-top:15px;">FORGOT PASSWORD?</a>
     </div>
    </div>
    <div style="padding-left: 70px;">
        <button type="submit" style="color:white;background-color:black;border:1px black;width:85%;border-radius:2px;height:25px;margin-top:15px;">SIGN IN</button>
    </div>

<div style="color:black;display:flex; padding-left:70px;">
    <p>DONT HAVE AN ACCOUNT? <a href="{{ route('reg') }}" style="margin-left:4px;color:black;text-decoration:none;padding:6px;">SIGN UP</a></p><br>

</div>
</div>

    </form>
</div>



@endsection
