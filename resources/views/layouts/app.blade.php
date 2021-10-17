<!DOCTYPE html>
<html lang="pt-br">
<head>
  @include('layouts.head')
</head>
<body>

  @yield('content')

  @yield('footer')
  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->

  @include('layouts.js')

  @yield('javascript')
</body>
</html>
