@extends('layouts.master')


@section('content')


        <x-banner.banner-product>
           <h1>{{ __('global.THE Perfect WAY TO SELL') }}</h1>
          <p>
            {{ __('global.The SabaSales that makes your sales easy')}}
          </p>
          <a href="{{ route('register', "60b4b5c2dd5add8ba") }}"  class="btn scale rounded-pill btn-video btn_video" >
            {{ __('global.try it free') }}
          </a>
        </x-banner.banner-product>





        <!-- Start Services -->
        <section class="services_section padding-t-12" id="services">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections">
                  <div class="before_title">
                    <span>{{ __('global.SALES') }}</span>
                    <span>{{ __('global.MORE') }}</span>
                  </div>
                  <h2>{{ __('global.Our Featured Service that We Provide') }}</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="items_serv" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="item-img">
                      <img src="../../assets/img/icons/phone.svg" alt="" />
                    </div>
                    <div class="media-body">
                      <div class="txt-small">
                        <span>{{ __('global.Step 1') }}</span>
                      </div>
                      <h3>{{ __('global.Create a free account') }}</h3>
                      <p>
                        {{ __('global.Get totoaly free') }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="items_serv" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="item-img">
                      <img src="../../assets/img/icons/name.svg" alt="" />
                    </div>
                    <div class="media-body">
                      <div class="txt-small">
                        <span>{{ __('global.Step 2') }}</span>
                      </div>
                      <h3>{{ __('global.setups your env') }}</h3>
                      <p>
                        {{ __('global.manage your env') }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="items_serv" data-aos="fade-up" data-aos-delay="200">
                  <div class="media">
                    <div class="item-img">
                      <img src="../../assets/img/icons/discount.svg" alt="" />
                    </div>
                    <div class="media-body">
                      <div class="txt-small">
                        <span>{{ __('global.Step 3') }}</span>
                      </div>
                      <h3>{{ __('global.get more monay') }}</h3>
                      <p>
                        {{ __('global.get more monay detail') }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Services -->

        <!-- Start Features -->
        <section class="features_section padding-t-12">
          <div class="container">
            <div class="row">
              <!-- text -->
              <div class="col-md-8 col-lg-5">
                <div class="title_sections mb-5 mb-lg-0">
                  <div class="before_title">
                    <span>{{ __('global.Our Services') }}</span>
                  </div>
                  <h2>{{ __('global.Save time make Your Own on design and development') }}</h2>
                  <p>
                    {{ __('global.Set administration') }}
                  </p>
                  <ul class="list-group">
                    <li class="list-group-item media border-0">
                        <i class="tio record_outlined c-blue mr-2"></i>
                      <div class="media-body">
                        {{ __('global.layouts managemanet') }}
                      </div>
                    </li>
                    <li class="list-group-item media border-0">
                        <i class="tio record_outlined c-blue mr-2"></i>
                      <div class="media-body">
                        {{ __('global.modules managemanet') }}
                      </div>
                    </li>
                    <li class="list-group-item media border-0">
                    <i class="tio record_outlined c-blue mr-2"></i>
                      <div class="media-body">
                        {{ __('global.lable managemanet') }}
                      </div>
                    </li>
                                        <li class="list-group-item media border-0">
                    <i class="tio record_outlined c-blue mr-2"></i>
                      <div class="media-body">
                        {{ __('global.report managemanet') }}
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- img -->
              <div class="col-lg-7">
                <div class="images_desc">
                  <img src="../../assets/img/features-product.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features -->

        <!-- Start Section Products -->
        <section class="products_section margin-t-12 padding-py-12" id="Products">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections">
                  <h2>{{ __('global.Product Intro') }}</h2>
                  <p>
                    {{ __('global.Beautiful docs for your APIs') }}
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-3 margin-b-5">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon_t">
                    <i class="tio github"></i>
                  </div>
                  <h3>{{ __('global.Github Sync') }}</h3>
                  <p>
                    {{ __('global.Keep your workflow and sync your docs with GitHub') }}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 mx-auto">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon_t">
                    <i class="tio diamond_outlined"></i>
                  </div>
                  <h3>{{ __('global.Manage leads and deals') }}</h3>
                  <p>
                    {{ __('global.Get more hot leads fed straight') }}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon_t">
                    <i class="tio robot"></i>
                  </div>
                  <h3>{{ __('global.Track communications') }}</h3>
                  <p>
                    {{ __('global.Track communications doc') }}
                  </p>
                </div>
              </div>
              <div class="w-100 d-none d-lg-block"></div>
              <div class="col-md-6 col-lg-3 margin-b-5">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon_t">
                    <i class="tio sms_active_outlined"></i>
                  </div>
                  <h3>{{ __('global.Privacy and security') }}</h3>
                  <p>
                    {{ __('global.Privacy and security detail') }}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 mx-auto">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon_t">
                    <i class="tio timer_20_s"></i>
                  </div>
                  <h3>{{ __('global.Insights and reports') }}</h3>
                  <p>
                    {{ __('global.Insights and reports workflow') }}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 my-auto">
                <div class="item_link" data-aos="fade-up" data-aos-delay="200">
                  <p>
                    {{ __('global.learn book') }}
                  </p>
                  <a href="#" class="btn rounded-pill btn_more">{{ __('global.comminsoom') }}</a>
                </div>
              </div>
            </div>
          </div>

          <!-- hide Header -->
          <div id="triggerForm"></div>
          <!-- End. -->

          <!-- Scroll Horizontal -->
          <div class="Slide_horizontal_scroll">
            <div id="pinContainer">
              <div class="container">
                <div id="slideContainer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="/assets/img/1.jpg" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">??????????????</h4>
                              <h4 class="txt2">Dashboard</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="/assets/img/8.jpg" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">???????? ??????</h4>
                              <h4 class="txt2">WrokFlow</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="/assets/img/2.jpg" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">???????????????</h4>
                              <h4 class="txt2">Account</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="/assets/img/3.jpg" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">???????? ????</h4>
                              <h4 class="txt2">Opportunity</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Scroll Horizontal -->
        </section>
        <!-- End Section Products -->

        <!-- Show Header -->
        <div id="triggerTo"></div>
        <!-- End. -->




      <section class="pricing_section pricing_demo2 pricing_demo3 margin-b-6 mt-5">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections_inner margin-b-5">
                  <h2>???????????? ??????</h2>
                  <!-- Start nav -->
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-annual-tab" data-toggle="pill" href="#pills-annual" role="tab"
                        aria-controls="pills-annual" aria-selected="false">??????????????</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab"
                        aria-controls="pills-month" aria-selected="true">????????????</a>
                    </li>
                  </ul>
                  <!-- End. nav -->
                </div>
              </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab">
                <div class="blocks_pricing">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price border-0">
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/upside_down_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">0</span>
                          <span class="duration">/ ????????????</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#165df5" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#165df5" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ?? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ???????????????? ????
                            </li>
                          </ul>
                          <a href="{{ route('register', '60b4b5c2dd5add8ba') }}" type="button" class="btn btn_md_primary rounded-8 c-white bg-blue">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price popular">
                        <img class="icon_popular" src="../../assets/img/stars.svg" />
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/winking_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">??????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">?????? ????????</span>
                          <span class="duration">/ ??????????</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F28E1C" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#F28E1C" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ???? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ???????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ???????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????????????? ????????????
                            </li>
                          </ul>
                          <a href="{{ route('register', '60b4b69a297254508') }}" class="btn  btn_md_primary rounded-8 c-white bg-yollow">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price border-0">
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/hushed_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">??????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">????????????</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F93542" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#F93542" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ?????????? ?????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????? ?????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????? ??????
                            </li>
                            <li class="list-group-item">
                              ????????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????
                            </li>
                            <li class="list-group-item">
                              ?????? BPI
                            </li>
                            <li class="list-group-item">
                              API ???????????? ????????
                            </li>
                          </ul>
                          <a href="tel:02128425223" class="btn  btn_md_primary rounded-8 c-white bg-red">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                <div class="blocks_pricing">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price border-0">
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/upside_down_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">??</span>
                          <span class="duration">/ ????????????</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#165df5" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#165df5" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ?? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ???????????????? ????
                            </li>
                          </ul>
                          <a href="{{ route('register', '60b4b5c2dd5add8ba') }}" class="btn  btn_md_primary rounded-8 c-white bg-blue">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price popular">
                        <img class="icon_popular" src="../../assets/img/stars.svg" />
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/winking_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">??????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">?????? ????????</span>
                          <span class="duration">/ ??????????</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F28E1C" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#F28E1C" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ???? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ???????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ???????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????????????? ????????????
                            </li>
                          </ul>
                          <a href="{{ route('register', '60b4b69a297254508') }}" class="btn  btn_md_primary rounded-8 c-white bg-yollow">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item__price border-0">
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="../../assets/img/gif/hushed_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">??????????????</h4>
                        <p class="info_price">
                          ???????? ???????????? ???? ???? ?????????? ???? ?????? ???? ???????? CRM ??????????
                        </p>
                        <div class="number">
                          <span class="n_price">????????????</span>
                          <span class="duration"></span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6"
                              d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z"
                              transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F93542" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7"
                              d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z"
                              transform="translate(332.383 2843.002)" fill="#F93542" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              ?????????? ?????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????? ?????????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ?????????? ??????????????
                            </li>
                            <li class="list-group-item">
                              ???????? ??????
                            </li>
                            <li class="list-group-item">
                              ????????????
                            </li>
                            <li class="list-group-item">
                              ???????????? ??????
                            </li>
                            <li class="list-group-item">
                              ?????? BPI
                            </li>
                            <li class="list-group-item">
                              API ???????????? ????????
                            </li>
                          </ul>
                          <a href="{{ route('register', 111) }}" class="btn  btn_md_primary rounded-8 c-white bg-red">
                            ?????? ??????
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



                <section class="faq_section faq_demo5 bg-white padding-py-12 bg-white position-relative z-index-3" id="faq">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections">
                  <div class="before_title">
                    <span>???????????? ????????????</span>
                  </div>
                  <h3>???????? ???????????? ???? ???????? ?????? ???? ?????????? ??????????.</h3>
                </div>
              </div>
            </div>
            <!-- block Collapse -->
            <div class="block_faq">
              <div class="accordion" id="accordionExample">
                <div class="row justify-content-md-center">
                  <div class="col-md-9 col-lg-7">
                    <div class="card">
                      <div class="card-header active" id="headingOne">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                      ?????????? ???? ?????????? ?????????? ???????????? ???? ???????????? ????????

                            <p class="simple_desc">
                              ???????????? ???? ???? ???????? ?????????????? ?? ?????????????? ???? ?????????? ?? ???? ???????? ?????? ???????? ..
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            ???????????? ???? ???? ???????? ?????????????? ?? ?????????????? ???? ?????????? ?? ???? ???????? ?????? ???????? ?????????? ?????????? ???????? ???? ??????. ?????? ???????????????? ???? ?????????????? ???? ?????????? ?????????? ?????????? ???? ???????????? ?????????? ???? ???????????? ???????? ?? ???? ???? ???????? ???????? ???? ???????? ?????????? ???????? ???? ???? ?????? ???????? ???? ?????????? ???? ???????????? ?????????????? ?????????? ???? ???????? ?????????????? ???????? ?????????? ????????.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            ?????? ???? ?????????? ?????????? ?????? ???? ???? ?????? ?????? ????????
                            <p class="simple_desc">
                              ???????? ???????????? ???????? ?????? ???? ?????? ?? ?????? ?????????? ???????? ...
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                                                          ???????? ???????????? ???????? ?????? ???? ?????? ?? ?????? ?????????? ???????? ?? ?????? ???? ?????????? ???????? ???????????? ?? ???????????? ?????????? ???? ???? ???????? ?????? ?? ?????? ???????????? ???????? ????????
                          </p>
                          <p>
                            ?????????????? ???????????? ???????? ?????????? ?????????? ???? ?????? ?? ?????????? ???? ?????????? ???????? ???????? ???? ?????????????????? ?????? ???????? ?????? ???? ????????.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            ?????? ?????????? ?????? ???? ????????
                            <p class="simple_desc">
                              ?????? ?????????? ???????????? ???????????? ???? ?????????? ?????? ???? ???????? ???????????? ???????? ...
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            ?????? ?????????? ???????????? ???????????? ???? ?????????? ?????? ???? ???????? ???????????? ???????? ?????? ???? ?????? ???? ?????????????? ???? ?????? ?????????? ???? ?????? ?? ?????????????????? ?????? ?????????? ?????? ???????????? ?? ???? ???? ?????????? ?????????? ???? ???????????? ?????? ????????. ?????? ?????????????? ?????????????? ???? ?????????? ???? ????????????.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Start Simple Contact -->
        <section class="simplecontact_section padding-py-12">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-6 text-center">
                <div class="title_sections mb-0">
                  <h2>???? ???????????????? ???????????? ???????? ??????????</h2>
                  <p>
                  ???????? ?????? ???????????? ?????????? ???? ???????????? ???? ???? ???????? ?????????????? ???? ???? ???????? ?????????? ?????? ?????????????? ?????? ???? ?????????? ???????? ???? ?????? ???? ???? ?????????? ???????? ???? ?????? ???????? ????????.
                    <a class="c-blue" href="mailto:info@sabasales.com">info@sabasales.com</a>.
                  </p>
                  <a href="tel:02128425223" class="btn rounded-pill btn_md_primary c-white scale ripple bg-blue">
                    ???????? ???? ????
                  </a>
                </div>
              </div>
            </div>
            <!-- <div class="circle-ripple"></div> -->
            <div class="circle-ripple">
              <div class="ripple ripple-1"></div>
              <div class="ripple ripple-2"></div>
              <div class="ripple ripple-3"></div>
            </div>
          </div>
        </section>
        <!-- End Simple Contact -->

@endsection