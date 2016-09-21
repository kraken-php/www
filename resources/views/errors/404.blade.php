@extends('error')

@section('content')

<div class="error-page">
    <div class="err-container">
        <div class="err-content">
            <img class="err-img" src="{{ elixir('img/brand/kraken-black.svg') }}" alt="Kraken">
            <div class="err-title">Page Not Found.</div>
        </div>
    </div>
</div>

@endsection