<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

        @include('includes.sidebar')
        <div class="wrapper">
            @yield('content')

          
        </div>
        
  @include('includes.footer')
</div>
</body>
</html>