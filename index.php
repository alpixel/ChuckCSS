<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>ChuckCSS.io | Tests</title>
        <!--<base href="http://devbox.local/" />-->
        <base href="http://alpixel.rocks/mickael/workspace/ChuckCSS/" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="dist/bootstrap-override.min.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="dist/chuckcss.min.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="tests/prism.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="tests/test.css" type="text/css" media="screen" charset="utf-8" />
    </head>

    <body class="test">
        <section class="components">
            <header>
                <h2 class="title">Components</h2>
                <p class="description">
                    Style for <strong>components</strong>
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-alerts" class="btn cc-bg-red">Alerts</a>
                    <a href="#" data-rel="cc-messages" class="btn cc-bg-red">Messages</a>
                    <a href="#" data-rel="cc-badges" class="btn cc-bg-red">Badges</a>
                    <a href="#" data-rel="cc-tabs" class="btn cc-bg-red">Tabs</a>
                    <a href="#" data-rel="cc-modals" class="btn cc-bg-red">Modals</a>
                </p>
            </header>

            <div class="main cc-modals">
                <h3 class="title">Modals</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Modal
                        div id="modal-id" class="modal"
                        -- div class="modal-close" button // Required
                        -- div class="modal-overlay" // Required
                        -- div class="modal-content" // default, 50% width -- Required
                        ---- div class="modal-header"
                        ---- div class="modal-content"
                        ---- div class="modal-footer"


                        // Sizes modal
                        div id="modal-id" class="modal modal-large" // 80% width
                        div id="modal-id" class="modal modal-small" // 30% width

                        // Disabled close on overlay
                        div id="modal-id" class="modal" data-disabled-overlay

                        // RESPONSIVE MODAL
                        // For small screens, ChuckCSS forces the modal-content to 90% width regardless to the class "modal-large" & "modal-small"
                    </code>
                </pre>

                <div>
                    <button data-target="modal-id" class="modal-open">Launch default modal (with form & masonry layout exemple)</button>
                    <button data-target="modal-id-large" class="modal-open">Launch large modal</button>
                    <button data-target="modal-id-small" class="modal-open">Launch small modal</button>
                    <button data-target="modal-id-long" class="modal-open">Launch modal with long content</button>
                    <button data-target="modal-id-long-fixed-header" class="modal-open">Fixed Header / Footer</button>
                </div>

                <div class="cc-mat-20">
                    <button data-target="modal-id-no-closable" class="modal-open">Disabled overlay click</button>
                    <button data-target="modal-id-nested" class="modal-open">Nested modals</button>
                    <button data-target="this_id_does_not_exist" class="modal-open">Call a non existing modal (show an alert)</button>
                </div>
            </div>

            <div class="main cc-alerts">
                <h3 class="title">Alerts</h3>

                <pre class="HTML">
                    <code class="language-markup">
                        &lt;!-- Default -->
                        &lt;div class="alert alert-primary fa-bolt"> // With icon in class name
                        div class="alert alert-info fa-exclamation-circle" // With icon in class name
                        div class="alert alert-warning ion-android-bicycle" // With icon in class name
                        div class="alert alert-error" i class="fa fa-hand-spock-o" // With icon in HTML element
                        div class="alert alert-success" i class="ion-android-checkmark-circle" // With icon in HTML element
                    </code>
                </pre>

                <div class="alert alert-primary fa-bolt">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <strong>Primary color</strong> alert with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>


                <div class="alert alert-info fa-exclamation-circle">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <strong>Info</strong> alert with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <div class="alert alert-warning ion-android-bicycle">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <strong>Warning</strong> alert with <strong>Ionicons icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <div class="alert alert-error">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <i class="fa fa-hand-spock-o"></i> <strong>Error</strong> alert. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                    <p>A list exemple below :</p>
                    <ul>
                        <li><strong>Error 1 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 2 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 3 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                    </ul>
                </div>

                <div class="alert alert-success">
                    <button class="close"><i class="ion-ios-close-outline"></i></button>
                    <i class="ion-android-checkmark-circle"></i>  <strong>Success</strong> alert. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>
            </div>

            <div class="main cc-messages">
                <h3 class="title">Messages</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Default message
                        div class="message message-primary ion-ios-pricetags"
                        div class="message message-info fa-exclamation-circle"
                        div class="message message-warning ion-android-bicycle"
                        div class="message message-error" i class="fa fa-hand-spock-o"
                        div class="message message-success" i class="ion-android-checkmark-circle"
                    </code>
                </pre>

                <div class="message message-primary ion-ios-pricetags">
                    <strong>Primary color</strong> message with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>
                <div class="message message-info fa-exclamation-circle">
                    <strong>Status</strong> message with <strong>FontAwesome icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.<br />Nunc nunc lundium aliquet elementum ac pulvinar proin. Lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <div class="message message-warning ion-android-bicycle">
                    <strong>Warning</strong> message with <strong>Ionicons icon</strong>. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>

                <div class="message message-error">
                    <i class="fa fa-hand-spock-o"></i> <strong>Error</strong> message. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                    <p>A list exemple below :</p>
                    <ul>
                        <li><strong>Error 1 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 2 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                        <li><strong>Error 3 :</strong> Nunc nunc lundium aliquet elementum ac pulvinar proin.</li>
                    </ul>
                </div>

                <div class="message message-success">
                    <i class="ion-android-checkmark-circle"></i>  <strong>Success</strong> message. Nunc nunc lundium aliquet elementum ac pulvinar proin. <a href="#">This is a link</a> lorem et, dapibus, ultricies. Sit mauris cras, ultricies enim ac elementum amet, vel, elementum sagittis.
                </div>
            </div>

            <div class="main cc-badges">
                <h3 class="title">Badges</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Default Badges
                        button span class="badge" // Default color
                        button span class="badge cc-bg-'color'" // Colorized
                        span class="badge fa-'icon'" // Add a fontAwesome icon into the badge
                        span class="badge ion-'icon'" // Add an Ionicons icon into the badge
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
                        Button <span class="badge cc-bg-purple"><i class="ion-ios-pulse-strong"></i> 90 bpm</span>
                    </button>
                    <button class="cc-bg-green cc-thin">
                        Button <span class="badge cc-bg-orange">4</span>
                    </button>
                    <button class="cc-bg-blue cc-fat">
                        <i class="ion-ios-cart-outline"></i> <span class="badge cc-yellow">0 product</span>
                    </button>
                </p>

                <p class="cc-mat-20">
                    <button>
                        Button <span class="badge"><i class="ion-ios-gear"></i></span>
                    </button>
                    <button>
                        Button <span class="badge fa-user"></span>
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
                <h3 class="title">Tabs</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Default Tabs
                        ul class="tabs"
                        -- li a
                        -- li class="active" a
                        .....
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
                    <code class="language-less">
                        // Underlined Tabs
                        ul class="tabs cc-underlined"
                        -- li a
                        -- li class="active" a
                        .....
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


                <pre class="HTML">
                    <code class="language-less">
                        // Centered items
                        ul class="tabs cc-centered"
                    </code>
                </pre>
                <ul class="tabs cc-centered">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>


                <pre class="HTML">
                    <code class="language-less">
                        // Right items
                        ul class="tabs cc-right"
                    </code>
                </pre>
                <ul class="tabs cc-right">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <pre class="HTML">
                    <code class="language-less">
                        // Large & thin items
                        ul class="tabs cc-fat cc-underlined"
                        ul class="tabs cc-thin cc-underlined"
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


                <pre class="HTML">
                    <code class="language-less">
                        // Icons items
                        // Just class "fa-'icon'" the link element
                        li a class="fa-icon" // for FontAwesome icon
                        li a class="ion-icon" // for Ionicons icon

                        // combine with "cc-fat" or "cc-thin" class
                    </code>
                </pre>
                <ul class="tabs">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-fat cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-thin cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <pre class="HTML">
                    <code class="language-less">
                        // Bordered items
                        ul class="tabs cc-bordered"
                    </code>
                </pre>
                <ul class="tabs cc-bordered">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-bordered cc-fat cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-bordered cc-thin cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <pre class="HTML">
                    <code class="language-less">
                        // Full width
                        ul class="tabs cc-stretch cc-bordered" // Combine styles !
                    </code>
                </pre>
                <ul class="tabs cc-stretch cc-bordered">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-stretch cc-bordered cc-fat cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-stretch cc-bordered cc-thin cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <pre class="HTML">
                    <code class="language-less">
                        // Pull items to right
                        ul class="tabs cc-bordered"
                        li class="cc-last" a class="btn cc-bg-red fa-times" // Pulled right
                        // Second exemple
                        ul class="tabs cc-bordered"
                        li class="cc-last" a i class="fa fa-times" // Pulled right
                    </code>
                </pre>
                <ul class="tabs cc-bordered">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li class="cc-last"><a href="#" class="btn cc-bg-red fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-bordered cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li class="cc-last"><a href="#"><i class="fa fa-times"></i> Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <pre class="HTML">
                    <code class="language-less">
                        // Pills items
                        ul class="tabs cc-pills"
                        ul class="tabs cc-pills" li class="cc-last"
                        ul class="tabs cc-pils cc-unchained"
                        ul class="tabs cc-pills cc-fat"
                        ul class="tabs cc-pills cc-thin"
                        ul class="tabs cc-pills cc-stretch"
                        ul class="tabs cc-pills cc-stretch cc-fat"
                        ul class="tabs cc-pills cc-stretch cc-thin"
                        ul class="tabs cc-pills cc-centered"
                        ul class="tabs cc-pills cc-right"
                    </code>
                </pre>
                <ul class="tabs cc-pills ">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li class="cc-last"><a href="#" class="ion-ios-paw">I'm pulled right</a></li>
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
                <ul class="tabs cc-pills cc-fat cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-thin cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-mat-20 cc-stretch">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-mat-20 cc-fat cc-stretch">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-mat-20 cc-thin cc-stretch">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-centered cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-right cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>


                 <pre class="HTML">
                    <code class="language-less">
                        // Responsive
                        class="cc-stretch-t" // Will be stretch on tablet
                        class="cc-pills cc-centered-t" // Will be right on tablet
                        class="cc-bordered cc-right-t" // Will be centered on tablet
                        class="cc-pills cc-unchained cc-stretch-t" // Will be stretch on tablet

                    </code>
                </pre>
                <ul class="tabs cc-stretch-t">
                    <li><a href="#" class="fa-user">This tabs is stretch on tablet !</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-centered-t cc-mat-20">
                    <li><a href="#" class="fa-user">This tabs is centered on tablet !</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-bordered cc-right-t cc-mat-20">
                    <li><a href="#" class="fa-user">This tabs is right on tablet !</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-unchained cc-stretch-t cc-mat-20">
                    <li><a href="#" class="fa-user">Will be stretch on tablet!</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>


                <pre class="HTML">
                    <code class="language-less">
                        // Change main color
                        ul class="tabs cc-'color'"
                    </code>
                </pre>
                <ul class="tabs cc-underlined cc-green">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>

                <ul class="tabs cc-mat-20 cc-green">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-centered cc-green cc-mat-20">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-right cc-green  cc-mat-20">
                    <li><a href="#">Link 1</a></li>
                    <li class="active"><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-bordered cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-stretch cc-bordered cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Link 4</a></li>
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
                <ul class="tabs cc-pills cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-mat-20 cc-stretch cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-centered cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-right cc-green cc-mat-20">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-right cc-green cc-mat-20 cc-stretch cc-fat">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
                <ul class="tabs cc-pills cc-right cc-green cc-mat-20 cc-stretch cc-thin">
                    <li><a href="#" class="fa-user">Link 1</a></li>
                    <li class="active"><a href="#" class="fa-edit">Link 2</a></li>
                    <li><a href="#" class="ion-android-plane">Link 3</a></li>
                    <li><a href="#" class="ion-ios-paw">Nice dog</a></li>
                    <li><a href="#" class="fa-times">Exit!</a></li>
                    <li><a href="#">Link 6</a></li>
                    <li><a href="#">Link 7</a></li>
                </ul>
            </div>
        </section>

        <section class="helpers">
            <header>
                <h2 class="title">Helpers</h2>
                <p class="description">
                    Style for <strong>helpers</strong> and <strong>colors</strong> distributed with ChuckCSS
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-helpers-txt" class="btn cc-bg-red">Texts helpers</a>
                    <a href="#" data-rel="cc-helpers-blocks" class="btn cc-bg-red">Blocks helpers</a>
                    <a href="#" data-rel="cc-colors" class="btn cc-bg-red">Colors</a>
                </p>
            </header>

            <div class="main cc-helpers-txt">
                <h3 class="title">Texts helpers (alignments, paddings, margins, colors)</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Texts alignments
                        * class="cc-txt-left" // Text align left
                        * class="cc-txt-center" // Text align center
                        * class="cc-txt-right" // Text align right
                        * class="cc-txt-justified" // Text align justified

                        // Colors
                        * class="cc-'color'" // Text written in 'color' ('color' must be defined in @aColors array in settings.less file)
                        * class="cc-bg-'color'" // Element has a 'color' background-color ('color' must be defined in @aColors array in settings.less file)

                        // Paddings & margins
                        * class="cc-pa" // Default padding set into settings.less file
                            * class="cc-pat" // If you want only padding-top
                            * class="cc-par" // If you want only padding-right
                            * class="cc-pab" // If you want only padding-bottom
                            * class="cc-pal" // If you want only padding-left
                            * class="cc-pa-'number'" // For a specific padding value, add -'number' to the class (for perfomance reasons, this feature is limited from 0 to 30 and is a multiple of 2)
                            * class="cc-pat-'number'" // For a specific padding-top value, add -'number' to the class (for perfomance reasons, this feature is limited from 0 to 30 and is a multiple of 2)
                            // Also works with cc-par-'number', cc-pab-'number', cc-pal-'number'

                        * class="cc-ma" // Default margin set into settings.less file
                            * class="cc-mat" // If you want only margin-top
                            * class="cc-mar" // If you want only margin-right
                            * class="cc-mab" // If you want only margin-bottom
                            * class="cc-mal" // If you want only margin-left
                            * class="cc-ma-'number'" // For a specific margin value, add -'number' to the class (for perfomance reasons, this feature is limited from 0 to 30 and is a multiple of 2)
                            * class="cc-mat-'number'" // For a specific margin-top value, add -'number' to the class (for perfomance reasons, this feature is limited from 0 to 30 and is a multiple of 2)
                            // Also works with cc-mar-'number', cc-mab-'number', cc-mal-'number'
                    </code>
                </pre>

                <div>
                    <p class="cc-txt-left">I'm a left text !</p>
                    <p class="cc-txt-center">I'm a centered text !</p>
                    <p class="cc-txt-right">I'm a right text !</p>
                    <p class="cc-txt-justify">I'm a justified text ! Bacon ipsum dolor amet alcatra doner bresaola cow turkey ground round picanha short loin corned beef. Beef ribs tail brisket tenderloin pork landjaeger boudin. Meatball ground round tail, chicken pork chop porchetta venison. Boudin jerky fatback sirloin sausage landjaeger pancetta pork chop venison meatball pork belly meatloaf. Leberkas ham hock meatloaf, venison turducken pork loin turkey sausage shoulder tongue. Hamburger strip steak beef biltong.<br />Ham hock strip steak porchetta shoulder ground round jowl bacon capicola shankle sirloin tri-tip. Tongue tenderloin ribeye, andouille pork chop drumstick short ribs chicken pork loin tail filet mignon. Prosciutto frankfurter t-bone, meatloaf pig fatback capicola chuck corned beef bacon. Prosciutto tail filet mignon, pork belly kielbasa beef chicken pork. Ham flank leberkas drumstick hamburger tenderloin spare ribs pork loin bacon picanha tri-tip fatback. Alcatra ribeye bacon pig picanha, landjaeger andouille jerky pork belly cow tri-tip beef ribs. Chicken swine salami turkey frankfurter chuck shankle prosciutto capicola pastrami pig andouille.</p>

                    <p class="cc-blue cc-txt-center">I'm written in blue and centered</p>
                    <p class="cc-bg-blue">I have a blue background-color</p>

                    <p class="cc-pa-10">I have a padding of 10px</p>
                    <p class="cc-pa-16">I have a padding of 16px</p>
                    <p class="cc-ma-6">I have a margin of 5px</p>
                    <p class="cc-mat-22">I have a margin-top of 22px</p>
                    <p class="cc-pa">I have the default padding set in settings.less file</p>
                    <p class="cc-pat">I have the default padding-top set in settings.less file</p>
                    <p class="cc-par">I have the default padding-right set in settings.less file</p>
                    <p class="cc-pab">I have the default padding-bottom set in settings.less file</p>
                    <p class="cc-pal">I have the default padding-left set in settings.less file</p>
                    <p class="cc-ma">I have the default margin set in settings.less file</p>
                    <p class="cc-mat">I have the default margin-top set in settings.less file</p>
                    <p class="cc-mar">I have the default margin-right set in settings.less file</p>
                    <p class="cc-mab">I have the default margin-bottom set in settings.less file</p>
                    <p class="cc-mal">I have the default margin-left set in settings.less file</p>
                    <p class="cc-pal-18">I have a custom padding-left of 18px</p>
                </div>
            </div>

            <div class="main cc-helpers-blocks">
                <h3 class="title">Blocks helpers (alignments, displays...)</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Visibility - Responsive visibility
                        * class="cc-hidden" // I'm hidden
                        * class="cc-block" // I'm shown as a block element
                        * class="cc-inline" // I'm shown as an inline-block element
                        * class="cc-hidden" // I'm hidden on all devices (desktop, tablets, phones)
                        * class="cc-hidden-d" // I'm hidden on desktop only (visible on tablets and less)
                        * class="cc-hidden-t" // I'm hidden on tablet and less
                        * class="cc-hidden-s" // I'm hidden on smartphone
                        * class="cc-s-only" // I'm hidden on tablet and superior (understand "visible on smartphone only")

                        // Clearfix
                        div class="clearfix" // One of few methods for fixing clear of floated elements

                        // Display an element as table (width : 100%)
                        ul class="cc-displayTable" // All its direct children will be displayed as table-cell elements

                        // Create centered containers
                        div class="cc-centered" // This class center the element. You have to combine it with a width class below

                        // PERCENT WIDTH
                            // Numeric width
                            div class="cc-w-10" // "cc-w-X" (From 0 to 100, in %, multiple of 10) : set the element width.

                            // Specific width exceptions (verbose class)
                            "cc-w-quarter" // Set width to 25.00 %
                            "cc-w-third" // Set width to 33.333 %
                            "cc-w-half" // Set width to 50.00% == "cc-w-50"
                            "cc-w-twothird" // Set width to 66.666 %
                            "cc-w-threequarter" // Set width to 75.00 %

                        // FIXED WIDTH
                            // Numeric width
                            div class="cc-w-50px" // "cc-w-Xpx" (X : From 0 to 1500, in px, multiple of 10) : set the element width.

                        // FIXED HEIGHT
                            // Numeric height
                            div class="cc-h-50px" // "cc-h-Xpx" (X : From 0 to 1500, in px, multiple of 10) : set the element height.
                    </code>
                </pre>

                <div>
                    <p class="cc-block cc-pa cc-mat-20 cc-bg-primary">I'm shown as a block element.</p>
                    <p class="cc-inline cc-pa cc-mat-20 cc-bg-primary">I'm shown as an inline-block element.</p>
                    <p class="cc-hidden cc-pa cc-mat-20 cc-bg-primary">Hidden on all devices</p>
                    <p class="cc-hidden-d cc-pa cc-mat-20 cc-bg-primary">Hidden on desktop</p>
                    <p class="cc-hidden-t cc-pa cc-mat-20 cc-bg-primary">Hidden on tablet</p>
                    <p class="cc-hidden-s cc-pa cc-mat-20 cc-bg-primary">Hidden on smartphone</p>
                    <p class="cc-s-only cc-pa cc-mat-20 cc-bg-primary">Shown on phone only !</p>

                    <ul class="cc-displayTable cc-mat-20">
                        <li class="cc-pa cc-bg-green">First li</li>
                        <li class="cc-pa cc-bg-yellow">Second li</li>
                        <li class="cc-pa cc-bg-red">Third li</li>
                    </ul>

                    <div class="cc-centered cc-pa cc-w-quarter cc-mat-20 cc-bg-primary">
                        ".cc-w-quarter cc-centered" -> Yololo ! I have a quarter width (25.00%) and centered
                    </div>
                    <div class="cc-centered cc-pa cc-h-200px cc-w-950px cc-mat-20 cc-bg-primary">
                        "cc-h-200px cc-w-950px cc-centered" -> Yalala ! I have a fixed width of 950px and a fixed height of 200px
                    </div>
                </div>
            </div>

            <div class="main cc-colors">
                <h3 class="title">Colors</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Colors distributed with ChuckCSS
                        div class="cc-bg-primary"
                        div class="cc-bg-green"
                        div class="cc-bg-red"
                        div class="cc-bg-blue"
                        div class="cc-bg-orange"
                        div class="cc-bg-yellow"
                    </code>
                </pre>

                <div class="columns">
                    <div class="column cc-bg-primary cc-pa cc-txt-center">Primary</div>
                    <div class="column cc-bg-green cc-pa cc-txt-center">Green</div>
                    <div class="column cc-bg-red cc-pa cc-txt-center">Red</div>
                    <div class="column cc-bg-blue cc-pa cc-txt-center">Blue</div>
                    <div class="column cc-bg-purple cc-pa cc-txt-center">Purple</div>
                    <div class="column cc-bg-orange cc-pa cc-txt-center">Orange</div>
                    <div class="column cc-bg-yellow cc-pa cc-txt-center">Yellow</div>
                </div>
            </div>
        </section>

        <section class="grids">
            <header>
                <h2 class="title">Grids system</h2>
                <p class="description">
                    Use <strong>grids</strong> with ChuckCSS
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-grids" class="btn cc-bg-red">Grids</a>
                    <a href="#" data-rel="cc-responsive-grids" class="btn cc-bg-red">Responsive Grids</a>
                    <a href="#" data-rel="cc-masonry-grids" class="btn cc-bg-red">Masonry layout</a>
                </p>
            </header>

            <div class="main cc-masonry-grids">
                <h3 class="title">Masonry</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Masonry layout - Moderns browsers only
                        // Change default gap (in px) in settings file
                        div class="columns cc-masonry cc-5 cc-3-t cc-1-s" // RESPONSIVE with "cc-X-t" (tablet) and "cc-X-s" class
                        // NOTE : "cc-masonry" force each column margin. So the use of "cc-no-gutter" class doesn't work with "cc-masonry"
                    </code>
                </pre>
                <div class="columns cc-masonry cc-6 cc-3-t cc-2-s">
                    <?php
                        for ($i=1;$i<25;$i++) {
                            $height = rand(60,350);
                    ?>
                        <div class="column <?php if ($i%2==0) echo 'cc-blue'; else echo 'cc-orange';?>" style="height:<?php echo $height;?>px">
                            I'm <strong>n°<?php echo $i;?></strong> in HTML
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="main cc-responsive-grids">
                <h3 class="title">Responsive grids</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Default
                        div class="columns"
                        -- div class="column cc-3 cc-6-t cc-12-s" // 3 cols on desktop, 6 cols on tablet, 12 cols on smartphone
                        -- div class="column cc-9 cc-6-t cc-12-s" // 9 cols on desktop, 6 cols on tablet, 12 cols on smartphone

                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-6">6</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-blue cc-3 cc-9-t cc-12-s">L3, T9, P12</div>
                    <div class="column cc-orange cc-9 cc-3-t cc-12-s">L9, T3, P12</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-3 cc-9-t cc-12-s">L3, T9, P12</div>
                    <div class="column cc-orange cc-9 cc-3-t cc-12-s">L9, T3, P12</div>
                </div>

                <pre class="HTML">
                    <code class="language-less">
                        // Animated resize
                        div class="columns cc-animated"
                        -- div class="column cc-3 cc-6-t"
                        -- div class="column cc-3 cc-6-t"

                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-6">6</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-animated">
                    <div class="column cc-blue cc-3 cc-9-t cc-12-s">L3, T9, P12</div>
                    <div class="column cc-orange cc-9 cc-3-t cc-12-s">L9, T3, P12</div>
                </div>
                <div class="columns cc-animated cc-no-gutter">
                    <div class="column cc-blue cc-3 cc-9-t cc-12-s">L3, T9, P12</div>
                    <div class="column cc-orange cc-9 cc-3-t cc-12-s">L9, T3, P12</div>
                </div>

                <h3 class="title">Delete Offsets on tablets or phones</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // If you want to delete offset for responsive, just add "cc-no-offset-t" or "cc-no-offset-s"
                        div class="columns"
                        -- div class="column cc-offset-4 cc-4 cc-12-s cc-no-offset-t" // Offset will be canceled for tablet and less
                        -- div class="column cc-offset-4 cc-4 cc-12-s cc-no-offset-s" // Offset will be canceled for smartphone
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-no-offset-t">No offset on tablets</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                    <div class="column cc-blue cc-4">4 (no gutter)</div>
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-no-offset-t">No offset on tablets</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-12-s cc-no-offset-s">No offset on smartphones</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                    <div class="column cc-blue cc-4">4 (no gutter)</div>
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-12-s cc-no-offset-s">No offset on smartphones</div>
                </div>



                <h3 class="title">Offsets adjustements</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // If you want to change offset for responsive, just add "cc-offset-X-t" or "cc-offset-X-s"
                        div class="columns"
                        -- div class="column cc-offset-4 cc-4 cc-offset-2-t" // Offset is 4 on desktop but will be 2 on tablets
                        -- div class="column cc-offset-4 cc-4 cc-offset-6-s" // Offset is 4 on desktop but will be 6 on phones
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-offset-2-t">Offset 2 on tablets</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                    <div class="column cc-blue cc-4">4 (no gutter)</div>
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-offset-2-t">Offset 2 on tablets</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-4">4</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-10-s cc-offset-2-s">Offset 2 on smartphones</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                    <div class="column cc-blue cc-4">4 (no gutter)</div>
                    <div class="column cc-orange cc-4">4 (no gutter)</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-offset-4 cc-4 cc-10-s cc-offset-2-s">Offset 2 on smartphones</div>
                </div>


                <h3 class="title">Positionning</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Change orders on tablets & smartphones
                        div class="columns"
                        -- div class="column cc-4 cc-orange" // Classic - First on Desktop
                        -- div class="column cc-4 cc-blue cc-first-t" // First on Tablet with "cc-first-t" class
                        -- div class="column cc-4 cc-purple cc-first-s" // First on Phone with cc-first-s" class
                        -- div class="column cc-4 cc-blue cc-last-t" // Last on Tablet with "cc-last-t" class
                        -- div class="column cc-4 cc-purple cc-last-s" // Last on Phone with cc-last-s" class
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-12-s cc-4">First on Desktop</div>
                    <div class="column cc-blue cc-12-s cc-4 cc-first-t">First on Tablet</div>
                    <div class="column cc-purple cc-4 cc-12-s cc-first-s">First on Phone</div>

                </div>
                <div class="columns">
                    <div class="column cc-orange cc-12-s cc-4 cc-last-s">Last on Phone</div>
                    <div class="column cc-blue cc-12-s cc-4 cc-last-t">Last on Tablet</div>
                    <div class="column cc-purple cc-12-s cc-4">Last on Desktop</div>
                </div>
            </div>

            <div class="main cc-grids">
                <h3 class="title">Grids 1 - @cols-total</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Simple grid
                        div class="columns"
                        -- div class="column cc-X" // where X is the col width (1 - @cols-total)
                    </code>
                </pre>

                <div class="columns">
                    <div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div>
                </div>
                <div class="columns">
                    <div class="column cc-orange cc-2">2</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-3">3</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-5">5</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-6">6</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-7">7</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-8">8</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-9">9</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-10">10</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-11">11</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-12">12</div>
                </div>

                <h3 class="title">Offsets</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Offsets
                        div class="columns"
                        -- div class="column cc-X cc-offset-Y" // X = col width / Y = offset width
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-1">6 with offset 1</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-2">6 with offset 2</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-3">6 with offset 3</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-4">6 with offset 4</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-5">6 with offset 5</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-offset-6">6 with offset 6</div>
                </div>


                <h3 class="title">Alignements</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Alignments : right, left, center
                        div class="columns"
                        -- div class="column cc-6" // Left alignment (defaut) but you can add a "cc-left" class to override default style
                        -- div class="column cc-6 cc-right" // Right alignment
                        -- div class="column cc-6 cc-center" // Center alignment

                        div class="columns"
                        -- div class="column cc-3 cc-left"
                        -- div class="column cc-4 cc-center"
                        -- div class="column cc-2 cc-right"

                        // Float like alignments
                        div class="columns"
                        -- div class="column cc-w-auto cc-left" // Float left like : add "cc-w-auto" combiend with "cc-right"
                        -- div class="column cc-w-auto cc-right" // Float right like : add "cc-w-auto" combiend with "cc-left"

                        // Reset children margin-top & margin-bottom
                        div class="columns cc-spaceless"
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-left">6 align left</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-right">6 align right</div>
                </div>
                <div class="columns">
                    <div class="column cc-blue cc-6 cc-center">6 align center</div>
                </div>

                <div class="columns">
                    <div class="column cc-blue cc-3 cc-left">3</div>
                    <div class="column cc-blue cc-4 cc-center">4 centered between 3 and 2</div>
                    <div class="column cc-blue cc-2 cc-right">2 right</div>
                </div>

                <div class="columns cc-bg-orange">
                    <div class="column cc-blue cc-w-auto cc-left">auto align left<br />(float:left like)</div>
                    <div class="column cc-blue cc-w-auto cc-right">auto align right<br />(float:right like)</div>
                </div>

                <div class="columns cc-bg-orange cc-spaceless">
                    <div class="column cc-blue cc-w-auto cc-left">auto align left<br />(float:left like)</div>
                    <div class="column cc-blue cc-w-auto cc-right">auto align right<br />(float:right like)</div>
                </div>


                <h3 class="title">Orders</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Orders
                        div class="columns"
                        -- div class="column cc-blue cc-3 cc-last"
                        -- div class="column cc-blue cc-3"
                        -- div class="column cc-blue cc-3 cc-first"
                        -- div class="column cc-blue cc-3"
                    </code>
                </pre>
                <div class="columns">
                    <div class="column cc-blue cc-3 cc-last">Last displayed but first in HTML</div>
                    <div class="column cc-orange cc-3">3</div>
                    <div class="column cc-blue cc-3 cc-first">First displayed but third in HTML</div>
                    <div class="column cc-orange cc-3">3</div>
                </div>


                <h3 class="title">Grids 1 - @cols-total (no gutter)</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Simple grid
                        div class="columns cc-no-gutter"
                    </code>
                </pre>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-2">2</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">3</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-4">4</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-5">5</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-6">6</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-7">7</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-8">8</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-9">9</div>
                    <div class="column cc-blue cc-1">1</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-10">10</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-11">11</div>
                    <div class="column cc-blue cc-1">1</div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-12">12</div>
                </div>


                <h3 class="title">Offsets (no gutters)</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Offsets are auto calculated.. no HTML changes
                        div class="columns cc-no-gutter"
                    </code>
                </pre>
                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div><div class="column cc-orange cc-1">1</div><div class="column cc-blue cc-1">1</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-1">6 with offset 1</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-2">6 with offset 2</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-3">6 with offset 3</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-4">6 with offset 4</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-5">6 with offset 5</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-blue cc-6 cc-offset-6">6 with offset 6</div>
                </div>


                <h3 class="title">Nested grids</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Nested columns into columns
                        div class="columns"
                        -- div class="column columns" // Just have to add "columns"
                    </code>
                </pre>

                <div class="columns cc-gutter">
                    <div class="column cc-orange cc-3">3</div>
                    <div class="column cc-orange cc-9">9</div>
                </div>

                <div class="columns">
                    <div class="column columns cc-blue cc-3">
                        <div class="column cc-orange cc-6">6 in 3</div>
                        <div class="column cc-orange cc-6">6 in 3</div>
                    </div>
                    <div class="column cc-orange cc-9 columns">
                        <div class="column cc-blue cc-4">4 in 9</div>
                        <div class="column cc-blue cc-4">4 in 9</div>
                        <div class="column cc-blue cc-4">4 in 9</div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column cc-orange cc-8">8</div>
                    <div class="column cc-blue cc-4">4</div>
                </div>
                <div class="columns">
                    <div class="columns column cc-orange cc-8">
                        <div class="column cc-blue cc-4 cc-align-self-bottom">4 in 8 .align-self-bottom</div>
                        <div class="column cc-blue ">auto | Ridiculus ridiculus sit! Sit? Parturient placerat! Duis urna quis ac proin, ac lorem nec, cum augue aliquam tristique, est. In adipiscing platea? Sit dignissim.</div>
                        <div class="column cc-blue cc-2 cc-align-self-center">2 in 8 .align-self-center</div>
                    </div>
                    <div class="column columns cc-orange cc-4">
                        <div class="column cc-blue cc-6">6 in 4</div>
                        <div class="column cc-blue cc-6">6 in 4</div>
                    </div>
                </div>

                <h3 class="title">Auto sizes</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Auto size when not @cols-total columns
                        div class="columns"
                        -- div class="column cc-6"
                        -- div class="column" // if no "cc-X" class, the column will fill the remaining space
                    </code>
                </pre>

                <div class="columns">
                    <div class="column cc-blue cc-6">6</div>
                    <div class="column cc-orange">auto</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">3 (no gutter)</div>
                    <div class="column cc-blue">Auto ! (no gutter)</div>
                    <div class="column cc-orange cc-5">5 (no gutter)</div>
                </div>
                <div class="columns">
                    <div class="column cc-orange cc-2">2</div>
                    <div class="column cc-blue">auto</div>
                    <div class="column cc-orange cc-1">1</div>
                    <div class="column cc-blue cc-4">4</div>
                </div>
                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-2">2 no gutter</div>
                    <div class="column cc-blue">auto  no gutter</div>
                    <div class="column cc-orange cc-1">1  no gutter</div>
                    <div class="column cc-blue cc-4">4  no gutter</div>
                </div>


                <h3 class="title">No-Multiligne</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // If content is too large, ChuckCSS auto-wrap content onto a new line !
                        // If you don't want this, add "cc-no-multiligne" to "columns"
                        div class="columns cc-no-multiligne"
                        -- div class="column cc-7"
                        -- div class="column cc-6" // This one is too large (cuz 7+6 > 12 rows) -> but it will be placed on the same line
                    </code>
                </pre>

                <div class="columns cc-no-multiligne">
                    <div class="column cc-blue cc-7">7</div>
                    <div class="column cc-orange cc-6">6 /!\ TOO LARGE</div>
                </div>

                <div class="columns">
                    <div class="column cc-blue cc-5">
                        <div class="columns cc-no-multiligne">
                            <div class="column cc-6 cc-orange">6</div>
                            <div class="column cc-7 cc-orange">7 /!\ too large but on the same line</div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column  cc-orange cc-7">
                        <div class="columns cc-no-multiligne">
                            <div class="column cc-3 cc-blue">3</div>
                            <div class="column cc-3 cc-blue">3</div>
                            <div class="column cc-3 cc-blue">3</div>
                            <div class="column cc-3 cc-blue">3</div>
                            <div class="column cc-3 cc-blue">3 /!\ too large but on the same line</div>
                        </div>
                    </div>
                </div>

                <h3 class="title">Columns reverse</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Reverse columns order
                        div class="columns cc-reverse"
                    </code>
                </pre>
                <div class="columns cc-reverse">
                    <div class="column cc-blue cc-3">First in html</div>
                    <div class="column cc-orange cc-3">Second in html</div>
                    <div class="column cc-blue cc-3">Third in html</div>
                    <div class="column cc-orange cc-3">Fourth in html</div>
                </div>


                <h3 class="title">Justify columns</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Justify columns alignment
                        div class="columns cc-justify-ending" // each column displayed to the main axis end
                        div class="columns cc-justify-centering" // each column displayed to the main axis center
                        div class="columns cc-justify-spacing" // columns are distributed along the main axis, at the start and end line
                        div class="columns cc-justify-equal-spacing" // columns are distributed along the main axis with same space between them
                    </code>
                </pre>
                <div class="columns cc-justify-ending">
                    <div class="column cc-blue cc-3">Ending</div>
                    <div class="column cc-blue cc-3">Ending</div>
                </div>
                <div class="columns cc-justify-centering">
                    <div class="column cc-blue cc-3">Centered</div>
                    <div class="column cc-blue cc-3">Centered</div>
                </div>
                <div class="columns cc-justify-spacing">
                    <div class="column cc-blue cc-3">Spacing on 100% width</div>
                    <div class="column cc-blue cc-5">Spacing on 100% width</div>
                    <div class="column cc-blue cc-3">Spacing on 100% width</div>
                </div>
                <div class="columns cc-justify-equal-spacing">
                    <div class="column cc-blue cc-3">Equal spacing</div>
                    <div class="column cc-blue cc-5">Equal spacing</div>
                    <div class="column cc-blue cc-3">Equal spacing</div>
                </div>

                <h3 class="title">Justify content in a column</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Justify columns alignment
                        div class="columns cc-no-gutter"
                        -- div class="column" // Default : Content will be displayed at the top of the cell
                        -- div class="column cc-align-center" // Content will be displayed at the top of the cell
                        -- div class="column cc-align-bottom" // Content will be displayed at the top of the cell
                    </code>
                </pre>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">
                        <p>
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                        </p>
                    </div>
                    <div class="column cc-blue cc-9">
                        <p>
                            <strong>TOP CONTENT ALIGNMENT</strong><br /><br />
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                        </p>
                    </div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">
                        <p>
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                        </p>
                    </div>
                    <div class="column cc-align-center cc-blue cc-9">
                        <p>
                            <strong>CENTER ALIGNMENT</strong><br /><br />
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                        </p>
                    </div>
                </div>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">
                        <p>
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                        </p>
                    </div>
                    <div class="column cc-align-bottom cc-blue cc-9">
                        <p>
                            <strong>BOTTOM CONTENT ALIGNMENT</strong><br /><br />
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip.
                        </p>
                    </div>
                </div>

                <h3 class="title">Positioning columns</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Positioning columns
                        div class="columns"
                        -- div class="column cc-align-self-top" // Top position
                        -- div class="column cc-align-self-bottom" // Bottom position
                        -- div class="column cc-align-self-center" // Vertical-Center position
                        -- div class="column cc-align-self-stretch" // Take 100% height
                    </code>
                </pre>

                <div class="columns cc-no-gutter">
                    <div class="column cc-orange cc-3">
                        <p>
                            Bacon ipsum dolor amet nisi t-bone meatball tri-tip. Shank ad velit, et corned beef id brisket t-bone incididunt proident tenderloin ground round leberkas spare ribs. In alcatra commodo meatball. Consequat ea frankfurter biltong. Laborum eiusmod pork belly pork chop frankfurter consequat corned beef velit aliqua qui aliquip excepteur pig.
                        </p>
                    </div>
                    <div class="column columns cc-gutter cc-blue cc-9">
                        <div class="column cc-orange cc-align-self-top cc-3">
                            <p>
                                align self top
                            </p>
                        </div>
                        <div class="column cc-orange cc-align-self-bottom cc-3">
                            <p>
                                align self bottom
                            </p>
                        </div>
                        <div class="column cc-orange cc-align-self-center cc-3">
                            <p>
                                align self center
                            </p>
                        </div>
                        <div class="column cc-orange cc-align-self-stretch cc-3">
                            <p>
                                align self stretch
                            </p>
                        </div>
                    </div>
                </div>


                <h3 class="title">Vertical columns</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Positioning columns
                        div class="columns cc-vertical"
                        -- div class="column"
                        -- div class="column"
                        -- div class="column"
                        -- div class="column"
                    </code>
                </pre>

                <div class="columns cc-vertical">
                    <div class="column cc-bg-blue cc-6 cc-offset-2 cc-offset-6-t cc-offset-0-s cc-12-s">
                        Aliquet turpis enim turpis magna quis, sagittis placerat diam platea, dis amet, placerat.
                    </div>
                    <div class="column cc-bg-orange cc-6">
                        Aliquet turpis enim turpis magna quis, sagittis placerat diam platea, dis amet, placerat, et! Dapibus sed ultricies ut lectus et! Ac magnis nec urna ridiculus, augue aenean porttitor sit tincidunt, penatibus sit, adipiscing proin pulvinar mid placerat mid, odio.
                    </div>
                    <div class="column cc-bg-blue">
                        Aliquet turpis enim turpis magna quis, sagittis placerat diam platea, dis amet, placerat, et! Dapibus sed ultricies ut lectus et!
                    </div>
                    <div class="column cc-bg-orange">
                        Aliquet turpis enim turpis magna quis, sagittis placerat diam platea, dis amet, placerat, et! Dapibus sed ultricies ut lectus et! Ac magnis nec urna ridiculus, augue aenean porttitor sit tincidunt...
                    </div>
                </div>

            </div>
        </section>

        <section class="elements">
            <header>
                <h2 class="title">HTML Elements</h2>
                <p class="description">
                    Simple <strong>basics HTML elements</strong>
                </p>
                <p class="description">
                    <a href="#" data-rel="cc-titles" class="btn cc-bg-red">Titles</a>
                    <a href="#" data-rel="cc-paragraphs" class="btn cc-bg-red">Paragraph</a>
                    <a href="#" data-rel="cc-lists" class="btn cc-bg-red">Lists</a>
                    <a href="#" data-rel="cc-blockquotes" class="btn cc-bg-red">blockquotes</a>
                    <a href="#" data-rel="cc-tables" class="btn cc-bg-red">Tables</a>
                    <a href="#" data-rel="cc-forms" class="btn cc-bg-red">Forms</a>
                    <a href="#" data-rel="cc-buttons" class="btn cc-bg-red">Links/Buttons</a>
                    <a href="#" data-rel="cc-images" class="btn cc-bg-red">Images</a>
                    <a href="#" data-rel="cc-loading" class="btn cc-bg-red">Loader</a>
                </p>
            </header>

            <div class="main cc-titles">
                <h3 class="title">Titles Hn</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Hn elements but also works with...
                        p (or other) class="hn-like" // 'n' must be set to 1 - 6 (.h1-like, .h2-like, etc...)
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
                    <code class="language-less">
                        // Colored titles
                        h1 class="cc-blue" // cc-'color' : 'color' must be defined in the array @aColors in settings.less file
                        h2 class="cc-yellow" // cc-'color' : 'color' must be defined in the array @aColors in settings.less file
                    </code>
                </pre>

                <h1 class="cc-blue">Heading 1 - <small>I'm the subtitle</small></h1>
                <h2 class="cc-yellow">Heading 2 - <small>I'm the subtitle</small></h2>

                <h3 class="title">Small titles</h3>
                <pre class="HTML">
                    <code class="language-less">
                        // Subtiles
                        h1 small
                    </code>
                </pre>
                <h1>Heading 1 <small>I'm the subtitle</small></h1>
            </div>

            <div class="main cc-paragraphs">
                <h3 class="title cc-purple">Paragraphs</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // nothing to do...
                        p
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
                    <code class="language-less">
                        // Classical list | Vertical list
                        ul
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
                    <code class="language-less">
                        // Unstyled list
                        ul class="cc-unstyled"
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
                    <code class="language-less">
                        // Horizontal list
                        ul class="cc-horizontal"
                        -- li
                        -- li class="fa-user cc-blue"
                        -- li a class="btn cc-bg-orange ion-ios-contact"
                        -- li class="fa-plug cc-primary icon-right"
                        -- li a class="btn cc-bg-purple ion-ios-contact icon-right"
                    </code>
                </pre>
                <ul class="cc-horizontal">
                    <li>
                        Bacon ipsum
                    </li>
                    <li class="fa-user cc-blue">
                        Short ribs.
                    </li>
                    <li>
                        <a href="#" class="btn cc-bg-orange ion-ios-contact">Contacts</a>
                    </li>
                    <li class="fa-plug cc-primary icon-right">
                        Short ribs ".icon-right"
                    </li>
                    <li>
                        <a href="#" class="btn cc-bg-purple ion-ios-contact icon-right">Contacts ."icon-right"</a>
                    </li>
                </ul>


                <pre class="HTML">
                    <code class="language-less">
                        // Classical list
                        ol
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
                    <code class="language-less">
                        // List with custom fontAwesome or Ionicons list-style
                        // must have the "fa-*" class is the "i" element from FontAwesome (not "fa" but only "fa-icon")
                        // -- OR --
                        // must have the "ion-*" class is the "i" element from Ionicons
                        // cc-'color' : 'color' must be defined in the array @aColors in settings.less file
                        ul
                            -- li class="fa-apple cc-green" // will show a green Apple FontAwesome icon
                            -- li class="fa-facebook cc-red" // will show a red Facebook FontAwesome icon
                            -- li class="fa-twitter cc-blue" // will show a blue Twitter FontAwesome icon
                            -- li class="ion-ionic cc-green" // will show a the Ionicons icon
                            -- li class="ion-paper-airplane cc-red" // will show a red paperplane from Ionicons icon
                            -- li class="ion-nuclear cc-blue" // will show a blue nuclear sign from Ionicons icon
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
                    <code class="language-less">
                        blockquote
                    </code>
                </pre>

                <blockquote>
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                </blockquote>


                <pre class="HTML">
                    <code class="language-less">
                        blockquote
                        -- footer
                    </code>
                </pre>

                <blockquote>
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>


                <pre class="HTML">
                    <code class="language-less">
                        // Quoted blockquote
                        blockquote class="cc-quoted" // Add a 'quote' icon from FontAwesome
                    </code>
                </pre>
                <blockquote class="cc-quoted">
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>


                <pre class="HTML">
                    <code class="language-less">
                        // Colored blockquote
                        blockquote class="cc-quoted cc-purple" // 'quote' icon && purple color !
                    </code>
                </pre>
                <blockquote class="cc-quoted cc-purple">
                    Bacon ipsum dolor amet venison chuck cow picanha tenderloin beef ribs tongue flank short ribs. Meatball ribeye pancetta swine chuck turkey hamburger boudin. Boudin pork belly pancetta turkey bacon tri-tip tail flank jowl kevin filet mignon.
                    <footer>M. Bacon, Pig Company Manager</footer>
                </blockquote>

                <pre class="HTML">
                    <code class="language-less">
                        // Reverse & Colored blockquote
                        blockquote class="cc-reverse cc-quoted cc-purple"
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
                    <code class="language-less">
                        // Classical table
                        table with thead, tbody, tfoot
                        // Responsive tables
                        // By default, on small screens (&lt;768px), tables are displayed as block with a horizontaly scrollbar
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
                    <code class="language-less">
                        // No borders table
                        table class="cc-unbordered"
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
                    <code class="language-less">
                        // Classical table with equals cols
                        table class="cc-equal-cols"
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
                    <code class="language-less">
                        // Classical table with valign 'top'
                        table class="cc-valign-top"
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
                    <code class="language-less">
                        // Bordered table
                        table class="cc-bordered"
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
                    <code class="language-less">
                        // Hovered table
                        table class="cc-hovered"
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
                    <code class="language-less">
                        // Colored && hovered table
                        table class="cc-primary cc-hovered"
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
                    <code class="language-less">
                        // Colored && bordered table
                        table class="cc-primary cc-bordered"
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
                    <code class="language-less">
                        // Rows Striped && hovered table
                        table class="cc-striped cc-hovered"
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
                    <code class="language-less">
                        // Cols striped table
                        table class="cc-striped-col"
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
                    <code class="language-less">
                        // Rows with bgColors
                        table
                        -- tbody
                        ---- tr class="cc-bg-color" // 'color' must be defined in the array @aColors in settings.less file
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

            <div class="main cc-forms active">
                <h3 class="title">Forms</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Label display
                        div class="form-item"
                        -- label (no class = inline-block)
                        -- input type="text"

                        div class="form-item"
                        -- label class="block"
                        -- input type="text"
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <label>Inline label</label>
                        <input type="text" placeholder="placeholder" name="" data-toggle="tooltip" data-placement="top" data-title="Ce champ est obligatoire" />
                    </div>
                    <div class="form-item">
                        <label class="block">Block Label</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                    </div>
                </form>


                <pre class="HTML">
                    <code class="language-less">
                        // Inputs types  - (and textareas)
                        // Default : Form is colored with @primary
                        div class="form-item"
                        -- input type="text"
                        -- input class="error"
                        -- input disabled="disabled"
                        -- input type="number"
                        -- input type="search"
                        -- select
                        -- div class="form-radio"
                        ---- input type="radio"
                        ---- ...
                        -- div class="form-radio block"
                        ---- input type="radio"
                        ---- ...
                        -- div class="form-checkbox"
                        ---- input type="checkbox"
                        ---- ...
                        -- div class="form-checkbox block"
                        ---- input type="checkbox"
                        ---- ...
                        -- textarea

                        // Prefix / Suffix
                        div class="form-item"
                        -- div class="form-ps"
                        ---- span input type="text" span

                        // Chained inputs
                        div class="form-item chained"
                        -- label class="block" // works without class="block" for inline label
                        -- input type="text"
                        -- input type="text"
                        -- ...
                        -- button type="submit"

                        -- button type="submit"
                        -- input type="submit"
                    </code>
                </pre>
                <form>
                    <div class="form-item">
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="text"  placeholder="* mandatory" value="" name="" class="error" />
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
                    </div>
                    <div class="form-item">
                        <textarea name="" placeholder="Your message..."></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-item inline">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item inline">
                        <label>Prefix only</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                        </div>
                    </div>
                    <div class="form-item inline">
                        <label>Suffix only</label>
                        <div class="form-ps">
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>€</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-item chained">
                        <label class="block">Chained inputs</label>
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


                <pre class="HTML">
                    <code class="language-less">
                        // Inline form items
                        div class="form-item inline"
                        // Exemple with inline (first line) & block label (second line)
                    </code>
                </pre>
                <form>
                    <div class="form-item inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item inline">
                        <label class="">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                </form>

                <form>
                    <div class="form-item inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item inline">
                        <label class="block">Your name</label>
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                </form>



                <pre class="HTML">
                    <code class="language-less">
                        // Change your main color
                        form class="cc-purple"
                    </code>
                </pre>

                <form class="cc-purple">
                    <div class="form-item">
                        <input type="text"  placeholder="placeholder" value="" name="" />
                    </div>
                    <div class="form-item">
                        <input type="text"  placeholder="* mandatory" value="" name="" class="error" />
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
                    </div>
                    <div class="form-item">
                        <textarea name="" placeholder="Your message..."></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-item inline">
                        <label>With Prefix and Suffix</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>.00</span>
                        </div>
                    </div>
                    <div class="form-item inline">
                        <label>Prefix only</label>
                        <div class="form-ps">
                            <span>$</span>
                            <input type="text"  placeholder="price" value="" name="" />
                        </div>
                    </div>
                    <div class="form-item inline">
                        <label>Suffix only</label>
                        <div class="form-ps">
                            <input type="text"  placeholder="price" value="" name="" />
                            <span>€</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-item chained">
                        <label class="block">Chained inputs</label>
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="text" placeholder="placeholder" value="" name="" />
                        <input type="submit" value="envoyer" name="" />
                    </div>

                    <div class="form-item">
                        <button type="submit">I'm a submit button</button>
                        <input type="submit" value="I'm a submit input" />
                    </div>
                </form>
            </div>

            <div class="main cc-buttons">
                <h3 class="title">Links / Buttons</h3>

                <pre class="HTML">
                    <code class="language-less">
                        // Default
                        a, a class="btn", button
                    </code>
                </pre>
                <p>
                    <a href="#">Classic link</a>
                    <a href="#" class="btn">Classic link with .btn class</a>
                    <button>Button</button>
                </p>


                <pre class="HTML">
                    <code class="language-less">
                        // Sizes : class="btn" is mandatory for < a /> elements
                        a class="btn cc-thin", a class="btn cc-fat", button class="cc-thin", button class="cc-fat"
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-thin">< a /> .btn.cc-thin</a>
                    <a href="#" class="btn cc-fat">< a /> .btn.cc-fat</a>
                    <button class="cc-thin">Button.cc-thin</button>
                    <button class="cc-fat">Button.cc-fat</button>
                </p>


                <pre class="HTML">
                    <code class="language-less">
                        // Colors
                        a class="cc-primary", a class="cc-blue", a class="cc-red",
                        a class="btn cc-bg-primary", a class="btn cc-bg-blue", a class="btn cc-bg-red",
                        button class="cc-bg-color" // all colors defined in array @aColors (settings.less)
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
                    <code class="language-less">
                        // Outlined : works combined with .btn class on < a > elements
                        a class="btn cc-bg-blue cc-outlined", a class="btn cc-bg-red cc-outlined",
                        button class="cc-bg-color cc-outlined" // all colors defined in array @aColors (settings.less)
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
                    <code class="language-less">
                        // Icons : FontAwesome && Ionicons

                        // Without i element : just add "fa-" or "ion-" class from FontAwesome or Ionicons
                        a class="btn ion-social-chrome", button class="btn fa-times" // must have the class is the "i" element from FontAwesome or Ionicons
                        // With i element
                        a class="btn" i class="fa fa-anchor", button class="btn" i class="fa fa-bug"

                        // Right alignment : just add "icon-right" class to the element
                        a class="btn ion-social-chrome icon-right", button class="fa-times icon-right"
                        a class="btn icon-right" i class="fa fa-anchor", button class="icon-right" i class="fa fa-bug"


                        // Outlined links / buttons with icons : just add "cc-outlined" class
                        // You can combine with "icon-right" class
                        // Without i element
                        a class="btn fa-anchor cc-outlined", button class="btn cc-outlined fa-bug"
                        // With i element
                        a class="btn cc-outlined" i class="fa fa-anchor", button class="btn cc-outlined" i class="fa fa-bug"
                    </code>
                </pre>
                <p>
                    <a href="#" class="btn cc-bg-blue cc-thin ion-social-chrome">Blue link with icon</a>
                    <button class="cc-bg-red cc-thin fa-times">Red button with icon</button>
                    <a href="#" class="btn cc-bg-blue ion-social-chrome">Blue link with icon</a>
                    <button class="cc-bg-red fa-times">Red button with icon</button>
                    <a href="#" class="btn cc-bg-blue cc-fat ion-social-chrome">Blue link with icon</a>
                    <button class="cc-bg-red cc-fat fa-times">Red button with icon</button>
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
                    <a href="#" class="btn cc-bg-green cc-outlined"><i class="ion-social-nodejs"></i> Green link with icon</a>
                    <button class="cc-bg-purple cc-outlined"><i class=" fa fa-bug"></i> Purple button with icon</button>
                    <a href="#" class="btn cc-bg-green cc-outlined icon-right">Green link with icon <i class="ion-social-nodejs"></i></a>
                    <button class="cc-bg-purple cc-outlined icon-right">Purple button with icon <i class=" fa fa-bug"></i></button>
                </p>

                <pre class="HTML">
                    <code class="language-less">
                        // Disabled : works combined with .btn class on < a > elements
                        a class="btn cc-bg-blue cc-disabled", a class="btn cc-bg-red cc-disabled",
                        button class="cc-bg-color cc-disabled" // all colors defined in array @aColors (settings.less)
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
                    <button class="c-outlined cc-bg-green cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-blue cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-purple cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-orange cc-disabled">Button</button>
                    <button class="cc-outlined cc-bg-yellow cc-disabled">Button</button>
                </p>

                <pre class="HTML">
                    <code class="language-less">
                        // Loading buttons / links : works combined with .btn class on < a > elements
                        a class="btn cc-bg-primary cc-loading", a class="btn cc-bg-blue cc-loading", a class="btn cc-bg-red cc-loading",
                        button class="cc-bg-color cc-loading" // all colors defined in array @aColors (settings.less)
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
                    <code class="language-less">
                        // Images responsive
                        // By default, ChuckCSS render images responsive.
                        // If you don't want responsive image, just add class="cc-no-responsive"
                        img class="cc-no-responsive"

                        // Helpers
                        img class="cc-bordered" // Bordered image
                        img class="cc-shadowed" // Shadowed image
                        img class="cc-no-hover" // If you apply a filter, add "cc-no-hover" class to reset filter on hover


                        // Images filters : Work on modern browsers !!!
                        img class="cc-sepia" // Add a sepia filter (CSS3) on this image
                        img class="cc-grayscale" // Add a grayscale filter (CSS3) on this image
                        img class="cc-blur" // Add a blur filter (CSS3) on this image

                        // Apply filters on hover
                        img class="cc-sepia-hover" // Apply the sepia filter on hover
                        img class="cc-grayscale-hover" // Apply the grayscale filter on hover
                        img class="cc-blur-hover" // Apply the blur filter on hover

                        // Reset filter on hover
                        img class="cc-sepia cc-no-hover" // Aply sepia filter, but not on hover
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

                <p class="cc-mat-20 cc-txt-center">
                    Image below has a <strong>sepia filter</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-sepia"/>
                </p>

                <p class="cc-mat-20 cc-txt-center">
                    Image below has a <strong>grayscale filter</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-grayscale"/>
                </p>

                <p class="cc-mat-20 cc-txt-center">
                    Image below has a <strong>blur filter</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-blur"/>
                </p>
                <p class="cc-mat-20 cc-txt-center">
                    Image below has the sepia filter <strong>on hover</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-sepia-hover"/>
                </p>
                <p class="cc-mat-20 cc-txt-center">
                    Image below reset the sepia filter <strong>on hover</strong><br /><br />
                    <img src="http://lorempixel.com/600/300" alt="My alt text" class="cc-no-hover cc-sepia"/>
                </p>
            </div>

            <div class="main cc-loading">
                <h3 class="title">Loader</h3>
                <pre class="HTML">
                    <code class="language-less">
                        div class="cc-loader"
                            -- div class="dot dot-1"
                            -- div class="dot dot-2"
                            -- div class="dot dot-3"
                            ...
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
                    <!-- <div class="dot dot-13"></div>
                    <div class="dot dot-14"></div>
                    <div class="dot dot-15"></div>
                    <div class="dot dot-16"></div>
                    <div class="dot dot-17"></div>
                    <div class="dot dot-18"></div> -->
                </div>
            </div>
        </section>


        <!-- Modals exemples -->
        <div id="modal-id" class="modal">
            <button class="modal-close"></button>

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
                                <div class="column <?php if ($i%2==0) echo 'cc-blue'; else echo 'cc-orange';?>" style="height:<?php echo $height;?>px">
                                    I'm <strong>n°<?php echo $i;?></strong> in HTML
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer cc-txt-center">
                        <button type="submit" class="fa-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-large" class="modal modal-large">
            <button class="modal-close"></button>

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
                        <button type="submit" class="fa-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-small" class="modal modal-small">
            <button class="modal-close"></button>

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
                        <button type="submit"  class="fa-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-long" class="modal">
            <button class="modal-close"></button>

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
                        <button type="submit" class="fa-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal-id-long-fixed-header" class="modal" data-fixed-hf>
            <button class="modal-close"></button>

            <div class="modal-overlay"></div>

            <div class="modal-content">
                <div class="modal-header">
                    I'm a default modal (50% width) with fixed header
                </div>


                <section class="wrap-modal-body">
                    <div class="modal-body">
                        <pre class="HTML">
                            <code class="language-less">&lt;div id="modal-id" class="modal" data-fixed-hf>
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
                    <a href="#" class="btn cc-thin cc-bg-red">Annuler</a>
                </div>

            </div>
        </div>
        <div id="modal-id-no-closable" class="modal" data-disabled-overlay>
            <button class="modal-close"></button>

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
            <button class="modal-close"></button>

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
                    <code class="language-less">
                        // Button in footer
                        &lt;button data-target="modal-id-2" class="modal-open cc-primary"&gt;Open another modal&lt;/button&gt;
                    </code>
                </pre>
                </div>
                <div class="modal-footer cc-txt-center">
                    <button data-target="modal-id-2" class="modal-open cc-primary">Open another modal</button>
                </div>
            </div>
        </div>
        <div id="modal-id-2" class="modal">
            <button class="modal-close"></button>

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
                    <button data-target="modal-id-3" class="modal-open cc-primary">Open another modal</button>
                </div>
            </div>
        </div>
        <div id="modal-id-3" class="modal" data-disabled-overlay>
            <button class="modal-close"></button>

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
