@extends('layouts.app')

@section('content')
    <div class="introduction mb-5">
        <div class="col-6">
            <h1>{{ $data['title'] }}</h1>
            <p>Hier krijg je een overzicht van al je totale statistieken van het huidige jaar. </p>
            <a href="{{ route('steps.create') }}" class="btn btn-success">Direct stappen toevoegen!</a>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div class="statistics">
            <div class="row">
                <div class="col-3">
                    <div class="card statistic-card">
                        <div class="card-header">
                            <h5 class="pt-2">Totaal aantal stappen voor {{ date('Y') }}</h5>
                        </div>
                        <div class="card-body">
                            <p><span class="fs-1">{{ $stepsByYear }}</span> stappen gezet in {{ date('Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card statistic-card">
                        <div class="card-header">
                            <h5 class="pt-2">Aantal afgelegde kilometers:</h5>
                        </div>
                        <div class="card-body">
                            <p><span
                                    class="fs-1">{{ round(($stepsByYear * 67) / 100000, 2) }}</span><span> km gelopen</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card statistic-card">
                        <div class="card-header">
                            <h5 class="pt-2">Tijd in beweging:</h5>
                        </div>
                        <div class="card-body">
                            <p><span class="fs-1">{{ $hoursInMovement }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
