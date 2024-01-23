@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($trains as $train)
    <div class="card">
        <h3>{{$train->company}}</h3>
        <h5>Da:{{$train->departure_station}}</h5>
        <p>partenza:{{$train->departure_time}}</p>
        <p>diretto a:{{$train->arrival_station}}</p>
        <p>arrivo:{{$train->arrival_time}}</p>
        <p>code:{{$train->train_code}}</p>
        <p>vagoni:{{$train->carriages_tot}}</p>
        <h6>{{ $train->on_time ? 'TRENO IN ORARIO' : '' }}</h6>
        <h6>{{ $train->delayed ? 'TRENO IN RITARDO' : '' }}</h6>
        

        


    </div>   
    @endforeach
</div>
    
@endsection