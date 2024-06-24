@extends('layouts.app')

@section('content')
    <div class="introduction mb-5">
        <div class="col-6">
            <h1>{{ $data['title'] }}</h1>
            <p>Hier krijg je een overzicht van al je dagelijkse stappen en activiteiten. Dit dashboard is ontworpen om
                je te helpen je voortgang te volgen, je doelen te bereiken en inzicht te krijgen in je
                bewegingspatronen.</p>
            <a href="{{ route('steps.create') }}" class="btn btn-success">Direct stappen toevoegen!</a>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div class="statistics">
            <div class="row">
                <div class="col-3">
                    <div class="card statistic-card bg-success-subtle">
                        <div class="card-header">
                            <h5 class="pt-2">Aantal stappen deze maand:</h5>
                        </div>
                        <div class="card-body">
                            <p><span
                                    class="fs-1">{{ $stepsByMonthAndYear }}</span><span> stappen gezet deze maand</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card statistic-card bg-warning-subtle">
                        <div class="card-header">
                            <h5 class="pt-2">Aantal afgelegde kilometers:</h5>
                        </div>
                        <div class="card-body">
                            <p><span class="fs-1">{{ round(($stepsByMonthAndYear * 67) / 100000, 2) }}</span><span> km gelopen</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card statistic-card bg-warning-subtle">
                        <div class="card-header">
                            <h5 class="pt-2">Tijd in beweging:</h5>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="steps">
            <h3 class="title">Stappen overzicht</h3>

            @if (!$steps->isEmpty())
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Aantal</th>
                        <th>Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($steps as $step)
                        <tr>
                            <td>{{ $step->id }}</td>
                            <td>{{ $step->amount }}</td>
                            <td>{{ $step->getFormattedDate() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p><i>Je hebt nog geen stappen toegevoegd...</i></p>
            @endif
        </div>
    </div>
@endsection
