<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice Management</title>
    <link href="{{ URL::asset('public/css/app.css')}}"  media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{URL::asset('public/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
</head>
<body>
 
<div class="container">
    @yield('content')
</div>
 
</body>
</html>