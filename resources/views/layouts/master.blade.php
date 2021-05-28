<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.meta')
  @include('layouts.headerCss')
</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <x-nav>
            <x-nav-item route="#Services" name="{{ __('global.Services') }}"/>
            <x-nav-item route="#Pricing" name="{{ __('global.Pricing') }}"/>
            <x-nav-item route="#Modules" name="{{ __('global.Modules') }}"/>
            <x-nav-item route="#Aboute" name="{{ __('global.Aboute') }}"/>
          </x-nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->
      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        @yield('content')
      </main>
      <!-- end main -->
    </div>

    @include('partial.footer')
    
    <x-prgoress_indicator/>

    <x-tosts title="Hi there 👋">
      <p>We are glad you joined us <a href="#">Join us</a></p>
    </x-tosts>

    {{-- <x-loader/> --}}

  </div>


  @include('layouts.js')

  

</body>

</html>