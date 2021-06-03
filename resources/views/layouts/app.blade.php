<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.meta')
  @include('layouts.headerCss')
</head>
<body class="" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">


      @yield('content')


  <x-prgoress_indicator/>
  

</body>

</html>