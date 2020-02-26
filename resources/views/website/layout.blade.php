<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   
  @section("css")

  @show
   
  
    
</head>
<body > 

@section('header')   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="javascript:void(0)">@yield('heading')</a>
    
  </div>
  @yield('profileinfo')
</nav>
@show
@section('navbar')
@parent    
@show
@section('breadcrumb')
@show

@section('body')
@show
@section('foot')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Copyright &copy;</a>
        </div>
    </nav>
@show
  
  @section('scripts')

  @show
</body>
</html>
