<!DOCTYPE html>
<html ng-app="Proof">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <script src="lib/js/angular/angular.min.js"></script>
    <script src="lib/js/angular-ui/angular-ui-router.min.js"></script>

    <!-- app -->
    <script src="app/app.js"></script>
    <script src="app/routes.js"></script>

    <!-- notes -->
    <script src="app/notes/controllers.js"></script>
    <script src="app/notes/factory.js"></script>
    <!-- types -->
    <script src="app/types/factory.js"></script>

    <!-- Comunes -->
    <script src="app/commons/services.js"></script>



    <div ui-view></div>

        <!--JQuery -->
        <script src="lib/js/jquery-1.11.2.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="lib/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>
