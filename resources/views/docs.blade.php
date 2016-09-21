@extends('template')

@section('content')
    <section id="sec-docs" class="section section-odd section-docs">
        <div class="container">
            <div class="btns-left hidden-lg-up">
                <button id="toc-toggler" class="btn btn-outline-primary">
                    Table of contents
                </button>
            </div>
            <div class="btns-right">
                <span class="dropdown">
                    <label class="hidden-sm-down">Branch:</label>
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="docs-version" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! $currentVersion !!} version
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="docs-version">
                        @foreach ($versions as $version=>$versionName)
                            <a class="dropdown-item" href="/docs/{!! $version !!}{!! $currentSection !!}">{!! $versionName !!}</a>
                        @endforeach
                    </div>
                </span>
                <a href="https://github.com/kraken-php/docs/edit/{!! $currentVersion !!}{!! $currentSection !!}.md" class="btn btn-outline-primary hidden-xs-down">Edit this page</a>
            </div>

            <section id="docs-sidebar" class="sidebar">
                {!! $index !!}
            </section>

            <article id="docs-article" class="article">
                {!! $content !!}
            </article>

            <a class="btn-next section-btn-next page-scroll" href="#sec-docs">
                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                Start from the Beginning
            </a>
        </div>
    </section>
@endsection
