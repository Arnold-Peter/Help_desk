@extends('layout.app')
@section('content')
<div style="width: 80%; margin: 50px auto;">
  <h2 style="text-align: center; font-size: 2vw;">TICKET ANALYSIS</h2>

  <!-- Chart Area -->
  <div style="display: flex; align-items: flex-end; height: 300px; border-left: 2px solid #333; border-bottom: 2px solid #333; padding: 0 2%; position: relative;">
    
    <!-- Y-axis Labels -->
    <div style="position: absolute; left: -40px; bottom: 0; text-align: right;">
      <div style="height: 60px;">40</div>
      <div style="height: 60px;">35</div>
      <div style="height: 60px;">30</div>
      <div style="height: 60px;">25</div>
      <div style="height: 60px;">20</div>
    </div>

    <!-- Bars + Labels -->
    @php
      $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
      $heights = [120, 140, 160, 180, 200, 190, 180, 170, 160, 150, 130, 120]; // px heights
    @endphp

    @foreach($months as $index => $month)
      <div style="display: flex; flex-direction: column; align-items: center; width: 6%; margin: 0 0.5%;">
        <div style="width: 100%; height: {{ $heights[$index] }}px; background-color: #dbbd68;"></div>
        <div style="margin-top: 8px; font-size: 0.9vw;">{{ $month }}</div>
      </div>
    @endforeach

  </div>
</div>

@endsection