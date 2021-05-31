<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.meta')
  @include('layouts.headerCss')
</head>

<body>
  <div id="wrapper">
    <div id="content">
      @yield('content')
    </div>
  </div>

  <x-prgoress_indicator/>
  

</body>

</html>