<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mueller</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    @include('layouts.landing-page.stylesheet');

</head>


<body id="top">





    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        @include('layouts.landing-page.header');


        <!-- # site-content
        ================================================== -->


        <!-- services
            ----------------------------------------------- -->
        @include('layouts.landing-page.section');


        <!-- # site-footer
        ================================================== -->
        @include('layouts.landing-page.footer');


        <!-- Java Script
    ================================================== -->
        @include('layouts.landing-page.javascript');
</body>

</html>