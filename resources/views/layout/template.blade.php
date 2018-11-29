<!-- Template base -->
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>@yield('title') | Help Desk</title>

        <script type="text/javascript">
        //<![CDATA[
            try {
                if (!window.CloudFlare) {
                    var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"}, atok: "362a0c061a61c19b2fffa5dce8558598", petok: "83bebd88ab0219e8f63d4137ecd637c6f2059054-1480646939-1800", zone: "adbee.technology", rocket: "0", apps: {"ga_key": {"ua": "UA-49262924-2", "ga_bs": "2"}}}];
                    !function (a, b) {
                        a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d088620b277/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                    }()
                }
            } catch (e) {
            }
            ;
        //]]>
        </script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"/>

        <script src="{{ asset('js/demo-rtl.js') }}"></script>


        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/font-awesome.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/nanoscroller.css') }}"/>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/compiled/theme_styles.css') }}"/>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/dataTables.fixedHeader.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/dataTables.tableTools.css') }}">

        <link rel="stylesheet" href="{{ asset('css/libs/daterangepicker.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/libs/jquery-jvectormap-1.2.2.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/libs/weather-icons.css') }}" type="text/css"/>

        <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
                        <script src="js/html5shiv.js"></script>
                        <script src="js/respond.min.js"></script>
                <![endif]-->
        <script type="text/javascript">
            /* <![CDATA[ */
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-49262924-2']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

            (function (b) {
                (function (a) {
                    "__CF"in b && "DJS"in b.__CF ? b.__CF.DJS.push(a) : "addEventListener"in b ? b.addEventListener("load", a, !1) : b.attachEvent("onload", a)
                })(function () {
                    "FB"in b && "Event"in FB && "subscribe"in FB.Event && (FB.Event.subscribe("edge.create", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "like", a])
                    }), FB.Event.subscribe("edge.remove", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "unlike", a])
                    }), FB.Event.subscribe("message.send", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "send", a])
                    }));
                    "twttr"in b && "events"in twttr && "bind"in twttr.events && twttr.events.bind("tweet", function (a) {
                        if (a) {
                            var b;
                            if (a.target && a.target.nodeName == "IFRAME")
                                a:{
                                    if (a = a.target.src) {
                                        a = a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);
                                        b = 0;
                                        for (var c; c = a[b]; ++b)
                                            if (c.indexOf("url") === 0) {
                                                b = unescape(c.split("=")[1]);
                                                break a
                                            }
                                    }
                                    b = void 0
                                }
                            _gaq.push(["_trackSocial", "twitter", "tweet", b])
                        }
                    })
                })
            })(window);
            /* ]]> */
        </script>
    </head>
    <body>
        <div id="theme-wrapper">

            <!-- Incluindo menu superior --> 
            @include('layout.navbar')

            <div id="page-wrapper" class="container">
                <div class="row">

                    <!-- Incluindo menu lateral -->     
                    @include('layout.sidebar')

                    <div id="content-wrapper">

                        @yield('content')

                        <!-- Incluindo menu rodapé --> 
                        @include('layout.footer')

                    </div>
                </div>
            </div>
        </div>

        <!-- Incluindo javascript --> 
        @include('layout.js') 

    </body>

</html>