@extends('layout.app')
@section('content')
<DIV style="display: flex;flex:column">
    <div style="background-color: #dbbd68;color:black;width:150px;height:500px;margin-top:0px;">
    <p style="padding:10px;">DASHBOARD</p>
    <P style="padding:10px;">SUPPORT</P>
    <P style="padding:10px;">TICKET</P>
    <P style="padding:10px;">ACTIVITY</P>
</div>
<div style="margin:100px;margin-left:350px;">
<table style="background-color: #dbbd68;height:230px;border-collapse:collapse;border:2px solid black;">
    <h2 style="margin-left:200px">TICKET LISTS SUMMARY</h2>
<tr style="border-bottom:2px solid black">
    <th>TICKET ID</th>
    <th STYLE="background-color: rgb(251, 241, 241)">CUSTOMER</th>
    <th>SUBJECT</th>
    <th STYLE="background-color: rgb(251, 241, 241)">PRIORITY</th>
    <th>STATUS</th>
    <th STYLE="background-color: rgb(251, 241, 241)">ASSIGNED</th>
    <th>DATE</th>
</tr>
<tr style="border-bottom:2px solid black">
    <td>001</td>
    <td STYLE="background-color: rgb(251, 241, 241)">VICTOR L</td>
    <td>LOGIN ISSUE</td>
    <td STYLE="background-color: rgb(251, 241, 241)">HIGH</td>
    <td>OPEN</td>
    <td STYLE="background-color: rgb(251, 241, 241)">ALICE</td>
    <td>14-12-2024</td>
</tr>
<tr style="border-bottom:2px solid black">
    <td>002</td>
    <td STYLE="background-color: rgb(251, 241, 241)">AMINA K</td>
    <td>PAYMENT ISSUE</td>
    <td STYLE="background-color: rgb(251, 241, 241)">MEDIUM</td>
    <td>CLOSED</td>
    <td STYLE="background-color: rgb(251, 241, 241)">MERCY</td>
    <td>17-01-2025</td>
</tr>
<tr style="border-bottom:2px solid black">
    <td>003</td>
    <td STYLE="background-color: rgb(251, 241, 241)">ANORLD J</td>
    <td>ACC SETUP</td>
    <td STYLE="background-color: rgb(251, 241, 241)">MEDIUM</td>
    <td>INPROGRESS</td>
    <td STYLE="background-color: rgb(251, 241, 241)">UPENDO</td>
    <td>15-05-2025</td>
</tr>
<tr style="border-bottom:2px solid black">
    <td>004</td>
    <td STYLE="background-color: rgb(251, 241, 241)">SHARK JOE</td>
    <td>NETWORK FAILURE</td>
    <td STYLE="background-color: rgb(251, 241, 241)">LOW</td>
    <td>INPROGRESS</td>
    <td STYLE="background-color: rgb(251, 241, 241)">TEEFER</td>
    <td>30-50-2025</td>

</tr>
</table>
</div>


</DIV>
@endsection
