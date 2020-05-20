@extends('layouts.app');
@section('content')
    @guest
        <h1>Please Login</h1>
    @else
        {{-- @foreach ($sensors as $sensor)
        <h1>{{$sensor}}</h1>
        @endforeach
        @foreach ($values as $value)
        <h1></h1>
        @endforeach --}}
         {{-- @foreach ($values as $value){{$value->hr.","}}@endforeach --}}


        <canvas id="line-chart" width="30" height="10"></canvas>

            <script >
                 new Chart(document.getElementById("line-chart"), {
                    type: 'line',
                    data: {
                        labels: [@foreach ($values as $value)<?php $hr = strval( $value->hr ); echo $hr.","?>@endforeach],
                        datasets: [{
                            data: [@foreach ($values as $value)<?php $val = strval( $value->values ); echo $val.","?>@endforeach],
                            label: "ESP8266",
                            borderColor: "#3e95cd",
                            fill: false
                        }
                        ]
                    },
                    options: {
                        title: {
                        display: true,
                        text: 'PIF'
                        }
                    }
                    });
            </script>



    @endguest
@endsection
