@extends('layout.app')
@section('content')
<div style="background-color: #dbbd68;color:black;width:450px;height:450px;margin-top:20px;margin-bottom:10px;border-radius:5px;margin-left:1100px;padding-left:10px;padding-top:10px;">
    <form action="{{ route("register") }}" method="POST">
    @csrf
    <h2 style="text-align:center;"><b>SIGN UP</b></h2>
<div>
<Label style="padding-top:10px;">FULL NAME</Label><br>
<input type="text" name="name" style="color:black;background-color:#dbbd68;border-right:0px;border-left:0px;border-top:0px;border-bottom:2px solid black;margin-top:10px;width:90%;">
</div>
<div>
    <label style="padding-top:10px;">PHONE NO</label><br>
    <input type="number" name="phone" style="color:black;background-color:#dbbd68;border-right:0px;border-left:0px;border-top:0px;border-bottom:2px solid black;margin-top:10px;width:90%;">
</div>
<div>
    <label style="padding-top:10px;">EMAIL</label><br>
    <input type="email" name="email" style="color:black;background-color:#dbbd68;border-right:0px;border-left:0px;border-top:0px;border-bottom:2px solid black;margin-top:10px;width:90%">
</div>
<div>
    <label style="padding-top: 10px">PASSWORD</label><br>
    <input type="password" name="password" style="color:black;background-color:#dbbd68;border-right:0px;border-left:0px;border-top:0px;border-bottom:2px solid black;margin-top:10px;width:90%;">
</div>
<div>
    <label style="padding-top:10px;">CONFIRM PASSWORD</label><br>
    <input type="password" name="password_confirmation" style="color:black;background-color:#dbbd68;border-right:0px;border-left:0px;border-top:0px;border-bottom:2px solid black;margin-top:10px;width:90%;">
</div>

<div>
    <button type="submit"style="padding-top:10px;margin-top:10px;">SIGN UP</button>
</div>
<select name="role">
    <option value="admin">admin</option>
    <option value="customer">customer</option>
</select>
</form>

</div>

@endsection
