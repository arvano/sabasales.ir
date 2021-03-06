<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.meta')
  @include('layouts.headerCss')

  @if(!env('APP_DEBUG'))
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('MEASUREMENT_ID') }}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', {{ env('MEASUREMENT_ID') }});
  </script>
  @endif
</head>

<body class="bg-pricing_list">
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
            <x-nav-item route="/docs" name="{{ __('global.Help') }}"/>
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

    <x-tosts title="👋">
      <p class="text-center">
اگر در رسیدگی به حساب های مشتریان خود دچار مشکل هستید. اگر پیگیری صحبت های پیشین با مشتریان برای مجموعه شما به یک چالش اساسی تبدیل شده است. اگر برای تهیه گزارش های متنوع از سیستم فروش و بازاریابی دچار مشکل شده اید. کافیست با ما تماس بگیرید.


        <a href="#">اینجا کلیک کنید</a></p>
    </x-tosts>


    <x-loader/>

    @isset($status)
      <x-modal message="$status"/>
    @endisset

  </div>


  @include('layouts.js')

  

</body>

</html>