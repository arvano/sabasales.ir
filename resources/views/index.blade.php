@extends('layouts.master')


@section('content')


        <x-banner.banner-product>
           <h1>{{ __('global.THE Perfect WAY TO SELL') }}</h1>
          <p>
            {{ __('global.The SabaSales that makes your sales easy')}}
          </p>
          <button type="button" class="btn scale rounded-pill btn-video btn_video" >
            {{ __('global.try it free') }}
          </button>
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
                  <h3>{{ __('global.Github Sync') }}</h3>
                  <p>
                    {{ __('global.Keep your workflow and sync your docs with GitHub') }}
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
            <img class="title_svg" src="../../assets/img/text.svg" />
            <div id="pinContainer">
              <div class="container">
                <div id="slideContainer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="../../assets/img/02.png" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">Budget</h4>
                              <h4 class="txt2">Overview</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="../../assets/img/03.png" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">Budget</h4>
                              <h4 class="txt2">Overview</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="../../assets/img/04.png" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">Budget</h4>
                              <h4 class="txt2">Overview</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="item_slide panel">
                        <div class="block_img">
                          <img src="../../assets/img/01.png" alt="" />
                          <div class="item__name">
                            <div class="txt">
                              <h4 class="txt1">Budget</h4>
                              <h4 class="txt2">Overview</h4>
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

        <section class="pricing_section options_pricing pricing_demo2 padding-t-12 bg-white position-relative z-index-3"
          id="Pricing">
          <div class="container">
            <div class="blocks_pricing">
              <div class="row">
                <div class="col-md-8 col-lg-3 my-auto mr-auto">
                  <div class="title_sections">
                    <div class="before_title">
                      <span>Pricing</span>
                      <span>Plan</span>
                    </div>
                    <h2>Simple pricing for everyone</h2>
                  </div>
                  <!-- tabs -->
                  <div class="tabs_price mb-4 mb-lg-0">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-month-tab" data-toggle="pill" href="#pills-month"
                          role="tab" aria-controls="pills-month" aria-selected="true">Monthly</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-annual-tab" data-toggle="pill" href="#pills-annual" role="tab"
                          aria-controls="pills-annual" aria-selected="false">Annual</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- content_tabs -->
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-month" role="tabpanel"
                    aria-labelledby="pills-month-tab">
                    <div class="col-12">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <div class="item__price">
                            <h4 class="name_p">Personal</h4>
                            <div class="number">
                              <span class="n_price">0</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per Month</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">
                              Get Started Free</a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="item__price is_best">
                            <h4 class="name_p">Professional</h4>
                            <div class="number">
                              <span class="n_price">49</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per Month</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">
                              Start 14-Days Trial</a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="item__price">
                            <h4 class="name_p">Enterprise</h4>
                            <div class="number">
                              <span class="n_price">129</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per Month</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">Contact With Us</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab">
                    <div class="col-md-12">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <div class="item__price">
                            <h4 class="name_p">Personal</h4>
                            <div class="number">
                              <span class="n_price">25</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per annual</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">
                              Get Started Free</a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="item__price is_best">
                            <h4 class="name_p">Professional</h4>
                            <div class="number">
                              <span class="n_price">39</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per annual</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">
                              Start 14-Days Trial</a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="item__price">
                            <h4 class="name_p">Enterprise</h4>
                            <div class="number">
                              <span class="n_price">95</span>
                              <span class="coins">$</span>
                              <span class="d-block per">Per annual</span>
                            </div>
                            <a href="#" class="btn rounded-8 btn_md_primary btn_tryit">Contact With Us</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- pricing table  -->
              <div class="table_pricing">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <label>User Generted content</label>
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td>Basic CRM features</td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              Unlimited Personal Pipelines
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>Email Power Tools</td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>Advanced Reports</td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>Basic API Access</td>
                            <td></td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <label>Services</label>
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td>Task List</td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              Custom Views
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>Custom Permissions</td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              900+ Integrations (via Zapier)
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>Full API Access</td>
                            <td></td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                            <td>
                              <div class="check_ico">
                                <i class="tio checkmark_circle_outlined"></i>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
                    <span>Frequently Asked</span>
                    <span>Questions</span>
                  </div>
                  <h2>Want to ask something <br />from us?</h2>
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
                            How do I make a yearly payment?
                            <p class="simple_desc">
                              Duis Aute Irure Dolor In Reprehenderit In
                              Voluptate Velit Esse Cillum.
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            Serenity Is Multi-Faceted Blockchain Based
                            Ecosystem, Energy Retailer For The People,
                            Focusing On The Promotion Of Sustainable Living,
                            Renewable Energy Production And Smart Energy Grid
                            Utility Services.
                          </p>
                          <p>
                            We Aim To Become The Incubator For New Renewable
                            Energy-Related Projects By Using The Power Of
                            Crowd.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            Can I have team members on different plans?
                            <p class="simple_desc">
                              Duis Aute Irure Dolor In Reprehenderit In
                              Voluptate Velit Esse Cillum.
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            Serenity Is Multi-Faceted Blockchain Based
                            Ecosystem, Energy Retailer For The People,
                            Focusing On The Promotion Of Sustainable Living,
                            Renewable Energy Production And Smart Energy Grid
                            Utility Services.
                          </p>
                          <p>
                            We Aim To Become The Incubator For New Renewable
                            Energy-Related Projects By Using The Power Of
                            Crowd.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            How this technology works?
                            <p class="simple_desc">
                              Duis Aute Irure Dolor In Reprehenderit In
                              Voluptate Velit Esse Cillum.
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            Serenity Is Multi-Faceted Blockchain Based
                            Ecosystem, Energy Retailer For The People,
                            Focusing On The Promotion Of Sustainable Living,
                            Renewable Energy Production And Smart Energy Grid
                            Utility Services.
                          </p>
                          <p>
                            We Aim To Become The Incubator For New Renewable
                            Energy-Related Projects By Using The Power Of
                            Crowd.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h3 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="true" aria-controls="collapseFour">
                            What is the comunity benefit?
                            <p class="simple_desc">
                              Duis Aute Irure Dolor In Reprehenderit In
                              Voluptate Velit Esse Cillum.
                            </p>
                          </button>
                        </h3>
                      </div>

                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                          <p>
                            Serenity Is Multi-Faceted Blockchain Based
                            Ecosystem, Energy Retailer For The People,
                            Focusing On The Promotion Of Sustainable Living,
                            Renewable Energy Production And Smart Energy Grid
                            Utility Services.
                          </p>
                          <p>
                            We Aim To Become The Incubator For New Renewable
                            Energy-Related Projects By Using The Power Of
                            Crowd.
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
                  <h2>Still need help?</h2>
                  <p>
                    Click on the blue round button at the bottom right corner
                    of this page. You can also email our support team at
                    <a class="c-blue" href="mailto:support@example.com">support@example.com</a>.
                  </p>
                  <button type="button" class="btn rounded-pill btn_md_primary c-white scale ripple bg-blue">
                    Contact With Us
                  </button>
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