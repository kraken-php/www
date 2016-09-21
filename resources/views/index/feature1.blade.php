<div class="row">
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Event-Loop</h4>
        <br>
        <p class="section-text">
            The whole architecture of framework is designed to work on top of Event-Loop. This concept allows for asynchronous processing in a simple JavaScript-like manner, that is easy to understand for developers. Behind the abstraction layer the programmer can choose from multiple loop backends to maximize compatibility with different environments.
        </p>
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
<pre  class="language-php line-numbers"><code>$loop = new Loop(new SelectLoop);

$loop->onStart(function() {
    echo "Hello World!\n";
});
$loop->addInterval(1.0, function() {
    echo "Tick!\n";
});

$loop->start();</code></pre>
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
<pre  class="language-php line-numbers"><code>$emitter = new EventEmitter($loop);

$emitter->once('message', function() {
    echo "Hello!\n";
});
$emitter->on('message', function($message) {
    echo sprintf("Your message is %s\n", $message);
});

$emitter->emit('message', 'Kraken is awesome!');</code></pre>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Event-Emitters</h4>
        <br>
        <p class="section-text">
            To emit and listen on events the Event-Emitters are used. Each component is built around them allowing architecture to be as loose-coupled and extensible as possible. The framework allows to implement additional modules using either synchronous or asynchronous emitter classes, interfaces and traits to fully cater to various needs.
        </p>
    </div>
    <div class="col-xs-12 clearfix">
        <div class="line-break"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Promise Support</h4>
        <br>
        <p class="section-text">
            Managing distributed and dynamic architecture using only event-pattern can become problematic and fault-prone as the project expands. To keep things reliable and rapid the framework ships with its own implementation of Promises/A+ specification. All higher level interfaces shipped with framework use promise-pattern to keep coding easy.
        </p>
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
<pre  class="language-php line-numbers"><code>$deferred = new Deferred();
$promise  = $deferred->getPromise();
$promise
    ->done(
        function($result) {
            echo sprintf("Result of operation is %s\n", $result);
        }
    );

return $deferred->resolve(new AsyncTask($data));</code></pre>
            </div>
        </div>
    </div>
</div>
