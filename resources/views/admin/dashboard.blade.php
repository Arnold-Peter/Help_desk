@extends('layout.app')

@section('content')
    <!-- Summary Cards -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 5%; padding-top: 5%;">
        <div style="width: 15%; height: 12vh; background-color: #dbbd68; border-radius: 20px;">
            <h1 style="font-size: 1.5vw; padding-left: 15%;">TOTAL TICKET</h1>
            <p style="font-size: 3.5vw; margin-top: -10%; padding-left: 35%;">10</p>
        </div>
        <div style="width: 15%; height: 12vh; background-color: #dbbd68; border-radius: 20px;">
            <h1 style="font-size: 1.5vw; padding-left: 15%;">NEW TICKET</h1>
            <p style="font-size: 3.5vw; margin-top: -10%; padding-left: 35%;">10</p>
        </div>
        <div style="width: 15%; height: 12vh; background-color: #dbbd68; border-radius: 20px;">
            <h1 style="font-size: 1.5vw; padding-left: 15%;">SOLVED TICKET</h1>
            <p style="font-size: 3.5vw; margin-top: -10%; padding-left: 35%;">10</p>
        </div>
    </div>

    <!-- Title -->
    <h1 style="font-size: 2vw; padding-top: 2%; text-align: center;">TICKET ANALYSIS</h1>

    <!-- Graph Container -->
    <div style="position: relative; width: 40%; height: 40vh; border-left: 0.3vw solid #333; border-bottom: 0.3vw solid #333; margin: 5% auto;">
        <!-- Y-axis Ticks -->
        <div style="position: absolute; left: -5%; bottom: 0; text-align: right;">
            <div style="height: ; margin-top:200%;">20</div>
            <div style="height: %; margin-top:300%;">25</div>
            <div style="height: %; margin-top:300%;">30</div>
            <div style="height: %; margin-top:300%;">35</div>
            <div style="height: %; margin-top:300%;">40</div>
        </div>

        <!-- Bars -->
        <div style="display: flex; align-items: flex-end; height: 100%; padding-left: 5%;">
            <div style="width: 4%; height: 40%; background-color: #dbbd68; margin: 0 1%;"></div>
            <div style="width: 4%; height: 47%; background-color: #dbbd68; margin: 0 1%;"></div>
            <div style="width: 4%; height: 53%; background-color: #dbbd68; margin: 0 1%;"></div>
            <div style="width: 4%; height: 60%; background-color: #dbbd68; margin: 0 1%;"></div>
            <div style="width: 4%; height: 67%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 63%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 60%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 57%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 53%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 50%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 43%; background-color: #dbbd68; margin: 0 1.5%;"></div>
            <div style="width: 4%; height: 40%; background-color: #dbbd68; margin: 0 1.3%;"></div>
        </div>
    </div>

    <!-- X-axis Labels -->
    <div style="width: 28.2%; margin-top:; display: flex; justify-content: space-between; padding-left:  32.4%">
        <div>Jan</div><div>Feb</div><div>Mar</div><div>Apr</div><div>May</div><div>Jun</div>
        <div>Jul</div><div>Aug</div><div>Sep</div><div>Oct</div><div>Nov</div><div>Dec</div>
    </div>
@endsection
