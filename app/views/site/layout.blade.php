<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- CSS
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom -->
    <script src="js/sb-admin-2.js"></script>
</body>
</html>
