<div class="row">
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Configurable Supervision Hierarchies</h4>
        <br>
        <p class="section-text">
            To ensure system reliability, each one of containers is equipped with configurable supervisor systems. These allow developers to define and inject strategies defining how to react to thrown errors and exceptions. Access to both local and remote supervisors makes possible to deal with them locally or delegate decision-handling to one of the parents.
        </p>
    </div>
    <div class="col-xs-12 col-md-6 hidden-sm-down" style="display: block; min-height: 100%;">
        <div class="browser-window">
            <div class="browser-header">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class="browser-body">
<pre  class="language-php line-numbers"><code>$local = $runtime->getSupervisor();

$local->setSolvers([
    'App\Exception\SomeCustomException' => [ 'Log', 'ContainerContinue' ],
    'App\Exception\OtherException'      => [ 'RuntimeRecreate' ],
    'Kraken\Throwable\Error\FatalError' => [ 'Log', 'ContainerDestroy' ],
    'Exception' => [ 'Log', 'ContainerContinue' ],
    'Error'     => [ 'Log', 'ContainerContinue' ]
]);</code></pre>
            </div>
        </div>
    </div>
    <div class="col-xs-12 clearfix">
        <div class="line-break"></div>
    </div>
    <div class="col-xs-12 col-md-6 hidden-sm-down">
        <div class="browser-window">
            <div class="browser-header">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class="browser-body">
<pre  class="language-php line-numbers"><code>$router = $channel->getBus('slave')->getInput();
$router->addRule(
    new RuleMatchDestination($channel->getName()),
    new RuleHandler(function($params) { // Do something with message })
);
$router->addDefault(
    new RuleHandler(function($params) use($channel) {
        $channel->getBus('master')->push($channel->getParent(), $params['protocol'], $params['flags']);
    })
);</code></pre>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Built-in Routing System</h4>
        <br>
        <p class="section-text">
            All communication between containers is enclosed to special controllers called Channels. They provide single abstract interface to exchange data, regardless of IPC model chosen to do the job. Each one consists of configurable routers, message & protocol encoders and IPC abstraction layer. Define the way of passing messages once, make it adaptive and see how easy sending and receiving messages gets.
        </p>
    </div>
    <div class="col-xs-12 clearfix">
        <div class="line-break"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Extensible Console Clients & Servers</h4>
        <br>
        <p class="section-text">
            Aside from code manipulation the framework support parsing messages received through command line. Use console clients to execute predefined tasks, change state and structure of working architecture without need to restart everything. Write your own commands to extend its effect to your business logic. Use console servers to be able to divide your architecture to multiple hosts easily and manage all of them from single place.
        </p>
    </div>
    <div class="col-xs-12 col-md-6 hidden-sm-down">
        <div class="browser-window browser-sm">
            <div class="browser-header">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class="browser-body">
<img src="{{ elixir('img/index/console.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
