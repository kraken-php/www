<?php

return [
    'info_text' => 'Kraken is the first and only multi-processed, multi-threaded, fault-tolerant framework for PHP. It has been written to provide easy and reliable API for creating distributed applications using PHP. Kraken aims to solve typical problems of writing such applications and to provide developers with powerful yet elegant tools for dealing with them.',
    'info_desc' => 'Start writing applications that were previously marked as impossible or hard to implement in PHP right know. Servers, service-oriented architecture, agent-based models, games, complex daemons, socket programs, schedulers and much, much more - nothing is impossible with Kraken!',

    'design_title1' => 'Concurrent',
    'design_desc1'  => 'Create systems that are <a>asynchronous</a> and <a>concurrent</a> by design.',
    'design_title2' => 'Distributed',
    'design_desc2'  => 'Divide your application into several <a>containers</a> and run them on multiple threads, processors or hosts.',
    'design_title3' => 'Fault Tolerant',
    'design_desc3'  => 'Write systems that self-heal using remote and local <a>supervision hierarchies</a>.',
    'design_title4' => 'Elastic',
    'design_desc4'  => 'Modify existing architecture in <a>realtime</a> without need to change in code.',
    'design_title5' => 'High Performant',
    'design_desc5'  => 'Handle up to <a>thousands of connections</a> per second on each container.',
    'design_title6' => 'Extensible',
    'design_desc6'  => 'Use available options to easily <a>extend</a> and <a>adapt</a> framework features for your needs.',

    'feature_tab1'  => 'Event-driven Architecture',
    'feature_tab2'  => 'Asynchronous Components',
    'feature_tab3'  => 'Actor-based Distribution Model',
    'feature_tab4'  => 'Adaptive System Management',
    'feature_tab5'  => 'Flexible & Reliable Design',

    'feature_tab1_title1'   => 'Event-Loop',
    'feature_tab1_desc1'    => 'The whole architecture of framework is designed to work on top of Event-Loop. This concept allows for asynchronous processing in a simple JavaScript-like manner, that is easy to understand for developers. Behind the abstraction layer the programmer can choose from multiple loop backends to maximize compatibility with different environments.',
    'feature_tab1_title2'   => 'Event-Emitters',
    'feature_tab1_desc2'    => 'To emit and listen on events the Event-Emitters are used. Each component is built around them allowing architecture to be as loose-coupled and extensible as possible. The framework allows to implement additional modules using either synchronous or asynchronous emitter classes, interfaces and traits to fully cater to various needs.',
    'feature_tab1_title3'   => 'Promise Support',
    'feature_tab1_desc3'    => 'Managing distributed and dynamic architecture using only event-pattern can become problematic and fault-prone as the project expands. To keep things reliable and rapid the framework ships with its own implementation of Promises/A+ specification. All higher level interfaces shipped with framework use promise-pattern to keep coding easy.',

    'feature_tab2_title1'   => 'Asynchronous TCP and UDP sockets',
    'feature_tab2_desc1'    => 'In addition to many modules delivered with framework, one of the most important are the asynchronous TCP and UDP sockets. Developers can use them as pure IPC communication endpoints, build on top of them more advanced controllers for specialized protocols or send and receive data from external services with an easy event-based interface.',
    'feature_tab2_title2'   => 'Asynchronous Stream wrappers',
    'feature_tab2_desc2'    => 'Processing big amount of data is not be possible to be done with reasonable usage of resources without using streams. To deal with this, Kraken provides various asynchronous and synchronous stream controllers. Writers, Readers, Seekers, Duplex streams, pipes and more complex interfaces are provided.',
    'feature_tab2_title3'   => 'Standalone HTTP & WebSocket server',
    'feature_tab2_desc3'    => 'The most popular Web protocols, HTTP and Websockets, are supported through a standalone server. Framework is able to handle requests and produce asynchronous responses for them and its sub-protocols. In addition firewalls, routers, session-saving mechanisms and protocol encoders are featured.',

    'feature_tab3_title1'   => 'Consitent Multi-processing & Multi-threading',
    'feature_tab3_desc1'    => 'Writing multi-processed and multi-threaded applications is supported and simplified with a simple and consistent interface. Developer do not longer need to think about forking and creating php threads manually or how to store and clean them. Everything is done automatically using several fallback layers and keeps to work independently.',
    'feature_tab3_title2'   => 'Actors as Containers',
    'feature_tab3_desc2'    => 'Distributed processing between active processes and threads is designed to work as actor-based distribution models do. Processes and threads extends common container class and are treated as separate actors. Each actor can work independently or in cluster. Thanks to shared interface operating on containers does not require from architect to remember which of them are processes and threads.',
    'feature_tab3_title3'   => 'Message-driven Communication',
    'feature_tab3_desc3'    => 'To make utterly perfect MT programs developers don\'t need mutexes, locks, or any other form of inter-thread communication except messages sent across endpoints. With this idea in mind, the whole concept of exchanging information between contaiers is purely message-driven. Framework, by default, ships with several different IPC that programmer can use individually or all-together.',

    'feature_tab4_title1'   => 'Configurable Supervision Hierarchies',
    'feature_tab4_desc1'    => 'To ensure system reliability, each one of containers is equipped with configurable supervisor systems. These allow developers to define and inject strategies defining how to react to thrown errors and exceptions. Access to both local and remote supervisors makes possible to deal with them locally or delegate decision-handling to one of the parents.',
    'feature_tab4_title2'   => 'Built-in Routing System',
    'feature_tab4_desc2'    => 'All communication between containers is enclosed to special controllers called Channels. They provide single abstract interface to exchange data, regardless of IPC model chosen to do the job. Each one consists of configurable routers, message & protocol encoders and IPC abstraction layer. Define the way of passing messages once, make it adaptive and see how easy sending and receiving messages gets.',
    'feature_tab4_title3'   => 'Extensible Console Clients & Servers',
    'feature_tab4_desc3'    => 'Aside from code manipulation the framework support parsing messages received through command line. Use console clients to execute predefined tasks, change state and structure of working architecture without need to restart everything. Write your own commands to extend its effect to your business logic. Use console servers to be able to divide your architecture to multiple hosts easily and manage all of them from single place.',

    'feature_tab5_title1'   => 'PHP 5.5+ & PHP 7.0+ Compatible',
    'feature_tab5_desc1'    => 'Code has been written in PHP 5.5+ and PHP 7.0+ in mind. It is fully compatible and tested on both of them.',
    'feature_tab5_title2'   => 'React Compatible',
    'feature_tab5_desc2'    => 'By default framework ships with React adapters to make its components usable. Any of React core or based-on modules is able to work perfectly in Kraken environment.',
    'feature_tab5_title3'   => 'Platform Independent',
    'feature_tab5_desc3'    => 'All required to work mechanics including managing processes and threads is written in a platform-independent way to allow framework to be run on both Unix and Windows operating systems.',

    'performance_point1'    => 'Able to emit millions of events per second',
    'performance_point2'    => 'Able to handle tens of thousands of messages and promises per second',
    'performance_point3'    => 'Several times faster than traditional PHP approach',
    'performance_point4'    => 'Scalable for multiple processes and threads',
    'performance_point5'    => 'Able to extend over 100% performance under pressure for limited amount of time',
    'performance_point6'    => 'Faster than standard libraries running on Node.js',

    'amaze_par1'    => 'Start writing asynchronous, multi-processed, multi-threaded application in PHP right now and be amazed how easy the whole process gets thanks to Kraken Interface. Try it now for free.',
    'amaze_par2'    => 'Still have some questions? Visit one of our pages of interest listed below or ask the community.',

    'quote1'        => 'Everything is possible. The impossible just take longer.',
    'quote2'        => '',
];
