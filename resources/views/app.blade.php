<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <style>
           html, body {
               height: 100%;
                               background: url('') no-repeat center center fixed;
           }
                       </style>
</head>
<body>
<div class="container">
	  <a href="{{ action('VehicleController@index') }}">Vehicle</a> |
    <a href="{{ action('Asset_homeController@index') }}">Asset Home</a> |
    <a href="{{ action('StationController@index') }}">Station</a> |
    <a href="{{ action('Gps_unitController@index') }}">Gps Unit</a> |
   </div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
