@extends('layout.app')
@section('content')
<form action="{{ route('reg') }}" method="POST">
    @csrf
    <div style="height: 400px; width:350px; background-color:#dbbd68; border-radius:12px; margin-left:1280px; margin-top:120px; padding-left:12px;">
        <div style="padding-left: 12px;">
            <h1 style="text-align:center ; padding-top:8px;">SIGN UP</h1>
            <label for="" >FULL NAME</label><br>
            <input type="text" name="name" id="" style="border-bottom: 1px solid black; border-top:0px; border-left:0px; border-right:0px; background-color:#dbbd68; width:90%;">
        </div>


    <div style="padding-left: 12px; margin-top:10px">
            <label for=""  >EMAIL</label><br>
            <input type="text" name="name" id="" style="border-bottom: 1px solid black; border-top:0px; border-left:0px; border-right:0px; background-color:#dbbd68; width:90%; ">
        </div>

        <div style="padding-left: 12px; margin-top:10px">
            <label for="" >PHONE NO</label><br>
            <input type="text" name="name" id="" style="border-bottom: 1px solid black; border-top:0px; border-left:0px; border-right:0px; background-color:#dbbd68; width:90%;">
        </div>

        <div style="padding-left: 12px; margin-top:10px">
            <label for="" >PASSWORD</label><br>
            <input type="text" name="name" id="" style="border-bottom: 1px solid black; border-top:0px; border-left:0px; border-right:0px; background-color:#dbbd68; width:90%;">
        </div>

        <div style="padding-left: 12px; margin-top:10px">
            <label for="" >CONFIRM PASSWORD</label><br>
            <input type="text" name="name" id="" style="border-bottom: 1px solid black; border-top:0px; border-left:0px; border-right:0px; background-color:#dbbd68; width:90%;">
        </div>
    <button type="submit" style="background-color:black; border-radius:6.5px; width:180px; margin-top:20px; margin-left:80px; color:white;">SIGN UP</button>
    <p style="padding-left: 40px">HAVE AN ACCOUNT?<a href="">SIGN IN</a></p>
    </div>


<<<<<<< HEAD
</form>

=======
</form> --}}
<form action="" method="post">
    @csrf
    <div>
        <label for="">FULL NAME</label>
        <input type="text" name="name" id="">
    </div>
     <div>
        <label for="">EMAIL</label>
        <input type="text" name="name" id="">
    </div>
     <div>
        <label for="">PHONE NUMBER</label>
        <input type="text" name="name" id="">
    </div>
     <div>
        <label for="">PASSWORD</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for=""> CONFIRM PASSWORD</label>
        <input type="text" name="name" id="">
    </div>
    <button type="submit">SIGN UP</button>
</form>
>>>>>>> origin/amina
@endsection
