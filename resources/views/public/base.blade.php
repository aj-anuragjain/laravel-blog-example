<!Doctype html>
<html>
    <head>
        <title>@yield("page-title", "Betaroid")</title>
        <link rel="canonical" hreflang="en-us" />

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
        <meta title="viewport" content="width=device-width initial-scale=1.0, maximum-scale=1.0" />
        <meta name="author" content="Anurag Jain" />
        <meta name="robots" content='@yield("meta-robots", "index, follow, noarchive")' />

        {{--meta google and search engine--}}
        <meta name="description" content='@yield("description")' />
        <meta name="keywords" content='@yield("keywords")'/>
        <meta name="title" content='@yield("title")' />

        {{--meta facebook--}}
        <meta property="og:title" content='@yield("title")' />
        <meta property="og:image" content='@yield("og-image")' />
        <meta property="og:url" content='@yield("og-url")' />
        <meta property="og:description" content='@yield("description")' />

        {{--meta twitter--}}
        <meta property="twitter:title" content='@yield("title")' />
        <meta property="twitter:description" content='@yield("description")' />
        <meta property="twitter:image" content='@yield("og-image")' />

        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    </head>
    <body>
        @yield("content")
        <script type="text/javascript" src="/assets/js/vendor.common.js"></script>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </body>
</html>
