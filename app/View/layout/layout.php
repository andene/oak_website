<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $this->title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/foundation.min.css" type="text/css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link href="/assets/google-code-prettify/tomorrow-night.css" type="text/css" rel="stylesheet" />


    </head>
    <body onload="prettyPrint()">
        <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WGC93H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGC93H');</script>
<!-- End Google Tag Manager -->

        <div class="menu">
            <div class="row">
                <div class="small-12">
                    <h1><a href="/">Oak Framework</a></h1>
                    <nav class="top-bar" data-topbar data-options="sticky_on: large">
                        @include('partial.menu')
                    </nav>
                </div>
            </div>
        </div>

        <div class="row content-container">
            <div class="small-12 reset">
                {{layout_content}}
            </div>
        </div>

    <div class="row footer">
        @include('partial.footer')
    </div>
<script type="text/javascript" src="/assets/google-code-prettify/prettify.js"></script>
<script src="/assets/google-code-prettify/run_prettify.js"></script>
<script src="/assets/js/main.js"></script>
    </body>
</html>
