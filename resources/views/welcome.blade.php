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

        <header id="welcome">
            <nav id="navbar-main" class="navbar navbar-default navbar-dynamic">
                <div class="container">
                    <div id="welcome-header" class="navbar-header">
                        <a class="navbar-brand brand" href="/">
                            <img class="brand-img" src="{{ elixir('img/brand/kraken-violet-dark.svg') }}" alt="Kraken">
                            Kraken
                        </a>
                        <button id="navbar-toggler" type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#welcome-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div id="welcome-menu" class="navbar-menu navbar-toggleable-md collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="/docs">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Docs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="/examples">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Examples
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="https://www.patreon.com/kraken_php">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                    Donate
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="https://github.com/kraken-php/framework">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                    GitHub
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link primary-link" href="https://github.com/kraken-php/framework/releases">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Download
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="intro">
                <div id="particles-background" class="vertical-centered-box"></div>
                <div id="particles-foreground" class="vertical-centered-box"></div>
                <div id="particles-overground" class="vertical-centered-box"></div>
                <div id="intro-content" class="container">
                    <img id="intro-brand" src="{{ elixir('img/brand/kraken.svg') }}" alt="Kraken">
                    <div id="intro-details" class="vcenter">
                        <h1 id="intro-name">Kraken</h1>
                        <h3 id="intro-text">Distributed & Async PHP Framework</h3>
                        <p id="intro-shorts">Version 0.3.0 · <a href="https://github.com/kraken-php/framework">GitHub Project</a> · <a href="/docs">Docs</a> · <a href="https://github.com/kraken-php/framework/issues">Issues</a>  · Created by <a href="https://github.com/khelle">Kamil Jamróz</a></p>
                        <div id="intro-btns">
                            <a class="btn btn-intro btn-lg" href="https://github.com/kraken-php/framework/releases">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download
                            </a>
                        </div>
                    </div>
                </div>
                <div id="intro-btn-group">
                    <div class="container">
                        <a class="btn-next section-btn-next page-scroll" href="#sec-info">
                            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                            Explore Features
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="social">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <iframe src="https://ghbtns.com/github-btn.html?user=kraken-php&repo=framework&type=star&count=true" frameborder="0" scrolling="0" width="75px" height="20px"></iframe>
                    </li>
                    <li>
                        <iframe src="https://ghbtns.com/github-btn.html?user=kraken-php&repo=framework&type=fork&count=true" frameborder="0" scrolling="0" width="75px" height="20px"></iframe>
                    </li>
                    <li>
                        <a href="https://twitter.com/kraken_php" class="twitter-follow-button" data-show-count="true">Follow @kraken_php</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://kraken-php.com" data-text="Kraken, the first and only, distributed and async PHP framework" data-via="kraken_php">Tweet</a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="sec-info" class="section section-odd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header">Created for Special Tasks</h1>
                        <hr class="section-delimiter">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="section-text">
                            Kraken is the first and only multi-processed, multi-threaded, fault-tolerant framework for PHP. It has been written to provide easy and reliable API for creating distributed applications using PHP. Kraken aims to solve typical problems of writing such applications and to provide developers with powerful yet elegant tools for dealing with them.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="section-text">
                            Start writing applications that were previously marked as impossible or hard to implement in PHP right now. Servers, service-oriented architecture, agent-based models, games, complex daemons, socket programs, schedulers and much, much more - nothing is impossible with Kraken!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 text-right">
                        <a class="btn section-btn" href="/docs">
                            See docs<i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn section-btn" href="/docs/installation">
                            Get started<i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <a class="btn-next section-btn-next page-scroll" href="#sec-designs">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    View Designs
                </a>
            </div>
        </section>

        <section id="sec-designs" class="section section-even">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header">Carefully Designed</h1>
                        <hr class="section-delimiter">
                    </div>
                </div>
                <div class="row row-eq-height">
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-random" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                Concurrent
                            </h4>
                            <p>Create systems that are <a>asynchronous</a> and <a>concurrent</a> by design.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-share-alt" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                Distributed
                            </h4>
                            <p>Divide your application into several <a>containers</a> and run them on multiple threads, processors or hosts.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-shield" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                Fault Tolerant
                            </h4>
                            <p>Write systems that self-heal using remote and local <a>supervision hierarchies</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-eq-height">
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-cogs" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                Elastic
                            </h4>
                            <p>Modify existing architecture in <a>realtime</a> without need to change in code.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-line-chart" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                High Performant
                            </h4>
                            <p>Handle up to <a>thousands of connections</a> per second on each container.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-xs-center">
                        <div class="feature">
                            <i class="icon-lg fa fa-plug" aria-hidden="true"></i>
                            <h4 class="text-uppercase">
                                Extensible
                            </h4>
                            <p>Use available options to easily <a>extend</a> and <a>adapt</a> framework features for your needs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <a class="btn-next section-btn-next page-scroll" href="#sec-features">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    View Features
                </a>
            </div>
        </section>

        <section id="sec-features" class="section section-odd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header">Fully Featured</h1>
                        <hr class="section-delimiter">
                    </div>
                </div>

                <ul class="nav nav-pills feature-nav">
                    <li class="feature-item nav-item">
                        <a class="nav-link active" href="#" data-toggle="tab" data-target="#feature1-tab">
                            Event-driven Architecture
                        </a>
                    </li>
                    <li class="feature-item nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#feature2-tab">
                            Asynchronous Components
                        </a>
                    </li>
                    <li class="feature-item nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#feature3-tab">
                            Container-based Distribution Model
                        </a>
                    </li>
                    <li class="feature-item nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#feature4-tab">
                            Adaptive System Management
                        </a>
                    </li>
                    <li class="feature-item nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#feature5-tab">
                            Flexible & Reliable Design
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="line-break"></div>
                <div id="tab-features" class="tab-content">
                    <div class="tab-pane fade in active" id="feature1-tab">
                        @include('index.feature1')
                    </div>
                    <div class="tab-pane fade" id="feature2-tab">
                        @include('index.feature2')
                    </div>
                    <div class="tab-pane" id="feature3-tab">
                        @include('index.feature3')
                    </div>
                    <div class="tab-pane" id="feature4-tab">
                        @include('index.feature4')
                    </div>
                    <div class="tab-pane" id="feature5-tab">
                        @include('index.feature5')
                    </div>
                </div>
            </div>

            <div class="container">
                <a class="btn-next section-btn-next page-scroll" href="#sec-performance">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    Show Performance Data
                </a>
            </div>
        </section>

        <section id="sec-performance" class="section section-even">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header">Extremely Fast</h1>
                        <hr class="section-delimiter">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Able to emit millions of events per second
                        </p>
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Able to handle tens of thousands of messages and promises per second
                        </p>
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Several times faster than traditional PHP approach
                        </p>
                        <div class="line-break"></div>
                    </div>
                    <div class="col-xs-12 hidden-sm-down">
                        <div class="y-chart y-chart-lg" data-target="#chart1">
                            <div class="chart-title">
                                Amount of [ HTTP Req-Reps / s ]
                            </div>
                            <ul class="chart-entries">
                                <li>Kraken 0.2</li>
                                <li>Express</li>
                                <li>Phalcon 1.3</li>
                                <li>Slim 2.6</li>
                                <li>CodeIgniter 3</li>
                                <li>Yii 2.0</li>
                                <li>Bear 1.0</li>
                                <li>Silex 1.2</li>
                                <li>Fuel 1.8</li>
                                <li>Symfony 2.6</li>
                                <li>Cake 3.0</li>
                            </ul>
                            <ul class="chart-values">
                                <li>6198</li>
                                <li>4884</li>
                                <li>3953</li>
                                <li>1946</li>
                                <li>1771</li>
                                <li>932</li>
                                <li>869</li>
                                <li>860</li>
                                <li>759</li>
                                <li>654</li>
                                <li>622</li>
                            </ul>
                            <div class="chart-opts">
                                <div class="chart-opt-min">0</div>
                            </div>
                        </div>
                        <div class="y-target-lg">
                            <canvas id="chart1"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="line-break"></div>
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Scalable for multiple processes and threads
                        </p>
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Able to extend over 100% performance under pressure for limited amount of time
                        </p>
                        <p class="performance-li">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            Faster than standard libraries running on Node.js
                        </p>
                        <div class="line-break"></div>
                    </div>
                    <div class="col-xs-6 hidden-sm-down">
                        <div class="y-chart y-chart-lg" data-target="#chart2">
                            <div class="chart-title">
                                Amount of [ HTTP Req-Reps / s ]
                            </div>
                            <ul class="chart-entries">
                                <li>Kraken 0.2</li>
                                <li>Node.js + Express</li>
                            </ul>
                            <ul class="chart-values">
                                <li>6198</li>
                                <li>4884</li>
                            </ul>
                            <div class="chart-opts">
                                <div class="chart-opt-min">0</div>
                            </div>
                        </div>
                        <div class="y-target-md">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-6 hidden-sm-down">
                        <div class="y-chart y-chart-lg" data-target="#chart3">
                            <div class="chart-title">
                                Amount of [ WebSocket Emits / s ]
                            </div>
                            <ul class="chart-entries">
                                <li>Kraken 0.2</li>
                                <li>Node.js + SockJS</li>
                            </ul>
                            <ul class="chart-values">
                                <li>64613</li>
                                <li>55944</li>
                            </ul>
                            <div class="chart-opts">
                                <div class="chart-opt-min">30000</div>
                            </div>
                        </div>
                        <div class="y-target-md">
                            <canvas id="chart3"></canvas>
                        </div>
                    </div>
                </div>
                <a class="btn-next section-btn-next page-scroll" href="#sec-community">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    Show Miscellaneous
                </a>
            </div>
        </section>

        <section id="sec-community" class="section section-odd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header">Bound to Amaze</h1>
                        <hr class="section-delimiter">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="section-text">Start writing asynchronous, multi-processed, multi-threaded application in PHP right now and be amazed how easy the whole process gets thanks to Kraken Interface. Try it now for free.</p>
                        <div class="line-break"></div>
                        <div class="btn-block text-center">
                            <a class="btn btn-outline-primary btn-xlg" href="https://github.com/kraken-php/framework/releases">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download
                            </a>
                        </div>
                        <div class="line-break"></div>
                        <p class="section-text">Still have some questions? Visit one of our pages of interest listed below or ask the community.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <div class="line-break"></div>
                        <h3 class="twitter-clearfix">Pages of Interest</h3>
                        <div class="btn-block">
                            <a class="btn btn-outline-primary btn-block btn-lg btn-amaze" href="/docs">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Read Docs
                            </a>
                            <a class="btn btn-outline-primary btn-block btn-lg btn-amaze" href="/examples">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                See Examples
                            </a>
                            <a class="btn btn-outline-primary btn-block btn-lg btn-amaze" href="/faqs">
                                <i class="fa fa-question" aria-hidden="true"></i>
                                See Faqs
                            </a>
                            <a class="btn btn-outline-primary btn-block btn-lg btn-amaze" href="https://github.com/kraken-php/framework">
                                <i class="fa fa-github" aria-hidden="true"></i>
                                See Github Repository
                            </a>
                            <a class="btn btn-outline-primary btn-block btn-lg btn-amaze" href="https://groups.google.com/forum/#!forum/kraken-php">
                                <i class="fa fa-at" aria-hidden="true"></i>
                                See Mailing List
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="line-break"></div>
                        <a class="twitter-timeline" data-link-color="#8002AF" data-chrome="transparent" data-height="27rem" href="https://twitter.com/kraken_php">Tweets by kraken_php</a>
                    </div>
                </div>

                <a class="btn-next section-btn-next page-scroll" href="#sec-info">
                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                    Start from the Beginning
                </a>
            </div>
        </section>

        <section id="quote-1" class="section quote">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h4>Everything is possible. The impossible just takes longer.</h4>
                    </div>
                </div>
            </div>
        </section>

        <footer id="farewell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a class="footer-brand brand" href="/">
                            <img class="brand-img" src="{{ elixir('img/brand/kraken-violet-light.svg') }}" alt="Kraken">
                            Kraken
                        </a>
                        is a trademark of Kamil Jamróz. All rights reserved. Site designed by Kamil Jamróz, inspired by works of Jack McDade.
                    </div>
                </div>
                <div class="clearfix hidden-sm-down">
                    <hr>
                    <div class="footbar-menu">
                        <ul class="nav footbar-nav">
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="/docs">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Docs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="/examples">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Examples
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="https://www.patreon.com/kraken_php">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                    Donate
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link primary-link" href="https://github.com/kraken-php/framework">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                    GitHub
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link primary-link" href="https://github.com/kraken-php/framework/releases">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Download
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" charset="utf-8" src="{{ elixir('js/index.js') }}"></script>
        <script type="text/javascript" charset="utf-8" src="//platform.twitter.com/widgets.js" async="true"></script>
    </body>
</html>


