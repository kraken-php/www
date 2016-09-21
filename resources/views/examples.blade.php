@extends('template')

@section('content')
    <section id="sec-examples" class="section section-odd section-examples">
        <div class="container">
            <article>
                <h1>Kraken Examples</h1>
                <p>This section contains application examples working with Kraken Framework. If you would like to propose additional example or promote your application here, contact us!</p>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card text-xs-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <img class="card-img-top" src="https://avatars2.githubusercontent.com/u/15938282?v=3&s=200" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Kraken Application Skeleton</h4>
                                <p class="card-text">A pre-configured, clean and empty skeleton for creating a new projects using Kraken Framework.</p>
                                <a href="https://github.com/kraken-php/kraken" class="btn btn-primary">See Code</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card text-xs-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <img class="card-img-top" src="https://docs.google.com/uc?export=download&id=0B_FVuB10kPjVOC1UM1hvaVNPS2M" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Kraken Demo Chat Application</h4>
                                <p class="card-text">An exemplary implementation of chat using HTTP and Websocket servers with Kraken Framework components.</p>
                                <a href="https://github.com/kraken-php/demo-chat" class="btn btn-primary">See Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <a class="btn-next section-btn-next page-scroll" href="#sec-examples">
                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                Start from the Beginning
            </a>
        </div>
    </section>
@endsection