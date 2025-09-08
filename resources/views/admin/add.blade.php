@extends('layout.app')
@section('content')
<div style="height:400px; width:650px; background-color:#dbbd68; display:flex; margin-left:35%; border-radius:18px;margin-top:50px; margin-bottom:50px">
<div style="height:200px; width:200px;  margin-left:10%; margin-top:100px;margin-right:50px   ">
<div style=" margin-top:20px;">
        <label for="">FULLNAME</label>
        <input type="email" name="email" id="" style=" border-radius:12px;height:25px; border:0px; margin-top:10px;"><br>
    </div>
    <div style=" margin-top:20px;">
        <label for="">EMAIL</label>
        <input type="password" name="password" id="" style=" border-radius:12px;height:25px; border:0px; margin-top:10px;"><br>
    </div>
    <div style=" margin-top:20px;">
        <label for="">PHONE</label><br>
        <input type="email" name="email" id=""style=" border-radius:12px;height:25px; border:0px; margin-top:10px;">
    </div>
    
</div>
<div style="height:200px; width:200px; margin-top:120px; margin-left:150px">
<div>
        <label for="">OCCUPATION</label>
        <input type="email" name="email" id=""style=" border-radius:12px;height:25px; border:0px; margin-top:10px;"><br>
    </div>
    <div style="padding-left:; margin-top:20px;">
        <label for="" >DEPARTMENT</label>
        <input type="password" name="password" id=""style=" border-radius:12px;height:25px; border:0px;margin-top:10px;"><br>
    </div>
    <button type="submit" style="margin-top:80px; width:120px; height: 30px;">add</button>
</div>

</div>
    
@endsection