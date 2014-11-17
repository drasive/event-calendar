<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Dimitri Vranken">
    
    <title>@yield('title') - Cultural Institution</title>
    
    <!-- CSS
    ================================================== -->
    <!-- TODO: Decide on a theme theme to use -->
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/cupertino/jquery-ui.css" rel="stylesheet" />
    <!--<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />-->
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Plugins -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css" rel="stylesheet">
    
    <!-- Custom -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('site.navigation')

        <div id="page-wrapper">
            <!-- Notifications -->
            @include('site.notifications')
            
            <!-- Content -->
            @yield('content')
        </div>
    </div>

    <!-- Scripts
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>  
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>    

    <!-- Custom -->
    <script src="js/sb-admin-2.js"></script>
    
    @yield('scripts')
</body>
</html>
