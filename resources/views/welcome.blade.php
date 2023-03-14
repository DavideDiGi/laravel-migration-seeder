<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <h1 class="text-center py-3">Treni in Partenza Oggi</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        
                        @foreach ($trains as $train)
                            
                        <div class="card my-3">
                            <div class="card-body">
                                <h6 class="card-title text-secondary mt-1">Azienda Treno: {{ $train->company }}</h6>
                                <h4 class="card-title">Tratta Treno: <span class="fw-light text-success">{{ $train->departure_station}} - {{ $train->arrival_station }}</span></h4>
                                <h4 class="card-title d-inline">Orario di partenza e arrivo: <span class="fw-light text-danger">{{ $train->departure_time}} - {{ $train->arrival_time }}</span></h5>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
