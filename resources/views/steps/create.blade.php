@extends('layouts.app')

@section('content')
    <div class="introduction mb-5">
        <div class="col-6">
            <h1>{{ $data['title'] }}</h1>
            <p>Klaar om nieuwe stappen toe te voegen? Vul dan hieronder het formulier in.</p>
        </div>
    </div>

    <div class="col-6">
        @if (session('error'))
		<div class="alert alert-danger mb-4">
            <span>{{ session('error') }}</span>
        </div>
        @endif
        <div class="form-section">
            <form action="{{ route('steps.create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="amount" class="form-label">Aantal stappen *</label>
                    <input type="number" name="amount" class="form-control" id="amount"
                           placeholder="Vul hier het aantal stappen in..."
                           value="{{ old('amount') }}" required>
                </div>

                <div class="form-group mt-4">
                    <label for="date" class="form-label">Datum *</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Vul hier de datum in"
                           value="{{ old('date') }}" required>
                </div>

                <div class="form-group mt-4">
                    <input type="submit" class="btn btn-success" value="Opslaan"/>
                </div>
            </form>
        </div>
    </div>
@endsection
