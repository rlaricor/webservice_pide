<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webservice PIDE</title>

    <!-- Bootstrap core CSS -->
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('bower_components/font-awesome/css/font-awesome.min.css') }}

</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">About</a></li>
                <li role="presentation"><a href="#">Contact</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">WebService</h3>
    </div>

    @yield('content')

    <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
    </footer>

</div>

{{ Html::style('bower_components/jquery/dist/jquery.min.js') }}
{{ Html::style('bower_components/bootstrap/dist/js/bootstrap.min.js') }}

</body>
</html>
