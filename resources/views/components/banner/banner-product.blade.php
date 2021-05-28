@props([
  'id' => '',
  'class' => 'demo_1 banner_section'
])
<section class="{{ $class }}" @if($id) id="{{ $id }}" @endif>
  <div class="container">
    <div class="row justify-content-md-center text-center">
      <div class="col-md-8 col-lg-6">
        <div class="banner_title margin-b-5">
          {{ $slot }}
        </div>
      </div>
      <div class="image_product">
        <img src="{{ asset('assets/img/web-sass.png') }}" alt="" />
      </div>
    </div>
  </div>
</section>