<div class="row">
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Asynchronous TCP and UDP sockets</h4>
        <br>
        <p class="section-text">
            In addition to many modules delivered with framework, one of the most important are the asynchronous TCP and UDP sockets. Developers can use them as pure IPC communication endpoints, build on top of them more advanced controllers for specialized protocols or send and receive data from external services with an easy event-based interface.
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
<pre  class="language-php line-numbers"><code>$listener = new SocketListener('tcp://127.0.0.1:6000', $loop);

$listener->on('connect', function(SocketListenerInterface $listener, SocketInterface $socket) {
    $socket->on('data', function(SocketInterface $socket, $data) {
        $socket->write(new Response($data));
    });
});
$listener->on('error', function(SocketListenerInterface $listener, $ex) {
    $logger->write(sprintf("Error occurred: %s", $ex->getMessage()));
});</code></pre>
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
<pre  class="language-php line-numbers"><code>$reader = new StreamReader($file, $loop);
$writer = new StreamWriter($socket, $loop);

$reader->pipe($writer);

$writer->on('drain', function() {
    $reader->close();
    $writer->close();
});</code></pre>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Asynchronous Stream wrappers</h4>
        <br>
        <p class="section-text">
            Processing big amount of data is not be possible to be done with reasonable usage of resources without using streams. To deal with this, Kraken provides various asynchronous and synchronous stream controllers. Writers, Readers, Seekers, Duplex streams, pipes and more complex interfaces are provided.
        </p>
    </div>
    <div class="col-xs-12 clearfix">
        <div class="line-break"></div>
    </div>
    <div class="col-xs-12 col-md-6">
        <h4 class="color-header">Standalone HTTP & WebSocket server</h4>
        <br>
        <p class="section-text">
            The most popular Web protocols, HTTP and Websockets, are supported through a standalone server. Framework is able to handle requests and produce asynchronous responses for them and its sub-protocols. In addition firewalls, routers, session-saving mechanisms and protocol encoders are featured.
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
<pre  class="language-php line-numbers"><code>$server = new NetworkServer(
    new SocketListener('tcp://127.0.0.1:80', $loop)
);

$server->addRoute('/', new IndexController);
$server->addRoute('/about', new AboutController);
$server->addRoute('/{first}/{second}', new FallbackController);
$server->addRoute('/chat', new WsServer(null, new ChatApp));</code></pre>
            </div>
        </div>
    </div>
</div>
