<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kraken Framework</title>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="title" content="Kraken Framework">
    <meta name="author" content="Kamil Jamróz">
    <meta name="keywords" content="kraken, kraken-php, framework, distribution, distributed, async, asynchronous, parallel, concurrent,process, thread, multi-processed, multi-threaded, event-driven, message-driven, service, soa, agent, agent-model, fault-tolerance, fault-tolerant, error-tolerance, error-tolerant, daemon, demon">
    <meta name="description" content="The first and only multi-processed, multi-threaded, fault-tolerant framework for PHP.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- style sheets -->
    <link rel="icon" href="{{ elixir('img/brand/kraken-black.svg') }}">
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:400,700|Trade+Winds:400|Lato:300,400,700|Source+Sans+Pro:200,400,700">
</head>
<body>

<div id="preloader">
    <div id="kraken-loader">
        <div id="bulat">
            <div id="dalbulat">
                <img src="{{ elixir('img/brand/kraken-violet-dark.svg') }}">
                <span>L</span>
                <span>O</span>
                <span>A</span>
                <span>D</span>
                <span>I</span>
                <span>N</span>
                <span>G</span>
            </div>
            <div id="luarbulat"></div>
        </div>
        <div id="bulat-link"><a href="/"></a>
        </div>
    </div>
</div>

@include('template.header')

@yield('content')

@include('template.footer')

<script type="text/javascript" charset="utf-8" src="{{ elixir('js/index.js') }}"></script>
</body>
</html>
