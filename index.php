<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>ChuckCSS.io | Tests</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <link rel="icon" href="favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg">
        <meta name="theme-color" content="#ffffff">

        <!-- CSS -->
        <link rel="stylesheet" href="dist/chuckcss.min.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="tests/prism.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="tests/test.css" type="text/css" media="screen" charset="utf-8" />
    </head>

    <body class="test">
        <!-- Show screen infos -->
        <div id="screen-infos">
            <span class="screen-width">...DIOT...</span>px<br />
            "<span class="screen-media">...DIOT...</span>" screen
        </div>

        <header id="main-header">
            <div class="columns">
                <div class="cc-12 cc-txt-center">
                    <a href="http://chuckcss.io"><img src="img/logo-chuckcss-header.png" alt="" /></a>
                </div>
                <div class="cc-12 cc-txt-center">
                    <h1>
                        In ChuckCSS We Trust<br />
                        <small>Your are on the test page. It helps me to develop ChuckCSS</small>
                    </h1>
                </div>
            </div>
        </header>

        <!-- COMPONENTS -->
        <section class="components">
            <header>
                <h2 class="title">Components</h2>
                <p class="description">
                    Style for <strong>components</strong>
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-alerts" class="btn cc-bg-primary">Alerts</a>
                    <a href="#" data-rel="cc-messages" class="btn cc-bg-primary">Messages</a>
                    <a href="#" data-rel="cc-badges" class="btn cc-bg-primary">Badges</a>
                    <a href="#" data-rel="cc-tabs" class="btn cc-bg-primary">Tabs</a>
                    <a href="#" data-rel="cc-modals" class="btn cc-bg-primary">Modals</a>
                </p>
            </header>

            <div class="main cc-alerts">
                <h3 class="title">Alerts</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="alert alert-primary ion-minus-circled">
                            &lt;button class="close">&lt;i class="ion-ios-close-outline">&lt;/i>&lt;/button>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="alert alert-primary ion-minus-circled">
                    <button class="close"><i class="ion-ios-close-outline icon-left"></i></button>
                    <strong>Primary color</strong> alert with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="alert alert-info">
                            &lt;i class="far fa-check-circle">&lt;/i>
                            &lt;button class="close">&lt;i class="ion-ios-close-outline">&lt;/i>&lt;/button>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="alert alert-info">
                    <i class="far fa-check-circle icon-left"></i>
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <strong>Info</strong> alert with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="alert alert-warning ion-android-bicycle">
                            &lt;button class="close">&lt;i class="ion-ios-close-outline">&lt;/i>&lt;/button>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="alert alert-warning">
                    <i class="ion-android-bicycle icon-left"></i>
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <strong>Warning</strong> alert with <strong>Ionicons icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="alert alert-error">
                            &lt;button class="close">&lt;i class="ion-ios-close-outline">&lt;/i>&lt;/button>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="alert alert-error">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <i class="fas fa-hand-spock"></i> <strong>Error</strong> alert. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                    <p>A list exemple below :</p>
                    <ul>
                        <li><strong>Error 1 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 2 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 3 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                    </ul>
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="alert alert-success">
                            &lt;button class="close">&lt;i class="ion-ios-close-outline">&lt;/i>&lt;/button>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="alert alert-success">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <i class="ion-android-checkmark-circle"></i>  <strong>Success</strong> alert. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>
            </div>

            <div class="main cc-messages">
                <h3 class="title">Messages</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;div class="message message-primary ion-ios-pricetags">
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="message message-primary ion-ios-pricetags">
                    <strong>Primary color</strong> message with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;div class="message message-info">
                            &lt;i class="fas fa-exclamation-circle">&lt;/i>
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="message message-info">
                    <i class="fas fa-exclamation-circle"></i>
                    <strong>Status</strong> message with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;div class="message message-warning ion-android-bicycle">
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="message message-warning ion-android-bicycle">
                    <strong>Warning</strong> message with <strong>Ionicons icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;div class="message message-error">
                            ...
                        &lt;/div>
                    </code>
                </pre>
                <div class="message message-error">
                    <i class="fas fa-hand-spock"></i> <strong>Error</strong> message. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                    <p>A list exemple below :</p>
                    <ul>
                        <li><strong>Error 1 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 2 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 3 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                    </ul>
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;div class="message message-success">
                            ...
                        &lt;/div>
                    </code>
                </pre>

                <div class="message message-success">
                    <i class="ion-android-checkmark-circle"></i>  <strong>Success</strong> message. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>
            </div>

            <div class="main cc-badges">
                <h3 class="title">Badges</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p>
                            Donec rutrum... &lt;span class="badge cc-bg-primary">54&lt;/span> Donec rutrum...
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    Donec rutrum congue leo eget malesuada. Vestibulum ac diam <span class="badge cc-bg-primary">54</span> Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh.
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p class="cc-bg-primary">
                            Donec rutrum... &lt;span class="badge">54&lt;/span> Donec rutrum...
                        &lt;/p>
                    </code>
                </pre>
                <p class="cc-bg-primary">
                    Donec rutrum congue leo eget malesuada. Vestibulum ac diam <span class="badge">54</span> Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh.
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p>
                            &lt;button class="cc-thin">
                                Button &lt;span class="badge">54&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge">554&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-fat">
                                Button &lt;span class="badge">4&lt;/span>
                            &lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <button class="cc-thin">
                        Button <span class="badge">54</span>
                    </button>
                    <button>
                        Button <span class="badge">554</span>
                    </button>
                    <button class="cc-fat">
                        Button <span class="badge">4</span>
                    </button>
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p class="cc-mat-20">
                            &lt;button>
                                Button &lt;span class="badge cc-bg-primary">45&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-green">9&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-red">17&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-blue">42550&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-red">4 &lt;i class="ion-ios-gear">&lt;/i>&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-purple">45&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-orange">0&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge cc-bg-yellow">$ 19.99&lt;/span>
                            &lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p class="cc-mat-20">
                    <button>
                        Button <span class="badge cc-bg-primary">45</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-green">9</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-red">17</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-blue">42550</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-red">4 <i class="ion-ios-gear"></i></span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-purple">45</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-orange">0</span>
                    </button>
                    <button>
                        Button <span class="badge cc-bg-yellow">$ 19.99</span>
                    </button>
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p class="cc-mat-20">
                            &lt;a href="#">
                                Link &lt;span class="badge">4&lt;/span>
                            &lt;/a>
                            &lt;a href="#">
                                Link &lt;span class="badge cc-bg-primary">4&lt;/span>
                            &lt;/a>
                            &lt;a href="#" class="btn">
                                Link &lt;span class="badge cc-bg-primary">4&lt;/span>
                            &lt;/a>
                        &lt;/p>
                    </code>
                </pre>
                <p class="cc-mat-20">
                    <a href="#">
                        Link <span class="badge">4</span>
                    </a>
                    <a href="#">
                        Link <span class="badge cc-bg-primary">4</span>
                    </a>
                    <a href="#" class="btn">
                        Link <span class="badge cc-bg-primary">4</span>
                    </a>
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p class="cc-mat-20">
                            &lt;a href="#" class="btn cc-bg-primary">
                                Message &lt;span class="badge">46&lt;/span>
                            &lt;/a>
                            &lt;button class="cc-bg-red">
                                Button &lt;span class="badge cc-bg-purple">9856&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-bg-green">
                                Sales ! &lt;span class="badge cc-bg-orange">&lt;i class="ion-ios-pricetags-outline">&lt;/i> 45 %&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-bg-blue">
                                Button &lt;span class="badge cc-bg-yellow">4&lt;/span>
                            &lt;/button>

                            &lt;button class="cc-bg-primary cc-thin">
                                Button &lt;span class="badge">4&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-bg-red cc-fat">
                                Button &lt;span class="badge cc-bg-purple">&lt;i class="fas fa-heartbeat">&lt;/i> 90 bpm&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-bg-green cc-thin">
                                Button &lt;span class="badge cc-bg-orange">4&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-bg-blue cc-fat">
                                &lt;i class="ion-ios-cart-outline">&lt;/i> &lt;span class="badge cc-bg-yellow">0 product&lt;/span>
                            &lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p class="cc-mat-20">
                    <a href="#" class="btn cc-bg-primary">
                        Message <span class="badge">46</span>
                    </a>
                    <button class="cc-bg-red">
                        Button <span class="badge cc-bg-purple">9856</span>
                    </button>
                    <button class="cc-bg-green">
                        Sales ! <span class="badge cc-bg-orange"><i class="ion-ios-pricetags-outline"></i> 45 %</span>
                    </button>
                    <button class="cc-bg-blue">
                        Button <span class="badge cc-bg-yellow">4</span>
                    </button>

                    <button class="cc-bg-primary cc-thin">
                        Button <span class="badge">4</span>
                    </button>
                    <button class="cc-bg-red cc-fat">
                        Button <span class="badge cc-bg-purple"><i class="fas fa-heartbeat icon-left"></i> 90 bpm</span>
                    </button>
                    <button class="cc-bg-green cc-thin">
                        Button <span class="badge cc-bg-orange">4</span>
                    </button>
                    <button class="cc-bg-blue cc-fat">
                        <i class="ion-ios-cart-outline"></i> <span class="badge cc-bg-yellow">0 product</span>
                    </button>
                </p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        <!-- -->
                        &lt;p class="cc-mat-20">
                            &lt;button>
                                Button &lt;span class="badge">&lt;i class="ion-ios-gear">&lt;/i>&lt;/span>
                            &lt;/button>
                            &lt;button>
                                Button &lt;span class="badge">&lt;i class="fas fa-user">&lt;/i>&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-thin">
                                Button &lt;span class="badge ion-ios-gear">&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-thin">
                                Button &lt;span class="badge">&lt;i class="fa fa-user">&lt;/i>&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-fat">
                                Button &lt;span class="badge ion-ios-gear">&lt;/span>
                            &lt;/button>
                            &lt;button class="cc-fat">
                                Button &lt;span class="badge">&lt;i class="fa fa-user">&lt;/i>&lt;/span>
                            &lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p class="cc-mat-20">
                    <button>
                        Button <span class="badge"><i class="ion-ios-gear"></i></span>
                    </button>
                    <button>
                        Button <span class="badge"><i class="fas fa-user"></i></span>
                    </button>
                    <button class="cc-thin">
                        Button <span class="badge ion-ios-gear"></span>
                    </button>
                    <button class="cc-thin">
                        Button <span class="badge"><i class="fa fa-user"></i></span>
                    </button>
                    <button class="cc-fat">
                        Button <span class="badge ion-ios-gear"></span>
                    </button>
                    <button class="cc-fat">
                        Button <span class="badge"><i class="fa fa-user"></i></span>
                    </button>
                </p>
            </div>

            <div class="main cc-tabs">

                <div class="tabs-basic">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs">
                                &lt;li>&lt;a href="#">Link 1&lt;/a>&lt;/li>
                                &lt;li class="active">&lt;a href="#">Link 2&lt;/a>&lt;/li>
                                &lt;li>&lt;a href="#">Link 3&lt;/a>&lt;/li>
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-underlined">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-underlined">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-alignment">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-align-left">
                                ...
                            &lt;/ul>

                            &lt;ul class="tabs cc-align-center">
                                ...
                            &lt;/ul>

                            &lt;ul class="tabs cc-align-right">
                                ...
                            &lt;/ul>

                            &lt;ul class="tabs cc-align-stretch">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-align-left">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-align-center">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-align-right">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-align-stretch">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-thickness">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-fat cc-underlined">
                                ...
                            &lt;/ul>

                            &lt;ul class="tabs cc-thin cc-mat-20 cc-underlined">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-fat cc-underlined">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                    <ul class="tabs cc-thin cc-mat-20 cc-underlined">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-bordered">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-bordered">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-bordered">
                        <li><a href="#"><i class="fas fa-user icon-left"></i>Link 1</a></li>
                        <li class="active"><a href="#"><i class="fas fa-edit icon-left"></i>Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-li-last">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs">
                                ...
                                &lt;li class="cc-last">&lt;a href="#" class="btn cc-bg-red fa-times">Exit!&lt;/a>&lt;/li>
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-bordered cc-mat-20">
                                ...
                                &lt;li class="cc-last">&lt;a href="#" class="fa-times">Exit!&lt;/a>&lt;/li>
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="btn cc-bg-red ion-ios-paw">First item</a></li>
                        <li class="cc-last"><a href="#" class="btn cc-bg-red fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                    <ul class="tabs cc-bordered cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li class="cc-last"><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-pills">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-pills">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-unchained cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-unchained cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>

                <div class="tabs-responsive">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-left-xl cc-align-center-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-left-xl cc-align-center-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-left-xl cc-align-center-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-right-xl cc-align-stretch-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-right-xl cc-align-stretch-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-right-xl cc-align-stretch-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>


                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-center-l cc-align-stretch-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-center-l cc-align-stretch-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-center-l cc-align-stretch-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-stretch-xl cc-align-right-l cc-align-stretch-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-stretch-xl cc-align-right-l cc-align-stretch-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-stretch-xl cc-align-right-l cc-align-stretch-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-left-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-left-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-left-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-right-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-right-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-right-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-center-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-center-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-center-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-stretch-l cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-stretch-l cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-stretch-l</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-left-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-left-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-left-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-right-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-right-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-right-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-center-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-center-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-center-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-stretch-m cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-stretch-m cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-stretch-m</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>


                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-left-s cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-right-s cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-center-s cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-stretch-s cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-left-s cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-left-s</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-right-s cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-right-s</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-center-s cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-center-s</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-stretch-s cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-stretch-s</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>

                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            <!-- -->
                            &lt;ul class="tabs cc-pills cc-align-left cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-right cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-center cc-mat-20">
                                ...
                            &lt;/ul>
                            &lt;ul class="tabs cc-pills cc-align-stretch cc-mat-20">
                                ...
                            &lt;/ul>
                        </code>
                    </pre>
                    <ul class="tabs cc-pills cc-align-left cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-left</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-right cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-right</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-center cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-center</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                    <ul class="tabs cc-pills cc-align-stretch cc-mat-20">
                        <li><a href="#" class="fa-user">cc-align-stretch</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    </ul>
                </div>

                <div class="tabs-color">
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;ul class="tabs cc-green">
                        </code>
                    </pre>
                    <ul class="tabs cc-green">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-underlined cc-green cc-mat-20">
                        <li><a href="#">Link 1</a></li>
                        <li class="active"><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-bordered cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li class="cc-last"><a href="#" class="btn cc-bg-red fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-align-stretch cc-bordered cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-pills cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-pills cc-mat-20 cc-align-stretch cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-pills cc-align-center cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>

                    <ul class="tabs cc-pills cc-align-right cc-green cc-mat-20">
                        <li><a href="#" class="fa-user">Link 1</a></li>
                        <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                        <li><a href="#" class="ion-android-plane">Link 3</a></li>
                        <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                        <li><a href="#" class="fa-times">Exit!</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                    </ul>
                </div>
            </div>

            <div class="main cc-modals">
                <h3 class="title">Modals</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;button data-target="modal-id" class="modal-open">Launch modal&lt;/button>

                        &lt;div id="modal-id" class="modal modal-large modal-small" data-disabled-overlay>
                            &lt;button data-close-modal>&lt;/button>

                            &lt;div class="modal-overlay">&lt;/div>

                            &lt;div class="modal-content">
                                &lt;div class="modal-header">
                                    ...
                                &lt;/div>
                                &lt;div class="modal-body">
                                    ...
                                &lt;/div>
                                &lt;div class="modal-footer cc-txt-center">
                                    ...
                                &lt;/div>
                            &lt;/div>
                        &lt;/div>


                        &lt;div id="modal-id" class="modal" data-fixed-hf>
                            &lt;button data-close-modal>&lt;/button>

                            &lt;div class="modal-overlay">&lt;/div>

                            &lt;div class="modal-content">
                                &lt;div class="modal-header">
                                    ...
                                &lt;/div>
                                &lt;section class="wrap-modal-body">
                                    &lt;div class="modal-body">
                                        ...
                                    &lt;/div>
                                &lt;/section>
                                &lt;div class="modal-footer">
                                    ...
                                &lt;/div>
                            &lt;/div>
                        &lt;/div>


                        &lt;div id="modal-id" class="modal" data-fullscreen>
                            &lt;button data-close-modal">&lt;/button>

                            &lt;div class="modal-overlay">&lt;/div>

                            &lt;div class="modal-content">
                                &lt;div class="modal-header">
                                    ...
                                &lt;/div>
                                &lt;section class="wrap-modal-body">
                                    &lt;div class="modal-body">
                                        ...
                                    &lt;/div>
                                &lt;/section>
                                &lt;div class="modal-footer">
                                    ...
                                &lt;/div>
                            &lt;/div>
                        &lt;/div>
                    </code>
                </pre>

                <div>
                    <button data-target="modal-id" class="modal-open">Launch default modal (with form & masonry layout exemple)</button>
                    <button data-target="modal-id-large" class="modal-open">Launch large modal</button>
                    <button data-target="modal-id-small" class="modal-open">Launch small modal</button>
                    <button data-target="modal-fullscreen" class="modal-open">Launch fullscreen modal</button>
                    <button data-target="modal-id-long" class="modal-open">Launch modal with long content</button>
                    <button data-target="modal-id-long-fixed-header" class="modal-open">Fixed Header / Footer</button>
                </div>

                <div class="cc-mat-20">
                    <button data-target="modal-id-no-closable" class="modal-open">Disabled overlay click</button>
                    <button data-target="modal-id-nested" class="modal-open">Nested modals</button>
                    <button data-target="this_id_does_not_exist" class="modal-open">Call a non existing modal (show an alert)</button>
                </div>
            </div>
        </section>

        <!-- HELPERS -->
        <section class="helpers">
            <header>
                <h2 class="title">Helpers</h2>
                <p class="description">
                    Style for <strong>helpers</strong> and <strong>colors</strong> distributed with ChuckCSS
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-helpers-txt" class="btn cc-bg-primary">Texts helpers</a>
                    <a href="#" data-rel="cc-helpers-blocks" class="btn cc-bg-primary">Blocks helpers</a>
                    <a href="#" data-rel="cc-colors" class="btn cc-bg-primary">Colors</a>
                    <a href="#" data-rel="cc-fontawesome" class="btn cc-bg-primary">FontAwesome 5</a>
                </p>
            </header>

            <div class="main cc-helpers-txt">
                <h3 class="title">Texts helpers (alignments, paddings, margins, colors)</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;p class="cc-txt-left">I'm a left text !&lt;/p>
                        &lt;p class="cc-txt-center">I'm a centered text !&lt;/p>
                        &lt;p class="cc-txt-right">I'm a right text !&lt;/p>
                        &lt;p class="cc-txt-justify">I'm a justified text ! .&lt;/p>
                    </code>
                </pre>
                <p class="cc-txt-left">I'm a left text !</p>
                <p class="cc-txt-center">I'm a centered text !</p>
                <p class="cc-txt-right">I'm a right text !</p>
                <p class="cc-txt-justify">I'm a justified text ! Bacon ipsum dolor amet alcatra doner bresaola cow turkey ground round picanha short loin corned beef. Beef ribs tail brisket tenderloin pork landjaeger boudin. Meatball ground round tail, chicken pork chop porchetta venison. Boudin jerky fatback sirloin sausage landjaeger pancetta pork chop venison meatball pork belly meatloaf. Leberkas ham hock meatloaf, venison turducken pork loin turkey sausage shoulder tongue. Hamburger strip steak beef biltong.<br />Ham hock strip steak porchetta shoulder ground round jowl bacon capicola shankle sirloin tri-tip. Tongue tenderloin ribeye, andouille pork chop drumstick short ribs chicken pork loin tail filet mignon. Prosciutto frankfurter t-bone, meatloaf pig fatback capicola chuck corned beef bacon. Prosciutto tail filet mignon, pork belly kielbasa beef chicken pork. Ham flank leberkas drumstick hamburger tenderloin spare ribs pork loin bacon picanha tri-tip fatback. Alcatra ribeye bacon pig picanha, landjaeger andouille jerky pork belly cow tri-tip beef ribs. Chicken swine salami turkey frankfurter chuck shankle prosciutto capicola pastrami pig andouille.</p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;p class="cc-blue cc-txt-center">I'm written in blue and centered&lt;/p>
                        &lt;p class="cc-bg-blue">I have a blue background-color&lt;/p>
                    </code>
                </pre>
                <p class="cc-blue cc-txt-center">I'm written in blue and centered</p>
                <p class="cc-bg-blue">I have a blue background-color</p>
            </div>

            <div class="main cc-helpers-blocks">
                <h3 class="title">Blocks helpers (alignments, displays...)</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;p class="cc-block cc-pa cc-mat-20 cc-bg-primary">I'm shown as a block element.&lt;/p>
                        &lt;p class="cc-inline cc-pa cc-mat-20 cc-bg-primary">I'm shown as an inline-block element.&lt;/p>
                    </code>
                </pre>
                <p class="cc-block cc-pa cc-mat-20 cc-bg-primary">I'm shown as a block element.</p>
                <p class="cc-inline cc-pa cc-mat-20 cc-bg-primary">I'm shown as an inline-block element.</p>

                <h3 class="title">Hidden blocks on targeted devices only</h3>
                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Hidden blocks on device ONLY&lt;/h3>
                        &lt;p class="cc-hidden cc-pa cc-mat-20 cc-bg-primary">Hidden on all devices&lt;/p>
                        &lt;p class="cc-hidden-xl-only cc-pa cc-mat-20 cc-bg-primary">XL : hidden&lt;br />L : shown&lt;br />M : shown&lt;br />S : shown&lt;br />XS : shown&lt;/p>
                        &lt;p class="cc-hidden-l-only cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : hidden&lt;br />M : shown&lt;br />S : shown&lt;br />XS : shown&lt;/p>
                        &lt;p class="cc-hidden-m-only cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : hidden&lt;br />S : shown&lt;br />XS : shown&lt;/p>
                        &lt;p class="cc-hidden-s-only cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : shown&lt;br />S : hidden&lt;br />XS : shown&lt;/p>
                        &lt;p class="cc-hidden-xs-only cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : shown&lt;br />S : shown&lt;br />XS : hidden&lt;/p>
                    </code>
                </pre>
                <p class="cc-hidden cc-pa cc-mat-20 cc-bg-primary">cc-hidden</p>
                <p class="cc-hidden-xl-only cc-pa cc-mat-20 cc-bg-primary">cc-hidden-xl-only</p>
                <p class="cc-hidden-l-only cc-pa cc-mat-20 cc-bg-primary">cc-hidden-l-only</p>
                <p class="cc-hidden-m-only cc-pa cc-mat-20 cc-bg-primary">cc-hidden-m-only</p>
                <p class="cc-hidden-s-only cc-pa cc-mat-20 cc-bg-primary">cc-hidden-s-only</p>
                <p class="cc-hidden-xs-only cc-pa cc-mat-20 cc-bg-primary">cc-hidden-xs-only</p>

                <h3 class="title">Hidden blocks on devices and lower</h3>
                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Hidden blocks on devices and lower&lt;/h3>
                        &lt;p class="cc-hidden-l-down cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : hidden&lt;br />M : hidden&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-hidden-m-down cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : hidden&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-hidden-s-down cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : shown&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-hidden-xs-down cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : shown&lt;br />M : shown&lt;br />S : shown&lt;br />XS : hidden&lt;/p>
                    </code>
                </pre>

                <p class="cc-hidden-l-down cc-pa cc-mat-20 cc-bg-primary">cc-hidden-l-down</p>
                <p class="cc-hidden-m-down cc-pa cc-mat-20 cc-bg-primary">cc-hidden-m-down</p>
                <p class="cc-hidden-s-down cc-pa cc-mat-20 cc-bg-primary">cc-hidden-s-down</p>
                <p class="cc-hidden-xs-down cc-pa cc-mat-20 cc-bg-primary">cc-hidden-xs-down</p>

                <h3 class="title">Hidden blocks on devices and upper</h3>
                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Hidden blocks on devices and upper&lt;/h3>
                        &lt;p class="cc-hidden-xl cc-pa cc-mat-20 cc-bg-primary">cc-hidden-xl&lt;/p>
                        &lt;p class="cc-hidden-l cc-pa cc-mat-20 cc-bg-primary">cc-hidden-l&lt;/p>
                        &lt;p class="cc-hidden-m cc-pa cc-mat-20 cc-bg-primary">cc-hidden-m&lt;/p>
                        &lt;p class="cc-hidden-s cc-pa cc-mat-20 cc-bg-primary">cc-hidden-s&lt;/p>
                    </code>
                </pre>

                <p class="cc-hidden-xl cc-pa cc-mat-20 cc-bg-primary">cc-hidden-xl</p>
                <p class="cc-hidden-l cc-pa cc-mat-20 cc-bg-primary">cc-hidden-l</p>
                <p class="cc-hidden-m cc-pa cc-mat-20 cc-bg-primary">cc-hidden-m</p>
                <p class="cc-hidden-s cc-pa cc-mat-20 cc-bg-primary">cc-hidden-s</p>

                <h3 class="title">Show on targeted device</h3>
                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Show on device only&lt;/h3>
                        &lt;p class="cc-shown-xl-only cc-pa cc-mat-20 cc-bg-primary">XL : shown&lt;br />L : hidden&lt;br />M : hidden&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-shown-l-only cc-pa cc-mat-20 cc-bg-primary">XL : hidden&lt;br />L : shown&lt;br />M : hidden&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-shown-m-only cc-pa cc-mat-20 cc-bg-primary">XL : hidden&lt;br />L : hidden&lt;br />M : shown&lt;br />S : hidden&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-shown-s-only cc-pa cc-mat-20 cc-bg-primary">XL : hidden&lt;br />L : hidden&lt;br />M : hidden&lt;br />S : shown&lt;br />XS : hidden&lt;/p>
                        &lt;p class="cc-shown-xs-only cc-pa cc-mat-20 cc-bg-primary">XL : hidden&lt;br />L : hidden&lt;br />M : hidden&lt;br />S : hidden&lt;br />XS : shown&lt;/p>
                    </code>
                </pre>

                <p class="cc-shown-xl-only cc-pa cc-mat-20 cc-bg-primary">cc-shown-xl-only</p>
                <p class="cc-shown-l-only cc-pa cc-mat-20 cc-bg-primary">cc-shown-l-only</p>
                <p class="cc-shown-m-only cc-pa cc-mat-20 cc-bg-primary">cc-shown-m-only</p>
                <p class="cc-shown-s-only cc-pa cc-mat-20 cc-bg-primary">cc-shown-s-only</p>
                <p class="cc-shown-xs-only cc-pa cc-mat-20 cc-bg-primary">cc-shown-xs-only</p>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Width&lt;/h3>
                        &lt;div class="cc-centered cc-pa cc-w-quarter cc-mat-20 cc-bg-primary">
                            ".cc-w-quarter cc-centered" -> Yololo ! I have a quarter width (25.00%) and centered
                        &lt;/div>
                        &lt;?php for($i=5;$i&lt;=100;$i+=5) { ?>
                            &lt;div class="cc-centered cc-pa cc-w-&lt;?php print $i;?> cc-mat-20 cc-bg-primary cc-txt-center">
                               &lt;?php print $i;?>% width
                            &lt;/div>
                        &lt;?php } ?>
                    </code>
                </pre>
                <h3 class="title">Width</h3>
                <div class="cc-centered cc-pa cc-w-quarter cc-mat-20 cc-bg-primary">
                    ".cc-w-quarter cc-centered" -> Yololo ! I have a quarter width (25.00%) and centered
                </div>
                <?php for($i=5;$i<=100;$i+=5) { ?>
                    <div class="cc-centered cc-pa cc-w-<?php print $i;?> cc-mat-20 cc-bg-primary cc-txt-center">
                       <?php print $i;?>% width
                    </div>
                <?php } ?>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;h3>Margin & Padding&lt;/h3>
                        &lt;p class="cc-bg-primary cc-pa-10">I have a padding of 10px&lt;/p>
                        &lt;p class="cc-bg-primary cc-pa-16">I have a padding of 16px&lt;/p>
                        &lt;p class="cc-bg-primary cc-ma-6">I have a margin of 5px&lt;/p>
                        &lt;p class="cc-bg-primary cc-mat-22">I have a margin-top of 22px&lt;/p>
                        &lt;p class="cc-bg-primary cc-pa">I have the default padding set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-pat">I have the default padding-top set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-par">I have the default padding-right set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-pab">I have the default padding-bottom set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-pal">I have the default padding-left set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-ma">I have the default margin set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-mat">I have the default margin-top set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-mar">I have the default margin-right set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-mab">I have the default margin-bottom set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-mal">I have the default margin-left set in settings.less file&lt;/p>
                        &lt;p class="cc-bg-primary cc-pal-18">I have a custom padding-left of 18px&lt;/p>
                    </code>
                </pre>
                <h3>Margin & Padding</h3>
                <p class="cc-bg-primary cc-pa-10">I have a padding of 10px</p>
                <p class="cc-bg-primary cc-pa-16">I have a padding of 16px</p>
                <p class="cc-bg-primary cc-ma-6">I have a margin of 5px</p>
                <p class="cc-bg-primary cc-mat-22">I have a margin-top of 22px</p>
                <p class="cc-bg-primary cc-pa">I have the default padding set in settings.less file</p>
                <p class="cc-bg-primary cc-pat">I have the default padding-top set in settings.less file</p>
                <p class="cc-bg-primary cc-par">I have the default padding-right set in settings.less file</p>
                <p class="cc-bg-primary cc-pab">I have the default padding-bottom set in settings.less file</p>
                <p class="cc-bg-primary cc-pal">I have the default padding-left set in settings.less file</p>
                <p class="cc-bg-primary cc-ma">I have the default margin set in settings.less file</p>
                <p class="cc-bg-primary cc-mat">I have the default margin-top set in settings.less file</p>
                <p class="cc-bg-primary cc-mar">I have the default margin-right set in settings.less file</p>
                <p class="cc-bg-primary cc-mab">I have the default margin-bottom set in settings.less file</p>
                <p class="cc-bg-primary cc-mal">I have the default margin-left set in settings.less file</p>
                <p class="cc-bg-primary cc-pal-18">I have a custom padding-left of 18px</p>
            </div>

            <div class="main cc-colors">
                <h3 class="title">Colors</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;div class="cc-bg-primary cc-txt-center">Primary&lt;/div>
                        &lt;div class="cc-bg-green cc-txt-center">Green&lt;/div>
                        &lt;div class="cc-bg-red cc-txt-center">Red&lt;/div>
                        &lt;div class="cc-bg-blue cc-txt-center">Blue&lt;/div>
                        &lt;div class="cc-bg-purple cc-txt-center">Purple&lt;/div>
                        &lt;div class="cc-bg-orange cc-txt-center">Orange&lt;/div>
                        &lt;div class="cc-bg-yellow cc-txt-center">Yellow&lt;/div>
                    </code>
                </pre>

                <div class="columns">
                    <div class="cc-bg-primary cc-txt-center">Primary</div>
                    <div class="cc-bg-green cc-txt-center">Green</div>
                    <div class="cc-bg-red  cc-txt-center">Red</div>
                    <div class="cc-bg-blue cc-txt-center">Blue</div>
                    <div class="cc-bg-purple cc-txt-center">Purple</div>
                    <div class="cc-bg-orange cc-txt-center">Orange</div>
                    <div class="cc-bg-yellow cc-txt-center">Yellow</div>
                </div>
            </div>

            <div class="main cc-fontawesome active">
                <h3 class="title">Work with FontAwesome</h3>

                <div class="columns">
                    <div>
                        <i class="fas fa-arrow-circle-right"></i>
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>

                <h3 class="title">Work with Ionicons</h3>

                <div class="columns">
                    <div>
                        <i class="ion-ionic"></i>
                        <i class="ion-trash-a"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- GRIDS -->
        <section class="grids">
            <header>
                <h2 class="title">Grids system</h2>
                <p class="description">
                    Use <strong>grids</strong> with ChuckCSS
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-grids" class="btn cc-bg-primary">Grids</a>
                    <a href="#" data-rel="cc-masonry-grids" class="btn cc-bg-primary">Masonry layout</a>
                </p>
            </header>

            <div class="main cc-grids">
                <div class="grids-basics">
                    <h3 class="title">Basic grid</h3>
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;div class="columns">
                                &lt;div>...&lt;/div>
                                &lt;div>...&lt;/div>
                                &lt;div>...&lt;/div>
                                ...
                            &lt;/div>
                        </code>
                    </pre>

                    <div class="columns">
                        <div class="cc-bg-orange">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div>
                    </div>
                    <div class="columns">
                        <div class="cc-bg-orange">auto</div>
                        <div class="cc-bg-blue">auto</div>
                        <div class="cc-bg-orange">auto</div>
                        <div class="cc-bg-blue">auto</div>
                    </div>

                    <h3 class="title">Items width</h3>
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-12 cc-6-m cc-4-xl">cc-12 cc-6-m cc-4-xl&lt;/div>
                                &lt;div class="cc-bg-blue cc-12 cc-6-m cc-4-xl">cc-12 cc-6-m cc-4-xl&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>

                    <div class="columns">
                        <div class="cc-bg-orange">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div><div class="cc-bg-orange cc-1">1</div><div class="cc-bg-blue cc-1">1</div>
                    </div>
                    <div class="columns">
                        <div class="cc-bg-orange cc-8-xs cc-6-s cc-8-m cc-7-xl">cc-8-m cc-7-xl</div>
                        <div class="cc-bg-blue cc-4-xs cc-6-s cc-4-m cc-5-xl">cc-4-m cc-5-xl</div>
                    </div>
                </div>

                <div class="grids-offset">
                    <h3 class="title">Offsets</h3>
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;div class="columns">
                                &lt;div class="cc-bg-blue cc-6 cc-offset-1">6 with offset 1&lt;/div>
                            &lt;/div>
                            &lt;div class="columns">
                                &lt;div class="cc-bg-blue cc-offset-1">auto with offset 1&lt;/div>
                            &lt;/div>
                            &lt;div class="columns">
                                &lt;div class="cc-bg-blue cc-12 cc-offset-6-xl cc-offset-3-l cc-offset-5-m cc-offset-0-s cc-4-m">XL : offset 6&lt;br />L: offset 3&lt;br />M: offset 5&lt;br />S: offset 0 and 100%&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>
                    <div class="columns">
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                        <div class="cc-bg-orange cc-1">1</div>
                        <div class="cc-bg-blue cc-1">1</div>
                    </div>
                    <div class="columns">
                        <div class="cc-bg-blue cc-6 cc-offset-1">6 with offset 1</div>
                    </div>
                    <div class="columns">
                        <div class="cc-bg-blue cc-offset-1">auto with offset 1</div>
                    </div>
                    <div class="columns">
                        <div class="cc-bg-blue cc-12 cc-offset-6-xl cc-offset-3-l cc-offset-5-m cc-offset-0-s cc-4-m">XL : offset 6<br />L: offset 3<br />M: offset 5<br />S: offset 0 and 100%</div>
                    </div>
                </div>

                <div class="grids-ordering">
                    <h3 class="title">Ordering</h3>
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- Ordering -->
                            &lt;div class="columns">
                                &lt;div class="cc-last">I'm the last item but first in HTML!&lt;/div>
                                &lt;div>Lorem ipsum..&lt;/div>
                                &lt;div class="cc-first">I'm the first item but third in HTML!&lt;/div>
                                &lt;div>Lorem ipsum..&lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-last-s">S:last&lt;/div>
                                &lt;div class="cc-last-m">M:last&lt;/div>
                                &lt;div class="cc-last-l">L:last&lt;/div>
                                &lt;div class="cc-last-xl">XL:last&lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-first-s">S:first&lt;/div>
                                &lt;div class="cc-first-m">M:first&lt;/div>
                                &lt;div class="cc-first-l">L:first&lt;/div>
                                &lt;div class="cc-first-xl">XL:first&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>

                    <div class="columns">
                        <div class="cc-last cc-bg-blue">I'm the last item but first in HTML!</div>
                        <div class="cc-bg-primary">Lorem ipsum..</div>
                        <div class="cc-first cc-bg-blue">I'm the first item but third in HTML!</div>
                        <div  class="cc-bg-primary">Lorem ipsum..</div>
                    </div>

                    <div class="columns cc-mat-20">
                        <div class="cc-last-s cc-bg-blue">S:last</div>
                        <div class="cc-last-m cc-bg-purple">M:last</div>
                        <div class="cc-last-l cc-bg-green">L:last</div>
                        <div class="cc-last-xl cc-bg-red">XL:last</div>
                    </div>

                    <div class="columns cc-mat-20">
                        <div class="cc-first-s cc-bg-blue">S:first</div>
                        <div class="cc-first-m cc-bg-purple">M:first</div>
                        <div class="cc-first-l cc-bg-green">L:first</div>
                        <div class="cc-first-xl cc-bg-red">XL:first</div>
                    </div>
                </div>

                <div class="grids-no-multiligne">
                    <h3 class="title">No-Multiligne</h3>
                    <pre class="HTML">
                        <code class="language-markup">&lt;div class="columns cc-no-multiligne">
                                &lt;div class="cc-bg-blue cc-7">7&lt;/div>
                                &lt;div class="cc-bg-orange cc-6">6 /!\ TOO LARGE&lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-blue cc-5 columns cc-no-multiligne">
                                    &lt;div class="cc-6 cc-bg-orange">6&lt;/div>
                                    &lt;div class="cc-7 cc-bg-orange">7 /!\ too large but on the same line&lt;/div>
                                &lt;/div>
                            &lt;/div>

                        </code>
                    </pre>

                    <div class="columns cc-no-multiligne">
                        <div class="cc-bg-blue cc-7">7</div>
                        <div class="cc-bg-orange cc-6">6 /!\ TOO LARGE</div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-blue cc-5 columns cc-no-multiligne">
                            <div class="cc-6 cc-bg-orange">6</div>
                            <div class="cc-7 cc-bg-orange">7 /!\ too large but on the same line</div>
                        </div>
                    </div>
                </div>

                <div class="grids-column-reverse">
                    <h3 class="title">Columns reverse</h3>
                    <pre class="HTML">
                        <code class="language-markup">&lt;div class="columns cc-reverse">
                                &lt;div class="cc-bg-blue cc-3">First in html&lt;/div>
                                &lt;div class="cc-bg-orange cc-3">Second in html&lt;/div>
                                &lt;div class="cc-bg-blue cc-3">Third in html&lt;/div>
                                &lt;div class="cc-bg-orange cc-3">Fourth in html&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>
                    <div class="columns cc-reverse">
                        <div class="cc-bg-blue cc-3">First in html</div>
                        <div class="cc-bg-orange cc-3">Second in html</div>
                        <div class="cc-bg-blue cc-3">Third in html</div>
                        <div class="cc-bg-orange cc-3">Fourth in html</div>
                    </div>
                </div>

                <div class="grids-nested">
                    <h3 class="title">Nested grids</h3>
                    <pre class="HTML">
                        <code class="language-markup">&lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">3&lt;/div>
                                &lt;div class="cc-bg-orange cc-9">9&lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="columns cc-bg-blue cc-3">
                                    &lt;div class="cc-bg-orange cc-6">6 in 3&lt;/div>
                                    &lt;div class="cc-bg-orange cc-6">6 in 3&lt;/div>
                                &lt;/div>
                                &lt;div class="cc-bg-orange cc-9 columns">
                                    &lt;div class="cc-bg-blue cc-4">4 in 9&lt;/div>
                                    &lt;div class="cc-bg-blue cc-4">4 in 9&lt;/div>
                                    &lt;div class="cc-bg-blue cc-4">4 in 9&lt;/div>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-8">8&lt;/div>
                                &lt;div class="cc-bg-blue cc-4">4&lt;/div>
                            &lt;/div>
                            &lt;div class="columns">
                                &lt;div class="columns cc-bg-orange cc-8">
                                    &lt;div class=" cc-4">4 in 8&lt;/div>
                                    &lt;div class=" ">auto | Ridiculus ridiculus ...&lt;/div>
                                    &lt;div class=" cc-2">2 in 8&lt;/div>
                                &lt;/div>
                                &lt;div class="columns cc-bg-orange cc-4">
                                    &lt;div class="cc-bg-blue cc-6">6 in 4&lt;/div>
                                    &lt;div class="cc-bg-blue cc-6">6 in 4&lt;/div>
                                &lt;/div>
                            &lt;/div>>
                            &lt;/div>
                        </code>
                    </pre>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">3</div>
                        <div class="cc-bg-blue cc-9">9</div>
                    </div>

                    <div class="columns">
                        <div class="columns cc-bg-blue cc-3">
                            <div class="cc-bg-orange cc-6">6 in 3</div>
                            <div class="cc-bg-orange cc-6">6 in 3</div>
                        </div>
                        <div class="cc-bg-orange cc-9 columns">
                            <div class="cc-bg-blue cc-4">4 in 9</div>
                            <div class="cc-bg-blue cc-4">4 in 9</div>
                            <div class="cc-bg-blue cc-4">4 in 9</div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-orange cc-8">8</div>
                        <div class="cc-bg-blue cc-4">4</div>
                    </div>
                    <div class="columns">
                        <div class="columns cc-bg-orange cc-8">
                            <div class=" cc-4">4 in 8</div>
                            <div class=" ">auto | Ridiculus ridiculus sit! Sit? Parturient placerat! Duis urna quis ac proin, ac lorem nec, cum augue aliquam tristique, est. In adipiscing platea? Sit dignissim.</div>
                            <div class=" cc-2">2 in 8</div>
                        </div>
                        <div class="columns cc-bg-orange cc-4">
                            <div class="cc-bg-blue cc-6">6 in 4</div>
                            <div class="cc-bg-blue cc-6">6 in 4</div>
                        </div>
                    </div>
                </div>

                <div class="grids-justify-columns">
                    <h3 class="title">Columns alignments on X axis</h3>
                    <pre class="HTML">
                        <code class="language-markup">&lt;div class="columns cc-justify-end">
                                &lt;div class="cc-bg-blue cc-3">Ending&lt;/div>
                                &lt;div class="cc-bg-blue cc-3">Ending&lt;/div>
                            &lt;/div>
                            &lt;div class="columns cc-justify-center">
                                &lt;div class="cc-bg-blue cc-3">Centered&lt;/div>
                                &lt;div class="cc-bg-blue cc-3">Centered&lt;/div>
                            &lt;/div>
                            &lt;div class="columns cc-justify-between">
                                &lt;div class="cc-bg-blue cc-3">Spacing on 100% width&lt;/div>
                                &lt;div class="cc-bg-blue cc-5">Spacing on 100% width&lt;/div>
                                &lt;div class="cc-bg-blue cc-3">Spacing on 100% width&lt;/div>
                            &lt;/div>
                            &lt;div class="columns cc-justify-around">
                                &lt;div class="cc-bg-blue cc-3">Equal spacing&lt;/div>
                                &lt;div class="cc-bg-blue cc-5">Equal spacing&lt;/div>
                                &lt;div class="cc-bg-blue cc-3">Equal spacing&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>
                    <div class="columns cc-justify-end">
                        <div class="cc-bg-blue cc-3">Ending</div>
                        <div class="cc-bg-orange cc-3">Ending</div>
                    </div>
                    <div class="columns cc-justify-center">
                        <div class="cc-bg-blue cc-3">Centered</div>
                        <div class="cc-bg-orange cc-3">Centered</div>
                    </div>
                    <div class="columns cc-justify-between">
                        <div class="cc-bg-blue cc-3">Spacing on 100% width</div>
                        <div class="cc-bg-orange cc-5">Spacing on 100% width</div>
                        <div class="cc-bg-blue cc-3">Spacing on 100% width</div>
                    </div>
                    <div class="columns cc-justify-around">
                        <div class="cc-bg-blue cc-3">Equal spacing</div>
                        <div class="cc-bg-orange cc-5">Equal spacing</div>
                        <div class="cc-bg-blue cc-3">Equal spacing</div>
                    </div>
                </div>

                <div class="grids-columns-alignments">
                    <h3 class="title">Targeted column alignment on X axis</h3>
                    <pre class="HTML">
                        <code class="language-markup"><!-- -->
                            &lt;!-- -->
                            &lt;div class="columns">
                                &lt;div class="cc-bg-blue cc-3">3&lt;/div>
                                &lt;div class="cc-bg-blue cc-4 cc-center">4 centered between 3 and 2&lt;/div>
                                &lt;div class="cc-bg-blue cc-2">2 right&lt;/div>
                            &lt;/div>

                            &lt;div class="columns cc-bg-orange">
                                &lt;div class="cc-bg-blue cc-w-auto cc-left">auto align left&lt;br />(float:left like)&lt;/div>
                                &lt;div class="cc-bg-blue cc-w-auto cc-right">auto align right&lt;br />(float:right like)&lt;/div>
                            &lt;/div>
                        </code>
                    </pre>
                    <div class="columns">
                        <div class="cc-bg-blue cc-3 cc-left">3</div>
                        <div class="cc-bg-blue cc-4 cc-center">4 centered between 3 and 2</div>
                        <div class="cc-bg-blue cc-2 cc-right">2 right</div>
                    </div>

                    <div class="columns cc-bg-orange">
                        <div class="cc-bg-blue cc-w-auto cc-left">auto align left<br />(float:left like)</div>
                        <div class="cc-bg-blue cc-w-auto cc-right">auto align right<br />(float:right like)</div>
                    </div>
                </div>

                <div class="grids-align-items">
                    <h3 class="title">Columns alignments on Y axis</h3>
                    <pre class="HTML">
                        <code class="language-markup">
                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">
                                    &lt;p>
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-9  columns cc-align-start">
                                    &lt;p class="cc-bg-blue">
                                        &lt;strong>TOP CONTENT ALIGNMENT&lt;/strong>&lt;br />&lt;br />
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">
                                    &lt;p>
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-align-center columns cc-9" style="margin:0;">
                                    &lt;p class="cc-bg-blue">
                                        &lt;strong>CENTER ALIGNMENT&lt;/strong>&lt;br />&lt;br />
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">
                                    &lt;p>
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-align-end columns cc-9" style="margin:0;">
                                    &lt;p class="cc-bg-blue">
                                        &lt;strong>BOTTOM CONTENT ALIGNMENT&lt;/strong>&lt;br />&lt;br />
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">
                                    &lt;p>
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-align-baseline columns cc-9" style="margin:0;">
                                    &lt;p class="cc-bg-blue">
                                        &lt;strong>BASELINE CONTENT ALIGNMENT&lt;/strong>&lt;br />&lt;br />
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-3">
                                    &lt;p>
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-align-stretch columns cc-9" style="margin:0;">
                                    &lt;p class="cc-bg-blue">
                                        &lt;strong>STRETCH CONTENT ALIGNMENT&lt;/strong>&lt;br />&lt;br />
                                        Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>

                        </code>
                    </pre>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">
                            <p>
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                            </p>
                        </div>
                        <div class="cc-9 columns cc-align-start">
                            <p class="cc-bg-blue">
                                <strong>TOP CONTENT ALIGNMENT</strong><br /><br />
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                            </p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">
                            <p>
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                            </p>
                        </div>
                        <div class="cc-align-center columns cc-9" style="margin:0;">
                            <p class="cc-bg-blue">
                                <strong>CENTER ALIGNMENT</strong><br /><br />
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                            </p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">
                            <p>
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                            </p>
                        </div>
                        <div class="cc-align-end columns cc-9" style="margin:0;">
                            <p class="cc-bg-blue">
                                <strong>BOTTOM CONTENT ALIGNMENT</strong><br /><br />
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                            </p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">
                            <p>
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                            </p>
                        </div>
                        <div class="cc-align-baseline columns cc-9" style="margin:0;">
                            <p class="cc-bg-blue">
                                <strong>BASELINE CONTENT ALIGNMENT</strong><br /><br />
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                            </p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="cc-bg-orange cc-3">
                            <p>
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                            </p>
                        </div>
                        <div class="cc-align-stretch columns cc-9" style="margin:0;">
                            <p class="cc-bg-blue">
                                <strong>STRETCH CONTENT ALIGNMENT</strong><br /><br />
                                Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grids-align-self">
                    <h3 class="title">Targeted column alignment on Y axis</h3>
                    <pre class="HTML">
                        <code class="language-markup">
                            &lt;div class="columns">
                                &lt;div class="cc-bg-orange cc-align-self-top">
                                    &lt;p>
                                        align self top&lt;br />&lt;br />
                                        Vestibulum ac diam sit ...
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-bg-primary cc-align-self-bottom">
                                    &lt;p>
                                        align self bottom
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-bg-orange cc-align-self-center">
                                    &lt;p>
                                        align self center
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-bg-primary cc-align-self-stretch">
                                    &lt;p>
                                        align self stretch
                                    &lt;/p>
                                &lt;/div>
                                &lt;div class="cc-bg-orange cc-align-self-baseline">
                                    &lt;p>
                                        align self baseline
                                    &lt;/p>
                                &lt;/div>
                            &lt;/div>
                        </code>
                    </pre>


                    <div class="columns">
                        <div class="cc-bg-orange cc-align-self-top">
                            <p>
                                align self top<br /><br />
                                Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            </p>
                        </div>
                        <div class="cc-bg-primary cc-align-self-bottom">
                            <p>
                                align self bottom
                            </p>
                        </div>
                        <div class="cc-bg-orange cc-align-self-center">
                            <p>
                                align self center
                            </p>
                        </div>
                        <div class="cc-bg-primary cc-align-self-stretch">
                            <p>
                                align self stretch
                            </p>
                        </div>
                        <div class="cc-bg-orange cc-align-self-baseline">
                            <p>
                                align self baseline
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main cc-masonry-grids">
                <h3 class="title">Masonry</h3>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;div class="columns cc-masonry cc-6 cc-12-xl cc-3-l cc-2-m cc-1-s">
                            &lt;?php
                                for ($i=1;$i&lt;25;$i++) {
                                    $height = rand(60,350);
                            ?>
                                &lt;div class="&lt;?php if ($i%2==0) echo 'cc-bg-blue'; else echo 'cc-bg-orange';?>" style="height:&lt;?php echo $height;?>px">
                                    I'm &lt;strong>n°&lt;?php echo $i;?>&lt;/strong> in HTML
                                &lt;/div>
                            &lt;?php
                                }
                            ?>
                        &lt;/div>
                    </code>
                </pre>
                <div class="columns cc-masonry cc-6 cc-12-xl cc-3-l cc-2-m cc-1-s">
                    <?php
                        for ($i=1;$i<50;$i++) {
                            $height = rand(60,350);
                    ?>
                        <div class="<?php if ($i%2==0) echo 'cc-bg-blue'; else echo 'cc-bg-orange';?>" style="height:<?php echo $height;?>px">
                            I'm <strong>n°<?php echo $i;?></strong> in HTML
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

        <!-- ELEMENTS -->
        <section class="elements">
            <header>
                <h2 class="title">HTML Elements</h2>
                <p class="description">
                    Simple <strong>basics HTML elements</strong>
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-titles" class="btn cc-bg-primary">Titles</a>
                    <a href="#" data-rel="cc-paragraphs" class="btn cc-bg-primary">Paragraph</a>
                    <a href="#" data-rel="cc-lists" class="btn cc-bg-primary">Lists</a>
                    <a href="#" data-rel="cc-blockquotes" class="btn cc-bg-primary">blockquotes</a>
                    <a href="#" data-rel="cc-tables" class="btn cc-bg-primary">Tables</a>
                    <a href="#" data-rel="cc-forms" class="btn cc-bg-primary">Forms</a>
                    <a href="#" data-rel="cc-buttons" class="btn cc-bg-primary">Links/Buttons</a>
                    <a href="#" data-rel="cc-images" class="btn cc-bg-primary">Images</a>
                    <a href="#" data-rel="cc-loading" class="btn cc-bg-primary">Loader</a>
                </p>
            </header>

            <div class="main cc-titles">
                <h3 class="title">Titles Hn</h3>
                <pre class="HTML">
                    <code class="language-markup">&lt;h1>Heading 1 - Amet urna ultrices magna diam!&lt;/h1>
                        &lt;h2>Heading 2 - Amet urna ultrices magna diam!&lt;/h2>
                        &lt;h3>Heading 3 - Amet urna ultrices magna diam!&lt;/h3>
                        &lt;h4>Heading 4 - Amet urna ultrices magna diam!&lt;/h4>
                        &lt;h5>Heading 5 - Amet urna ultrices magna diam!&lt;/h5>
                        &lt;h6>Heading 6 - Amet urna ultrices magna diam!&lt;/h6>
                    </code>
                </pre>

                <h1>Heading 1 - Amet urna ultrices magna diam!</h1>
                <h2>Heading 2 - Amet urna ultrices magna diam!</h2>
                <h3>Heading 3 - Amet urna ultrices magna diam!</h3>
                <h4>Heading 4 - Amet urna ultrices magna diam!</h4>
                <h5>Heading 5 - Amet urna ultrices magna diam!</h5>
                <h6>Heading 6 - Amet urna ultrices magna diam!</h6>

                <h3 class="title">Colorized Titles</h3>
                <pre class="HTML">
                    <code class="language-markup">
                        &lt;h1 class="cc-blue">Heading 1 - &lt;small>I'm the subtitle&lt;/small>&lt;/h1>
                        &lt;h2 class="cc-yellow">Heading 2 - &lt;small>I'm the subtitle&lt;/small>&lt;/h2>
                    </code>
                </pre>

                <h1 class="cc-blue">Heading 1 - <small>I'm the subtitle</small></h1>
                <h2 class="cc-yellow">Heading 2 - <small>I'm the subtitle</small></h2>

                <h3 class="title">Small titles</h3>
                <pre class="HTML">
                    <code class="language-markup">&lt;h1>Heading 1 &lt;small>I'm the subtitle&lt;/small>&lt;/h1>
                    </code>
                </pre>
                <h1>Heading 1 <small>I'm the subtitle</small></h1>
            </div>

            <div class="main cc-paragraphs">
                <h3 class="title">Paragraphs</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;p>
                            Bacon ipsum dolor...
                        &lt;/p>
                    </code>
                </pre>

                <p>
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon. Sausage jowl tail ham doner tongue porchetta frankfurter bresaola spare ribs short ribs brisket pastrami.<br /><br />
                    Kielbasa ham turkey bresaola, frankfurter swine meatball andouille biltong salami pancetta filet mignon brisket ribeye jowl. Ground round tongue ham, boudin jowl sausage hamburger tail capicola shankle salami. Strip steak tri-tip boudin pork belly. Ground round bacon short ribs chicken. Landjaeger turducken tongue boudin brisket. Ham hock hamburger spare ribs, pork loin prosciutto filet mignon beef ribs. Ham hock pastrami jowl kielbasa chuck beef ribs ground round venison cow sirloin jerky meatball picanha short loin.
                </p>
            </div>

            <div class="main cc-lists">
                <h3 class="title">Lists</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;ul>
                            &lt;li>
                                Bacon ipsum...
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum do...
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum dolor...
                            &lt;/li>
                        &lt;/ul>
                    </code>
                </pre>
                <ul>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                    </li>
                </ul>

                <pre class="HTML">
                    <code class="language-markup">&lt;ul class="cc-unstyled">
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                            &lt;/li>
                        &lt;/ul>
                    </code>
                </pre>
                <ul class="cc-unstyled">
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                    </li>
                </ul>

                <pre class="HTML">
                    <code class="language-markup">&lt;ul class="cc-horizontal">
                            &lt;li>
                                Bacon ipsum
                            &lt;/li>
                            &lt;li class="fa-user cc-blue">
                                Short ribs.
                            &lt;/li>
                            &lt;li>
                                &lt;a href="#" class="btn cc-bg-orange ion-ios-contact">Contacts&lt;/a>
                            &lt;/li>
                            &lt;li class="fa-plug cc-primary icon-right">
                                Short ribs ".icon-right"
                            &lt;/li>
                            &lt;li>
                                &lt;a href="#" class="btn cc-bg-purple ion-ios-contact icon-right">Contacts ."icon-right"&lt;/a>
                            &lt;/li>
                        &lt;/ul>
                    </code>
                </pre>
                <ul class="cc-horizontal">
                    <li>
                        Bacon ipsum
                    </li>
                    <li class="cc-blue">
                        Short ribs.
                    </li>
                    <li>
                        <a href="#" class="btn cc-bg-orange"><i class="fas fa-user icon-left"></i>Contacts</a>
                    </li>
                    <li class="cc-primary icon-right">
                        Short ribs <i class="fas fa-user icon-right"></i>
                    </li>
                    <li>
                        <a href="#" class="btn cc-bg-purple ion-ios-contact icon-right">Contacts ."icon-right"</a>
                    </li>
                </ul>


                <pre class="HTML">
                    <code class="language-markup">&lt;ol>
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                            &lt;/li>
                            &lt;li>
                                Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                            &lt;/li>
                        &lt;/ol>
                    </code>
                </pre>
                <ol>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                    </li>
                    <li>
                        Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                    </li>
                </ol>


                <pre class="HTML">
                    <code class="language-markup">&lt;ul>
                            &lt;li class="cc-green fa-apple">
                                &lt;strong>FontAwesome Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                            &lt;/li>
                            &lt;li class="fa-facebook cc-red">
                                &lt;strong>FontAwesome Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                            &lt;/li>
                            &lt;li class="fa-twitter cc-blue">
                                &lt;strong>FontAwesome Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                            &lt;/li>
                            &lt;li class="cc-green ion-ionic">
                                &lt;strong>Ionicons Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                            &lt;/li>
                            &lt;li class="cc-red ion-paper-airplane">
                                &lt;strong>Ionicons Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                            &lt;/li>
                            &lt;li class="ion-nuclear cc-blue">
                                &lt;strong>Ionicons Icon&lt;/strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                            &lt;/li>
                        &lt;/ul>
                    </code>
                </pre>
                <ul>
                    <li class="cc-green fa-apple">
                        <strong>FontAwesome Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    </li>
                    <li class="fa-facebook cc-red">
                        <strong>FontAwesome Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                    </li>
                    <li class="fa-twitter cc-blue">
                        <strong>FontAwesome Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                    </li>
                    <li class="cc-green ion-ionic">
                        <strong>Ionicons Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    </li>
                    <li class="cc-red ion-paper-airplane">
                        <strong>Ionicons Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs.
                    </li>
                    <li class="ion-nuclear cc-blue">
                        <strong>Ionicons Icon</strong> Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin.
                    </li>
                </ul>
            </div>

            <div class="main cc-blockquotes">
                <h3 class="title">Blockquotes</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;blockquote>
                            Bacon ipsum...
                        &lt;/blockquote>
                    </code>
                </pre>

                <blockquote>
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                </blockquote>


                <pre class="HTML">
                    <code class="language-markup">&lt;blockquote>
                            Bacon ipsum dolor amet venison c...
                            &lt;footer>M. Bacon, Pig Company Manager&lt;/footer>
                        &lt;/blockquote>
                    </code>
                </pre>

                <blockquote>
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>


                <pre class="HTML">
                    <code class="language-markup">
                        &lt;blockquote class="cc-quoted">
                            Bacon ipsum dolor amet venison chu...
                            &lt;footer>M. Bacon, Pig Company Manager&lt;/footer>
                        &lt;/blockquote>
                    </code>
                </pre>
                <blockquote class="cc-quoted">
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>


                <pre class="HTML">
                    <code class="language-markup">
                        &lt;blockquote class="cc-quoted cc-purple">
                            Bacon ipsum dolor amet venison chuc...
                            &lt;footer>M. Bacon, Pig Company Manager&lt;/footer>
                        &lt;/blockquote>
                    </code>
                </pre>
                <blockquote class="cc-quoted cc-purple">
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;blockquote class="cc-reverse cc-quoted cc-purple">
                            Bacon ipsum dolor amet venison c...
                            &lt;footer>M. Bacon, Pig Company Manager&lt;/footer>
                        &lt;/blockquote>
                    </code>
                </pre>
                <blockquote class="cc-reverse cc-quoted cc-purple">
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>
            </div>

            <div class="main cc-tables">
                <h3 class="title">Tables</h3>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;table>
                            &lt;thead>
                                &lt;tr>
                                    &lt;th>&lt;/th>
                                    &lt;th>ID&lt;/th>
                                    &lt;th>Last Name&lt;/th>
                                    &lt;th>First Name&lt;/th>
                                    &lt;td>Function&lt;/td>
                                    &lt;td>Summary&lt;/td>
                                    &lt;th>&lt;/th>
                                &lt;/tr>
                            &lt;/thead>
                            &lt;tbody>
                                &lt;tr>
                                    &lt;td>
                                        &lt;form>
                                            &lt;div class="form-item form-checkbox">
                                                &lt;label>&lt;input type="checkbox" name="" value="" />
                                                &lt;/div>
                                            &lt;/div>
                                        &lt;/form>
                                    &lt;/td>
                                    &lt;td>1&lt;/td>
                                    &lt;td>Smith&lt;/td>
                                    &lt;td>Will&lt;/td>
                                    &lt;td>Pellentesque in ipsum id orci porta dapibus.&lt;/td>
                                    &lt;td>Pellentesque in ipsum id orci porta dapibus.&lt;/td>
                                    &lt;td class="cc-txt-right">
                                        &lt;a href="#" class="btn cc-bg-blue fa-eye">See&lt;/a>
                                        &lt;a href="#" class="btn cc-bg-green fa-pencil">Edit&lt;/a>
                                        &lt;a href="#" class="btn cc-bg-red fa-times">Delete&lt;/a>
                                    &lt;/td>
                                &lt;/tr>
                                &lt;tr>
                                    &lt;td>
                                        &lt;form>
                                            &lt;div class="form-item form-checkbox">
                                                &lt;label>&lt;input type="checkbox" name="" value="" />
                                                &lt;/div>
                                            &lt;/div>
                                        &lt;/form>
                                    &lt;/td>
                                    &lt;td>2&lt;/td>
                                    &lt;td>MacQueen&lt;/td>
                                    &lt;td>Steve&lt;/td>
                                    &lt;td>Pellentesque in ipsum id orci porta dapibus.&lt;/td>
                                    &lt;td>Pellentesque in ipsum id orci porta dapibus.&lt;/td>
                                    &lt;td class="cc-txt-right">
                                        &lt;a href="#" class="btn cc-bg-blue fa-eye">See&lt;/a>
                                        &lt;a href="#" class="btn cc-bg-green fa-pencil">Edit&lt;/a>
                                        &lt;a href="#" class="btn cc-bg-red fa-times">Delete&lt;/a>
                                    &lt;/td>
                                &lt;/tr>
                            &lt;/tbody>
                            &lt;tfoot>
                                &lt;tr>
                                    &lt;td>&lt;/td>
                                    &lt;td>ID&lt;/td>
                                    &lt;td>Last Name&lt;/td>
                                    &lt;td>First Name&lt;/td>
                                    &lt;td>Function&lt;/td>
                                    &lt;td>Summary&lt;/td>
                                    &lt;td>&lt;/td>
                                &lt;/tr>
                            &lt;/tfoot>
                        &lt;/table>
                    </code>
                </pre>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <td>Function</td>
                            <td>Summary</td>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td>Pellentesque in ipsum id orci porta dapibus.</td>
                            <td>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td>Pellentesque in ipsum id orci porta dapibus.</td>
                            <td>Pellentesque in ipsum id orci porta dapibus.</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Function</td>
                            <td>Summary</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;div class="wrap-table">
                            &lt;table>
                                ...
                            &lt;/table>
                        &lt;/div>
                    </code>
                </pre>
                <div class="wrap-table">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <td>Function</td>
                                <td>Summary</td>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <form>
                                        <div class="form-checkbox">
                                            <label><input type="checkbox" name="" value="" />
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>1</td>
                                <td>Smith</td>
                                <td>Will</td>
                                <td>Pellentesque in ipsum id orci porta dapibus.</td>
                                <td>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</td>
                                <td class="cc-txt-right">
                                    <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                    <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                    <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form>
                                        <div class="form-checkbox">
                                            <label><input type="checkbox" name="" value="" />
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>2</td>
                                <td>MacQueen</td>
                                <td>Steve</td>
                                <td>Pellentesque in ipsum id orci porta dapibus.</td>
                                <td>Pellentesque in ipsum id orci porta dapibus.</td>
                                <td class="cc-txt-right">
                                    <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                    <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                    <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td>ID</td>
                                <td>Last Name</td>
                                <td>First Name</td>
                                <td>Function</td>
                                <td>Summary</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- for simple tables -->
                        &lt;table class="cc-responsive">
                                ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-responsive cc-mat-30">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                ##
                            </td>
                            <td>1</td>
                            <td>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</td>
                            <td>Will</td>
                        </tr>
                        <tr>
                            <td>
                                ##
                            </td>
                            <td>1</td>
                            <td>Donec sollicitudin molestie malesuada.</td>
                            <td>Will</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>#</td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-unbordered">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-unbordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-equal-cols">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-equal-cols">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-valign-top">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-valign-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-bordered">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-hovered">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-hovered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-primary cc-hovered">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-primary cc-hovered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-bordered cc-primary">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-primary cc-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-striped cc-hovered">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-striped cc-hovered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>3</td>
                            <td>Wayne</td>
                            <td>John</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table class="cc-striped-col">
                            ...
                        &lt;/table>
                    </code>
                </pre>
                <table class="cc-striped-col">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>


                <pre class="HTML">
                    <code class="language-markup">&lt;table>
                            &lt;thead>
                                ...
                            &lt;/thead>
                            &lt;tbody>
                                &lt;tr class="cc-bg-primary">
                                    ...
                                &lt;/tr>
                        &lt;/table>
                    </code>
                </pre>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cc-bg-primary">
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>1</td>
                            <td>Smith</td>
                            <td>Will</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>2</td>
                            <td>MacQueen</td>
                            <td>Steve</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-item form-checkbox">
                                        <label><input type="checkbox" name="" value="" />
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>3</td>
                            <td>Wayne</td>
                            <td>John</td>
                            <td class="cc-txt-right">
                                <a href="#" class="btn cc-bg-blue fa-eye">See</a>
                                <a href="#" class="btn cc-bg-green fa-pencil">Edit</a>
                                <a href="#" class="btn cc-bg-red fa-times">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="main cc-forms">
                <h3 class="title">Forms</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;form>
                            &lt;div class="form-item">
                                &lt;label>Inline label&lt;/label>
                                &lt;input type="text" placeholder="placeholder" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;label class="block">Block Label&lt;/label>
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                            &lt;/div>

                            &lt;div class="form-item error">
                                &lt;label class="block">Block Label&lt;/label>
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <label>Inline label</label>
                        <input type="text" placeholder="placeholder" name="" />
                    </div>
                    <div class="form-item">
                        <label class="block">Block Label</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                    </div>

                    <div class="form-item error">
                        <label class="block">Block Label</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                    </div>
                </form>


                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;form>
                            &lt;div class="form-item">
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item error">
                                &lt;input type="text"  placeholder="* mandatory" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;input type="text" disabled="disabled" placeholder="inactive" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;input type="number" placeholder="0-5" min="0" max="5" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;input type="search" placeholder="key-words..." value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;input type="file" placeholder="key-words..." value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;select name="">
                                    &lt;option selected="selected" disabled="disabled">-- Choose --&lt;/option>
                                    &lt;option>Option 1&lt;/option>
                                    &lt;option>Option 2&lt;/option>
                                    &lt;option>Option 3&lt;/option>
                                &lt;/select>
                            &lt;/div>
                            &lt;div class="form-item error">
                                &lt;select name="">
                                    &lt;option selected="selected" disabled="disabled">-- Choose --&lt;/option>
                                    &lt;option>Option 1&lt;/option>
                                    &lt;option>Option 2&lt;/option>
                                    &lt;option>Option 3&lt;/option>
                                &lt;/select>
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;textarea name="" placeholder="Your message...">&lt;/textarea>
                            &lt;/div>
                            &lt;div class="form-item error">
                                &lt;textarea name="" placeholder="Your message...">&lt;/textarea>
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item error">
                        <input type="text"  placeholder="* mandatory" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="text" disabled="disabled" placeholder="inactive" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="number" placeholder="0-5" min="0" max="5" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="search" placeholder="key-words..." value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="file" placeholder="key-words..." value="" name="" />
                    </div>
                    <div class="form-item">
                        <select name="">
                            <option selected="selected" disabled="disabled">-- Choose --</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-item error">
                        <select name="">
                            <option selected="selected" disabled="disabled">-- Choose --</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <textarea name="" placeholder="Your message..."></textarea>
                    </div>
                    <div class="form-item error">
                        <textarea name="" placeholder="Your message..."></textarea>
                    </div>
                </form>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;form>
                            &lt;div class="form-item">
                                &lt;div class="form-radio">
                                    &lt;label>
                                        &lt;input type="radio" name="radio" value="m" />
                                        Choice 1
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio">
                                    &lt;label>
                                        &lt;input type="radio" name="radio" checked="checked" value="f" />
                                        Choice 2 (checked)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio disabled">
                                    &lt;label>
                                        &lt;input type="radio" name="radio" value="0" disabled="disabled" />
                                        Choice 3 disabled
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio error">
                                    &lt;label>
                                        &lt;input type="radio" name="radio" value="f"/>
                                        Choice 4 (error)
                                    &lt;/label>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;div class="form-radio block">
                                    &lt;label>
                                        &lt;input type="radio" name="radio2" value="m" />
                                        Choice 1
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio block">
                                    &lt;label>
                                        &lt;input type="radio" name="radio2" checked="checked" value="f" />
                                        Choice 2 (checked)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio block disabled">
                                    &lt;label>
                                        &lt;input type="radio" name="radio2" value="0" disabled="disabled" />
                                        Choice 3 disabled
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-radio block error">
                                    &lt;label>
                                        &lt;input type="radio" name="radio" value="f" />
                                        Choice 4 (error)
                                    &lt;/label>
                                &lt;/div>
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <div class="form-radio">
                            <label>
                                <input type="radio" name="radio" value="m" />
                                Choice 1
                            </label>
                        </div>
                        <div class="form-radio">
                            <label>
                                <input type="radio" name="radio" checked="checked" value="f" />
                                Choice 2 (checked)
                            </label>
                        </div>
                        <div class="form-radio disabled">
                            <label>
                                <input type="radio" name="radio" value="0" disabled="disabled" />
                                Choice 3 disabled
                            </label>
                        </div>
                        <div class="form-radio error">
                            <label>
                                <input type="radio" name="radio" value="f"/>
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-radio block">
                            <label>
                                <input type="radio" name="radio2" value="m" />
                                Choice 1
                            </label>
                        </div>
                        <div class="form-radio block">
                            <label>
                                <input type="radio" name="radio2" checked="checked" value="f" />
                                Choice 2 (checked)
                            </label>
                        </div>
                        <div class="form-radio block disabled">
                            <label>
                                <input type="radio" name="radio2" value="0" disabled="disabled" />
                                Choice 3 disabled
                            </label>
                        </div>
                        <div class="form-radio block error">
                            <label>
                                <input type="radio" name="radio" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                </form>

                <pre class="HTML">
                    <code class="language-markup"><!-- -->
                        &lt;!-- -->
                        &lt;form>
                            &lt;div class="form-item">
                                &lt;div class="form-checkbox">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="m" checked="checked" />
                                        Choice 1 (checked)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="f" />
                                        Choice 2
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox disabled">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="0" disabled="disabled" />
                                        Choice 3 (disabled)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox error">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="f" />
                                        Choice 4 (error)
                                    &lt;/label>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="form-item">
                                &lt;div class="form-checkbox block">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="m" checked="checked" />
                                        Choice 1 (checked)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox block">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="f" />
                                        Choice 2
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox block disabled">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="0" disabled="disabled" />
                                        Choice 3 (disabled)
                                    &lt;/label>
                                &lt;/div>
                                &lt;div class="form-checkbox block error">
                                    &lt;label>
                                        &lt;input type="checkbox" name="" value="f" />
                                        Choice 4 (error)
                                    &lt;/label>
                                &lt;/div>
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="" value="m" checked="checked" />
                                Choice 1 (checked)
                            </label>
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 2
                            </label>
                        </div>
                        <div class="form-checkbox disabled">
                            <label>
                                <input type="checkbox" name="" value="0" disabled="disabled" />
                                Choice 3 (disabled)
                            </label>
                        </div>
                        <div class="form-checkbox error">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-checkbox block">
                            <label>
                                <input type="checkbox" name="" value="m" checked="checked" />
                                Choice 1 (checked)
                            </label>
                        </div>
                        <div class="form-checkbox block">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 2
                            </label>
                        </div>
                        <div class="form-checkbox block disabled">
                            <label>
                                <input type="checkbox" name="" value="0" disabled="disabled" />
                                Choice 3 (disabled)
                            </label>
                        </div>
                        <div class="form-checkbox block error">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                </form>

                <pre class="HTML">
                    <code class="language-markup">&lt;form>
                            &lt;div class="form-item error">
                                &lt;label>With Prefix and Suffix&lt;/label>
                                &lt;div class="form-ps">
                                    &lt;span>$&lt;/span>
                                    &lt;input type="text"  placeholder="price" value="" name="" />
                                    &lt;span>.00&lt;/span>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label>With Prefix and Suffix&lt;/label>
                                &lt;div class="form-ps">
                                    &lt;span>$&lt;/span>
                                    &lt;input type="text"  placeholder="price" value="" name="" />
                                    &lt;span>.00&lt;/span>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label>Prefix only&lt;/label>
                                &lt;div class="form-ps">
                                    &lt;span>$&lt;/span>
                                    &lt;input type="text"  placeholder="price" value="" name="" />
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label>Suffix only&lt;/label>
                                &lt;div class="form-ps">
                                    &lt;input type="text"  placeholder="price" value="" name="" />
                                    &lt;span>€&lt;/span>
                                &lt;/div>
                            &lt;/div>
                        &lt;/form>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item error">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>Prefix only</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>Suffix only</label>
                        <div class="form-ps">
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>€</span>
                        </div>
                    </div>
                </form>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;form>
                            &lt;div class="form-item cc-chained">
                                &lt;label class="block">Chained inputs&lt;/label>
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="submit" value="envoyer" name="" />
                            &lt;/div>

                            &lt;div class="form-item cc-chained error">
                                &lt;label class="block">Chained error inputs&lt;/label>
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="text" placeholder="placeholder" value="" name="" />
                                &lt;input type="submit" value="envoyer" name="" />
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item cc-chained">
                        <label class="block">Chained inputs</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="submit" value="envoyer" name="" />
                    </div>

                    <div class="form-item cc-chained error">
                        <label class="block">Chained error inputs</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="submit" value="envoyer" name="" />
                    </div>
                </form>

                <pre class="HTML">
                    <code class="language-markup">&lt;form>
                            &lt;div class="form-item">
                                &lt;button type="submit">I'm a submit button&lt;/button>
                                &lt;input type="submit" value="I'm a submit input" />
                                &lt;button type="submit" class="ion-ios-cloud-upload-outline">Upload&lt;/button>
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <button type="submit">I'm a submit button</button>
                        <input type="submit" value="I'm a submit input" />
                        <button type="submit"><i class="ion-ios-cloud-upload-outline icon-left"></i>Upload</button>
                        <button type="submit">Upload <i class="far fa-user-circle icon-right"></i></button>
                    </div>
                </form>




                <pre class="HTML">
                    <code class="language-markup">&lt;form>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                        &lt;/form>

                        &lt;form>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="block">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="block">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                            &lt;div class="form-item cc-inline">
                                &lt;label class="block">Your name&lt;/label>
                                &lt;input type="text"  placeholder="placeholder" value="" name="" />
                            &lt;/div>
                        &lt;/form>
                    </code>
                </pre>
                <form>
                    <div class="form-item cc-inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item cc-inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item cc-inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                </form>

                <form>
                    <div class="form-item cc-inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item cc-inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item cc-inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                </form>



                <pre class="HTML">
                    <code class="language-markup">&lt;form class="cc-purple">
                            ...
                        &lt;/form>
                    </code>
                </pre>

                <form class="cc-purple">
                    <div class="form-item">
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item error">
                        <input type="text"  placeholder="* mandatory" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="text" disabled="disabled" placeholder="inactive" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="number" placeholder="0-5" min="0" max="5" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="search" placeholder="key-words..." value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="file" placeholder="key-words..." value="" name="" />
                    </div>
                    <div class="form-item">
                        <select name="">
                            <option selected="selected" disabled="disabled">-- Choose --</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-item error">
                        <select name="">
                            <option selected="selected" disabled="disabled">-- Choose --</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <div class="form-radio">
                            <label>
                                <input type="radio" name="radio" value="m" />
                                Choice 1
                            </label>
                        </div>
                        <div class="form-radio">
                            <label>
                                <input type="radio" name="radio" checked="checked" value="f" />
                                Choice 2 (checked)
                            </label>
                        </div>
                        <div class="form-radio disabled">
                            <label>
                                <input type="radio" name="radio" value="0" disabled="disabled" />
                                Choice 3 disabled
                            </label>
                        </div>
                        <div class="form-radio error">
                            <label>
                                <input type="radio" name="radio" value="f"/>
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-radio block">
                            <label>
                                <input type="radio" name="radio2" value="m" />
                                Choice 1
                            </label>
                        </div>
                        <div class="form-radio block">
                            <label>
                                <input type="radio" name="radio2" checked="checked" value="f" />
                                Choice 2 (checked)
                            </label>
                        </div>
                        <div class="form-radio block disabled">
                            <label>
                                <input type="radio" name="radio2" value="0" disabled="disabled" />
                                Choice 3 disabled
                            </label>
                        </div>
                        <div class="form-radio block error">
                            <label>
                                <input type="radio" name="radio" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="" value="m" checked="checked" />
                                Choice 1 (checked)
                            </label>
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 2
                            </label>
                        </div>
                        <div class="form-checkbox disabled">
                            <label>
                                <input type="checkbox" name="" value="0" disabled="disabled" />
                                Choice 3 (disabled)
                            </label>
                        </div>
                        <div class="form-checkbox error">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-checkbox block">
                            <label>
                                <input type="checkbox" name="" value="m" checked="checked" />
                                Choice 1 (checked)
                            </label>
                        </div>
                        <div class="form-checkbox block">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 2
                            </label>
                        </div>
                        <div class="form-checkbox block disabled">
                            <label>
                                <input type="checkbox" name="" value="0" disabled="disabled" />
                                Choice 3 (disabled)
                            </label>
                        </div>
                        <div class="form-checkbox block error">
                            <label>
                                <input type="checkbox" name="" value="f" />
                                Choice 4 (error)
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <textarea name="" placeholder="Your message..."></textarea>
                    </div>
                    <div class="clearfix"></div>


                    <div class="form-item error">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>Prefix only</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                        </div>
                    </div>
                    <div class="form-item cc-inline">
                        <label>Suffix only</label>
                        <div class="form-ps">
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>€</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-item cc-chained">
                        <label class="block">Chained inputs</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="submit" value="envoyer" name="" />
                    </div>

                    <div class="form-item cc-chained error">
                        <label class="block">Chained error inputs</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="submit" value="envoyer" name="" />
                    </div>

                    <div class="form-item">
                        <button type="submit">I'm a submit button</button>
                        <input type="submit" value="I'm a submit input" />
                        <button type="submit" class="ion-ios-cloud-upload-outline">Upload</button>
                    </div>
                </form>
            </div>

            <div class="main cc-buttons">
                <h3 class="title">Links / Buttons</h3>

                <pre class="HTML">
                    <code class="language-markup">&lt;a href="#">Classic link&lt;/a>
                        &lt;a href="#" class="btn">Classic link with .btn class&lt;/a>
                        &lt;button>Button&lt;/button>
                    </code>
                </pre>
                <p>
                    <a href="#">Classic link</a>
                    <a href="#" class="btn">Classic link with .btn class</a>
                    <button>Button</button>
                </p>


                <pre class="HTML">
                    <code class="language-markup">&lt;a href="#" class="btn cc-thin">&lt; a /> .btn.cc-thin&lt;/a>
                        &lt;a href="#" class="btn cc-fat">&lt; a /> .btn.cc-fat&lt;/a>
                        &lt;button class="cc-thin">Button.cc-thin&lt;/button>
                        &lt;button class="cc-fat">Button.cc-fat&lt;/button>
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-thin">< a /> .btn.cc-thin</a>
                    <a href="#" class="btn cc-fat">< a /> .btn.cc-fat</a>
                    <button class="cc-thin">Button.cc-thin</button>
                    <button class="cc-fat">Button.cc-fat</button>
                </p>


                <pre class="HTML">
                    <code class="language-markup">&lt;p>
                            &lt;a href="#" class="cc-primary">Classic Primary color link&lt;/a>
                            &lt;a href="#" class="cc-blue">Classic blue link&lt;/a>
                            &lt;a href="#" class="cc-red">Classic red link&lt;/a>
                        &lt;/p>
                        &lt;p>
                            &lt;a href="#" class="btn cc-bg-primary">Btn primary color link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-blue">Btn blue link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-red">Btn red link&lt;/a>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-bg-primary">Button&lt;/button>
                            &lt;button class="cc-bg-red">Button&lt;/button>
                            &lt;button class="cc-bg-green">Button&lt;/button>
                            &lt;button class="cc-bg-blue">Button&lt;/button>
                            &lt;button class="cc-bg-purple">Button&lt;/button>
                            &lt;button class="cc-bg-orange">Button&lt;/button>
                            &lt;button class="cc-bg-yellow">Button&lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <a href="#" class="cc-primary">Classic Primary color link</a>
                    <a href="#" class="cc-blue">Classic blue link</a>
                    <a href="#" class="cc-red">Classic red link</a>
                </p>
                <p>
                    <a href="#" class="btn cc-bg-primary">Btn primary color link</a>
                    <a href="#" class="btn cc-bg-blue">Btn blue link</a>
                    <a href="#" class="btn cc-bg-red">Btn red link</a>
                </p>
                <p>
                    <button class="cc-bg-primary">Button</button>
                    <button class="cc-bg-red">Button</button>
                    <button class="cc-bg-green">Button</button>
                    <button class="cc-bg-blue">Button</button>
                    <button class="cc-bg-purple">Button</button>
                    <button class="cc-bg-orange">Button</button>
                    <button class="cc-bg-yellow">Button</button>
                </p>

                <pre class="HTML">
                    <code class="language-markup">&lt;p>
                            &lt;a href="#" class="btn cc-bg-blue cc-outlined">Classic blue link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-red cc-outlined">Classic red link&lt;/a>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-bg-primary cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-red cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-green cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-blue cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-purple cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-orange cc-outlined">Button&lt;/button>
                            &lt;button class="cc-bg-yellow cc-outlined">Button&lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-bg-blue cc-outlined">Classic blue link</a>
                    <a href="#" class="btn cc-bg-red cc-outlined">Classic red link</a>
                </p>
                <p>
                    <button class="cc-bg-primary cc-outlined">Button</button>
                    <button class="cc-bg-red cc-outlined">Button</button>
                    <button class="cc-bg-green cc-outlined">Button</button>
                    <button class="cc-bg-blue cc-outlined">Button</button>
                    <button class="cc-bg-purple cc-outlined">Button</button>
                    <button class="cc-bg-orange cc-outlined">Button</button>
                    <button class="cc-bg-yellow cc-outlined">Button</button>
                </p>

                <pre class="HTML">
                    <code class="language-markup">&lt;p>
                            &lt;a href="#" class="btn cc-bg-blue cc-thin ion-social-chrome">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red cc-thin fa-times">Red button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-blue ion-social-chrome">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red fa-times">Red button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-blue cc-fat ion-social-chrome">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red cc-fat fa-times">Red button with icon&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;a href="#" class="btn cc-thin cc-bg-green">&lt;i class="ion-social-nodejs">&lt;/i> Green link with icon&lt;/a>
                            &lt;button class="cc-thin cc-bg-purple">&lt;i class=" fa fa-bug">&lt;/i> Purple button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-green">&lt;i class="ion-social-nodejs">&lt;/i> Green link with icon&lt;/a>
                            &lt;button class="cc-bg-purple">&lt;i class=" fa fa-bug">&lt;/i> Purple button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-fat cc-bg-green">&lt;i class="ion-social-nodejs">&lt;/i> Green link with icon&lt;/a>
                            &lt;button class="cc-fat cc-bg-purple">&lt;i class=" fa fa-bug">&lt;/i> Purple button with icon&lt;/button>
                        &lt;/p>

                        &lt;p>
                            &lt;a href="#" class="btn cc-bg-blue cc-thin ion-social-chrome icon-right">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red cc-thin fa-times icon-right">Red button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-blue ion-social-chrome icon-right">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red fa-times icon-right">Red button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-blue cc-fat ion-social-chrome icon-right">Blue link with icon&lt;/a>
                            &lt;button class="cc-bg-red cc-fat fa-times icon-right">Red button with icon&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;a href="#" class="btn cc-thin cc-bg-green icon-right">Green link with icon &lt;i class="ion-social-nodejs">&lt;/i>&lt;/a>
                            &lt;button class="cc-thin cc-bg-purple icon-right">Purple button with icon &lt;i class=" fa fa-bug">&lt;/i>&lt;/button>
                            &lt;a href="#" class="btn cc-bg-green icon-right">Green link with icon &lt;i class="ion-social-nodejs">&lt;/i>&lt;/a>
                            &lt;button class="cc-bg-purple icon-right">Purple button with icon &lt;i class=" fa fa-bug">&lt;/i>&lt;/button>
                            &lt;a href="#" class="btn cc-fat cc-bg-green icon-right">Green link with icon &lt;i class="ion-social-nodejs">&lt;/i>&lt;/a>
                            &lt;button class="cc-fat cc-bg-purple icon-right">Purple button with icon &lt;i class=" fa fa-bug">&lt;/i>&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;a href="#" class="btn cc-bg-orange fa-anchor cc-outlined">Orange link with icon&lt;/a>
                            &lt;button class="cc-bg-purple cc-outlined fa-bug">Purple button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-orange fa-anchor cc-outlined icon-right">Orange link with icon&lt;/a>
                            &lt;button class="cc-bg-purple cc-outlined fa-bug icon-right">Purple button with icon&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;a href="#" class="btn cc-bg-green cc-outlined">&lt;i class="ion-social-nodejs">&lt;/i> Green link with icon&lt;/a>
                            &lt;button class="cc-bg-purple cc-outlined">&lt;i class=" fa fa-bug">&lt;/i> Purple button with icon&lt;/button>
                            &lt;a href="#" class="btn cc-bg-green cc-outlined icon-right">Green link with icon &lt;i class="ion-social-nodejs">&lt;/i>&lt;/a>
                            &lt;button class="cc-bg-purple cc-outlined icon-right">Purple button with icon &lt;i class=" fa fa-bug">&lt;/i>&lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-bg-blue cc-thin"><i class="ion-social-chrome icon-left"></i>Blue link with icon</a>
                    <button class="cc-bg-red cc-thin">Red button with icon <i class="ion-social-chrome icon-right"></i></button>
                    <a href="#" class="btn cc-bg-blue"><i class="ion-social-chrome icon-left"></i>Blue link with icon</a>
                    <button class="cc-bg-red">Red button with icon <i class="ion-social-chrome icon-right"></i></button>
                    <a href="#" class="btn cc-bg-blue cc-fat"><i class="ion-social-chrome icon-left"></i>Blue link with icon</a>
                    <button class="cc-bg-red cc-fat">Red button with icon <i class="ion-social-chrome icon-right"></i></button>
                </p>
                <p>
                    <a href="#" class="btn cc-thin cc-bg-green"><i class="ion-social-nodejs"></i> Green link with icon</a>
                    <button class="cc-thin cc-bg-purple"><i class=" fa fa-bug"></i> Purple button with icon</button>
                    <a href="#" class="btn cc-bg-green"><i class="ion-social-nodejs"></i> Green link with icon</a>
                    <button class="cc-bg-purple"><i class=" fa fa-bug"></i> Purple button with icon</button>
                    <a href="#" class="btn cc-fat cc-bg-green"><i class="ion-social-nodejs"></i> Green link with icon</a>
                    <button class="cc-fat cc-bg-purple"><i class=" fa fa-bug"></i> Purple button with icon</button>
                </p>

                <p>
                    <a href="#" class="btn cc-bg-blue cc-thin ion-social-chrome icon-right">Blue link with icon</a>
                    <button class="cc-bg-red cc-thin fa-times icon-right">Red button with icon</button>
                    <a href="#" class="btn cc-bg-blue ion-social-chrome icon-right">Blue link with icon</a>
                    <button class="cc-bg-red fa-times icon-right">Red button with icon</button>
                    <a href="#" class="btn cc-bg-blue cc-fat ion-social-chrome icon-right">Blue link with icon</a>
                    <button class="cc-bg-red cc-fat fa-times icon-right">Red button with icon</button>
                </p>
                <p>
                    <a href="#" class="btn cc-thin cc-bg-green icon-right">Green link with icon <i class="ion-social-nodejs"></i></a>
                    <button class="cc-thin cc-bg-purple icon-right">Purple button with icon <i class=" fa fa-bug"></i></button>
                    <a href="#" class="btn cc-bg-green icon-right">Green link with icon <i class="ion-social-nodejs"></i></a>
                    <button class="cc-bg-purple icon-right">Purple button with icon <i class=" fa fa-bug"></i></button>
                    <a href="#" class="btn cc-fat cc-bg-green icon-right">Green link with icon <i class="ion-social-nodejs"></i></a>
                    <button class="cc-fat cc-bg-purple icon-right">Purple button with icon <i class=" fa fa-bug"></i></button>
                </p>
                <p>
                    <a href="#" class="btn cc-bg-orange fa-anchor cc-outlined">Orange link with icon</a>
                    <button class="cc-bg-purple cc-outlined fa-bug">Purple button with icon</button>
                    <a href="#" class="btn cc-bg-orange fa-anchor cc-outlined icon-right">Orange link with icon</a>
                    <button class="cc-bg-purple cc-outlined fa-bug icon-right">Purple button with icon</button>
                </p>
                <p>
                    <a href="#" class="btn cc-bg-green cc-outlined"><i class="ion-social-nodejs icon-left"></i> Green link with icon</a>
                    <button class="cc-bg-purple cc-outlined"><i class="fas fa-heartbeat icon-left"></i> Purple button with icon</button>
                    <a href="#" class="btn cc-bg-green cc-outlined">Green link with icon <i class="fas fa-heartbeat icon-right"></i></a>
                    <button class="cc-bg-purple cc-outlined">Purple button with icon <i class="fas fa-heartbeat icon-right"></i></button>
                </p>

                <pre class="HTML">
                    <code class="language-markup">&lt;p>
                            &lt;a href="#" class="btn cc-bg-blue cc-disabled">Classic disabled blue link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-red cc-disabled">Classic disabled red link&lt;/a>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-bg-primary cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-red cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-green cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-blue cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-purple cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-orange cc-disabled">Button&lt;/button>
                            &lt;button class="cc-bg-yellow cc-disabled">Button&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-outlined cc-bg-primary cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-red cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-green cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-blue cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-purple cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-orange cc-disabled">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-yellow cc-disabled">Button&lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-bg-blue cc-disabled">Classic disabled blue link</a>
                    <a href="#" class="btn cc-bg-red cc-disabled">Classic disabled red link</a>
                </p>
                <p>
                    <button class="cc-bg-primary cc-disabled">Button</button>
                    <button class="cc-bg-red cc-disabled">Button</button>
                    <button class="cc-bg-green cc-disabled">Button</button>
                    <button class="cc-bg-blue cc-disabled">Button</button>
                    <button class="cc-bg-purple cc-disabled">Button</button>
                    <button class="cc-bg-orange cc-disabled">Button</button>
                    <button class="cc-bg-yellow cc-disabled">Button</button>
                </p>
                <p>
                    <button class="cc-outlined cc-bg-primary cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-red cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-green cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-blue cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-purple cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-orange cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-yellow cc-disabled">Button</button>
                </p>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;p>
                            &lt;a href="#" class="btn cc-bg-primary cc-loading">Classic loading blue link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-blue cc-loading">Classic loading blue link&lt;/a>
                            &lt;a href="#" class="btn cc-bg-red cc-loading">Classic loading red link&lt;/a>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-bg-primary cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-red cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-green cc-thin cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-blue cc-fat cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-purple cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-orange cc-loading">Button&lt;/button>
                            &lt;button class="cc-bg-yellow cc-loading">Button&lt;/button>
                        &lt;/p>
                        &lt;p>
                            &lt;button class="cc-outlined cc-bg-primary cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-red cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-green cc-thin cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-blue cc-fat cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-purple cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-orange cc-loading">Button&lt;/button>
                            &lt;button class="cc-outlined cc-bg-yellow cc-loading">Button&lt;/button>
                        &lt;/p>
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-bg-primary cc-loading">Classic loading blue link</a>
                    <a href="#" class="btn cc-bg-blue cc-loading">Classic loading blue link</a>
                    <a href="#" class="btn cc-bg-red cc-loading">Classic loading red link</a>
                </p>
                <p>
                    <button class="cc-bg-primary cc-loading">Button</button>
                    <button class="cc-bg-red cc-loading">Button</button>
                    <button class="cc-bg-green cc-thin cc-loading">Button</button>
                    <button class="cc-bg-blue cc-fat cc-loading">Button</button>
                    <button class="cc-bg-purple cc-loading">Button</button>
                    <button class="cc-bg-orange cc-loading">Button</button>
                    <button class="cc-bg-yellow cc-loading">Button</button>
                </p>
                <p>
                    <button class="cc-outlined cc-bg-primary cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-red cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-green cc-thin cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-blue cc-fat cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-purple cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-orange cc-loading">Button</button>
                    <button class="cc-outlined cc-bg-yellow cc-loading">Button</button>
                </p>
            </div>

            <div class="main cc-images">
                <h3 class="title">Images</h3>
                <pre class="HTML">
                    <code class="language-markup">&lt;p class="cc-txt-center">
                            Image below is &lt;strong>not responsive&lt;/strong>&lt;br />&lt;br />
                            &lt;img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-no-responsive"/>
                        &lt;/p>

                        &lt;p class="cc-mat-20 cc-txt-center">
                            Image below is &lt;strong>responsive&lt;/strong>&lt;br />&lt;br />
                            &lt;img src="http://lorempixel.com/600/300" alt="My alt text"/>
                        &lt;/p>

                        &lt;p class="cc-mat-20 cc-txt-center">
                            Image below is &lt;strong>bordered&lt;/strong>&lt;br />&lt;br />
                            &lt;img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-bordered"/>
                        &lt;/p>

                        &lt;p class="cc-mat-20 cc-txt-center">
                            Image below is &lt;strong>shadowed&lt;/strong>&lt;br />&lt;br />
                            &lt;img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-shadowed"/>
                        &lt;/p>
                    </code>
                </pre>

                <p class="cc-txt-center">
                    Image below is <strong>not responsive</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-no-responsive"/>
                </p>

                <p class="cc-mat-20 cc-txt-center">
                    Image below is <strong>responsive</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text"/>
                </p>

                <p class="cc-mat-20 cc-txt-center">
                    Image below is <strong>bordered</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-bordered"/>
                </p>

                <p class="cc-mat-20 cc-txt-center">
                    Image below is <strong>shadowed</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-shadowed"/>
                </p>
            </div>

            <div class="main cc-loading">
                <h3 class="title">Loader</h3>
                <pre class="HTML">
                    <code class="language-markup">&lt;div class="cc-loader">
                            &lt;div class="dot dot-1">&lt;/div>
                            &lt;div class="dot dot-2">&lt;/div>
                            &lt;div class="dot dot-3">&lt;/div>
                            &lt;div class="dot dot-4">&lt;/div>
                            &lt;div class="dot dot-5">&lt;/div>
                            &lt;div class="dot dot-6">&lt;/div>
                            &lt;div class="dot dot-7">&lt;/div>
                            &lt;div class="dot dot-8">&lt;/div>
                            &lt;div class="dot dot-9">&lt;/div>
                            &lt;div class="dot dot-10">&lt;/div>
                            &lt;div class="dot dot-11">&lt;/div>
                            &lt;div class="dot dot-12">&lt;/div>
                        &lt;/div>
                    </code>
                </pre>

                <div class="cc-loader">
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                    <div class="dot dot-4"></div>
                    <div class="dot dot-5"></div>
                    <div class="dot dot-6"></div>
                    <div class="dot dot-7"></div>
                    <div class="dot dot-8"></div>
                    <div class="dot dot-9"></div>
                    <div class="dot dot-10"></div>
                    <div class="dot dot-11"></div>
                    <div class="dot dot-12"></div>
                </div>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;div class="cc-loader">
                            &lt;div class="spinner">&lt;/div>
                        &lt;/div>
                    </code>
                </pre>

                <div class="cc-loader">
                    <div class="spinner"></div>
                </div>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;div class="cc-loader caterpillar">
                            &lt;div class="chain chain-1">&lt;/div>
                            &lt;div class="chain chain-2">&lt;/div>
                            &lt;div class="chain chain-3">&lt;/div>
                            &lt;div class="chain chain-4">&lt;/div>
                            &lt;div class="chain chain-5">&lt;/div>
                        &lt;/div>
                    </code>
                </pre>

                <div class="cc-loader caterpillar">
                    <div class="chain chain-1"></div>
                    <div class="chain chain-2"></div>
                    <div class="chain chain-3"></div>
                    <div class="chain chain-4"></div>
                    <div class="chain chain-5"></div>
                </div>
            </div>
        </section>


        <!-- Modals exemples -->
        <div id="modal-id" class="modal">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width)
                </div>

                <form>
                    <div class="modal-body">
                        <p>
                            Hamburger doner alcatra sirloin bresaola porchetta tenderloin. Ribeye bacon meatball ball tip beef ribs leberkas capicola corned beef.
                        </p>
                        <div class="form-item">
                            <label>Label</label>
                            <input type="text" placeholder="placeholder" />
                        </div>

                        <div class="columns cc-masonry cc-3">
                            <?php
                                for ($i=1;$i<12;$i++) {
                                    $height = rand(60,350);
                            ?>
                                <div class="<?php if ($i%2==0) echo 'cc-bg-blue'; else echo 'cc-bg-orange';?>" style="height:<?php echo $height;?>px">
                                    I'm <strong>n°<?php echo $i;?></strong> in HTML
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer cc-txt-center">
                        <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Close</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-large" class="modal modal-large">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a large modal (80% width)
                </div>

                <form>
                    <div class="modal-body">
                        <p>
                            Hamburger doner alcatra sirloin bresaola porchetta tenderloin. Ribeye bacon meatball ball tip beef ribs leberkas capicola corned beef.
                        </p>
                        <div class="form-item">
                            <label>Label</label>
                            <input type="text" placeholder="placeholder" />
                        </div>
                    </div>
                    <div class="modal-footer cc-txt-center">
                        <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Close</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-small" class="modal modal-small">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a small modal (30% width)
                </div>

                <form>
                    <div class="modal-body">
                        <p>
                            Hamburger doner alcatra sirloin bresaola porchetta tenderloin. Ribeye bacon meatball ball tip beef ribs leberkas capicola corned beef.
                        </p>
                        <div class="form-item">
                            <label>Label</label>
                            <input type="text" placeholder="placeholder" />
                        </div>
                    </div>
                    <div class="modal-footer cc-txt-center">
                        <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Close</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-fullscreen" class="modal" data-fullscreen data-fixed-hf>
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a fullscreen modal (100% width &amp; height)
                </div>

                <section class="wrap-modal-body">
                    <div class="modal-body">
                        <p>
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                        </p>
                    </div>
                </section>

                <div class="modal-footer cc-txt-center">
                    <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Close</a>
                </div>
            </div>
        </div>
        <div id="modal-id-long" class="modal">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width) with long content
                </div>

                <form>
                    <div class="modal-body">
                        <p>
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                        </p>
                        <div class="form-item">
                            <label>Label</label>
                            <input type="text" placeholder="placeholder" />
                        </div>
                    </div>
                    <div class="modal-footer cc-txt-center">
                        <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Close</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-long-fixed-header" class="modal" data-fixed-hf>
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width) with fixed header
                </div>


                <section class="wrap-modal-body">
                    <div class="modal-body">
                        <pre class="HTML">
                            <code class="language-markup">&lt;div id="modal-id" class="modal" data-fixed-hf>
                                    &lt;div class="modal-content">
                                        &lt;div class="modal-header">
                                        &lt;/div>
                                        &lt;section class="wrap-modal-body">
                                            &lt;div class="modal-body">
                                            &lt;/div>
                                        &lt;/section>
                                        &lt;div class="modal-footer">
                                        &lt;/div>
                                    &lt;/div>
                                &lt;/div>
                            </code>
                        </pre>
                        <p>
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                            Bacon ipsum dolor amet cupim pancetta corned beef tongue, capicola pork belly t-bone fatback drumstick venison kevin. Pork pig prosciutto, chicken kevin tail short loin venison alcatra fatback beef. Tenderloin tongue drumstick pancetta. Bacon boudin venison beef jerky tongue prosciutto.
                            Beef ribs ribeye bacon corned beef pork belly landjaeger. Meatball strip steak picanha ribeye meatloaf spare ribs rump sausage chicken beef ribs tri-tip pastrami leberkas. Chicken filet mignon jerky kevin turducken pig ground round. Shoulder strip steak frankfurter ham drumstick, capicola t-bone pork belly turducken kielbasa cow corned beef. Filet mignon shank turkey andouille turducken.
                        </p>
                        <div class="form-item">
                            <label>Label</label>
                            <input type="text" placeholder="placeholder" />
                        </div>
                    </div>
                </section>
                <div class="modal-footer cc-txt-center">
                    <button type="submit" class="cc-bg-green fa-save">Save</button>
                    <a href="javascript:void(0)" class="btn cc-bg-red" data-close-modal>Cancel</a>
                </div>

            </div>
        </div>
        <div id="modal-id-no-closable" class="modal" data-disabled-overlay>
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    No close with overlay
                </div>
                <div class="modal-body">
                    <p>
                        You have to click on close button to close this modal.<br />
                        <strong>Overlay is disabled !</strong>
                    </p>
                </div>
            </div>
        </div>
        <div id="modal-id-nested" class="modal">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width)
                </div>
                <div class="modal-body">
                    <p>
                        Hamburger doner alcatra sirloin bresaola porchetta tenderloin. Ribeye bacon meatball ball tip beef ribs leberkas capicola corned beef.
                    </p>
                    <pre class="HTML">
                    <code class="language-markup">
                        // Button in footer
                        &lt;button data-target="modal-id-2" class="modal-open cc-bg-primary"&gt;Open another modal&lt;/button&gt;
                    </code>
                </pre>
                </div>
                <div class="modal-footer cc-txt-center">
                    <button data-target="modal-id-2" class="modal-open cc-bg-primary">Open another modal</button>
                </div>
            </div>
        </div>
        <div id="modal-id-2" class="modal">
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width)
                </div>
                <div class="modal-body">
                    <p>
                        <strong>I'm the second modal with id="modal-id-2"</strong>
                    </p>
                </div>
                <div class="modal-footer cc-txt-center">
                    <button data-target="modal-id-3" class="modal-open cc-bg-primary">Open another modal</button>
                </div>
            </div>
        </div>
        <div id="modal-id-3" class="modal" data-disabled-overlay>
            <button data-close-modal></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width)
                </div>
                <div class="modal-body">
                    <p>
                        <strong>I'm the third modal!</strong> and you can't close me by clicking on overlay!
                    </p>
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        <script type="text/javascript" src="tests/jquery.min.js"></script>
        <script type="text/javascript" src="tests/prism.js"></script>
        <script type="text/javascript" src="dist/chuckcss.js"></script>
        <script type="text/javascript" src="tests/test.js"></script>
    </body>
</html>
