@extends('layouts.app')


@section('content')

<section class="form_signup_one signup_two mt-5">
    <div class="container">
      <div class="row">

        <div class="col-md-7 col-lg-5 mx-auto">
          <div class="item_group">
              <div class="col-12">
                <div class="title_sign">
                  <h2 class="text-center">{{ __('global.register_complete') }}</h2>
                  <p class="text-center">{{ __('global.register_detail') }}</p>
                </div>
              </div>
              
              <div class="col-12">
                <a href="tel:02128425223" class="btn btn-block rounded-pill btn_md_primary c-white scale ripple bg-blue">
                  {{ __('global.call_salse_center') }}
                </a>
              </div>
          </div>

          <!-- Start item_footer -->
          <div class="item_footer text-center margin-t-3">
            <div class="container">
              <p><a href="/" target="_blank">صفحه اصلی سایت</a>
              </p>
            </div>
          </div>
          <!-- End. item_footer -->

        </div>
      </div>

    </div>
  </section>

    

@endsection