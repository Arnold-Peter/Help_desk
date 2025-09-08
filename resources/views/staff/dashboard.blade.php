@extends('layout.app')
@section('content')
<div style="display:flex;margin-left:150px;">
<div style="background-color:#dbbd68;height:120px;width:250px;margin-left:100px;margin-top:20px;border-radius:20px;display-content:center;">
    <p><h2 style="padding: 5px">TOTAL TICKET</h2></p>
    <p><h2 style="padding-left:90px;">15</h2></p>
</div>
<div style="background-color:#dbbd68;height:120px;width:250px;margin-left:100px;margin-top:20px;border-radius:10px;">
    <p><h2>SOLVED TICKETS</h2></p>
    <p><h2 style="padding-left:90px;">12</h2></p>
</div>
<div style="background-color:#dbbd68;height:120px;width:250px;margin-left:100px;margin-top:20px;border-radius:10px;">
    <p><H2 style="padding-left:50px;"> PENDING</H2></p>
    <p><h2 style="padding-left:90px;">3</h2></p>
</div>

</div>

  <h2 style="text-align:center;">Ticket Summary for a Year</h2>

  <!-- Chart container -->
  <div style="width:500px; height:220px; margin:auto; position:relative; border-left:2px solid black; border-bottom:2px solid black;">

    <!-- Y-axis labels -->
    <div style="position:absolute; left:-30px; bottom:0;">0</div>
    <div style="position:absolute; left:-35px; bottom:50px;">50</div>
    <div style="position:absolute; left:-40px; bottom:100px;">100</div>
    <div style="position:absolute; left:-40px; bottom:150px;">150</div>
    <div style="position:absolute; left:-40px; bottom:200px;">200</div>
    

    <!-- Bars -->
    <div style="width:40px; height:130px; background-color:#dbbd68; position:absolute; bottom:0; left:60px;"></div>
    <div style="width:40px; height:180px; background-color:#dbbd68; position:absolute; bottom:0; left:140px;"></div>
    <div style="width:40px; height:80px; background-color:#dbbd68; position:absolute; bottom:0; left:220px;"></div>
    <div style="width:40px; height:220px; background-color:#dbbd68; position:absolute; bottom:0; left:300px;"></div>

    <!-- X-axis labels -->
    <div style="position:absolute; bottom:-25px; left:65px;">Jan</div>
    <div style="position:absolute; bottom:-25px; left:145px;">Feb</div>
    <div style="position:absolute; bottom:-25px; left:225px;">Mar</div>
    <div style="position:absolute; bottom:-25px; left:305px;">Apr</div>
  </div>
@endsection
