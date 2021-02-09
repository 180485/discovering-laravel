
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{('css/app.css')}}">
    <title>@yield('title')</title>
    
<body> 

<header class="row">
    @include('header')
</header>

<div id="main" class="row">

        @yield('content')     
  </div>

<footer class="row">
    @include('footer')
</footer>

</body>
</html>