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
                    <span>Working</span>
                    <span>Process</span>
                  </div>
                  <h2>Our Featured Service that We Provide</h2>
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
                        <span>Step 1</span>
                      </div>
                      <h3>Download our app</h3>
                      <p>
                        Get your blood tests delivered at home collect a
                        sample from the news .
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
                        <span>Step 2</span>
                      </div>
                      <h3>Create a free account</h3>
                      <p>
                        Get your blood tests delivered at home collect a
                        sample from the news .
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
                        <span>Step 3</span>
                      </div>
                      <h3>Now Start your journey</h3>
                      <p>
                        Get your blood tests delivered at home collect a
                        sample from the news .
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
                    <span>Our</span>
                    <span>Services</span>
                  </div>
                  <h2>Our Featured Service that We Provide</h2>
                  <p>
                    Seamlessly see the tasks that need your attention, check
                    when your next meeting is coming up, and keep up with your
                    progress.
                  </p>
                  <ul class="list-group">
                    <li class="list-group-item media border-0">
                      <img src="../../assets/img/icons/note.svg" alt="" />
                      <div class="media-body">
                        List of the tasks that require your attention.
                      </div>
                    </li>
                    <li class="list-group-item media border-0">
                      <img src="../../assets/img/icons/calendar.svg" alt="" />
                      <div class="media-body">
                        Google Calendar integration to see when interruptions
                        will happen.
                      </div>
                    </li>
                    <li class="list-group-item media border-0">
                      <img src="../../assets/img/icons/writing.svg" alt="" />
                      <div class="media-body">
                        Google Drive integration to easy access your docs and
                        files.
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
                  <h2>Product Docs</h2>
                  <p>
                    Beautiful docs for your APIs, Products, FAQs, User Guides,
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
                  <h3>Github Sync</h3>
                  <p>
                    Keep your workflow and sync your docs with GitHub.
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 mx-auto">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon_t">
                    <i class="tio diamond_outlined"></i>
                  </div>
                  <h3>Branding</h3>
                  <p>
                    Keep your workflow and sync your docs with GitHub.
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon_t">
                    <i class="tio robot"></i>
                  </div>
                  <h3>Insights</h3>
                  <p>
                    Keep your workflow and sync your docs with GitHub.
                  </p>
                </div>
              </div>
              <div class="w-100 d-none d-lg-block"></div>
              <div class="col-md-6 col-lg-3 margin-b-5">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon_t">
                    <i class="tio sms_active_outlined"></i>
                  </div>
                  <h3>Comments</h3>
                  <p>
                    Keep your workflow and sync your docs with GitHub.
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 mx-auto">
                <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon_t">
                    <i class="tio timer_20_s"></i>
                  </div>
                  <h3>Infinite History</h3>
                  <p>
                    Keep your workflow and sync your docs with GitHub.
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 margin-b-5 my-auto">
                <div class="item_link" data-aos="fade-up" data-aos-delay="200">
                  <p>
                    Extend GitBook with...
                  </p>
                  <a href="#" class="btn rounded-pill btn_more effect-letter">Learn more</a>
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

        <!-- Start Pricing -->
        <section class="pricing_section padding-py-12" id="Pricing">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections">
                  <div class="before_title">
                    <span>Pricing</span>
                    <span>Plan</span>
                  </div>
                  <h2>What’s our monthly pricing subscription</h2>
                  <!-- toggle switch -->
                  <div class="toggle_switch margin-t-4">
                    <!-- toggle -->
                    <label class="toggler toggler--is-active" id="filt-monthly">Monthly</label>

                    <div class="toggle">
                      <input type="checkbox" id="switcher" class="check" />
                      <b class="b switch"></b>
                    </div>

                    <div class="d-inline-block yearly">
                      <label class="toggler" id="filt-yearly">Yearly</label>
                      <span class="offer rounded-pill">Save 20%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="blocks_pricing" id="monthly">
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/partying_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Personal</h4>
                    <div class="number">
                      <span class="n_price">0</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Free</span>
                    </div>
                    <p class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Basic CRM features
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Unlimited Personal Pipelines
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Email Power Tools
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_md_primary c-white bg-blue">
                        Get Started Free
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="item__price popular">
                    <img class="icon_popular" src="../../assets/img/popular.svg" />

                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/nerd_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Professional</h4>
                    <div class="number">
                      <span class="n_price">49</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per User/Month Billed Annually</span>
                    </div>
                    <p class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Unlimited Shared Pipelines
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Task List
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Views
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Advanced Reports
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Basic API Access
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          900+ Integrations
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_md_primary c-white bg-yollow">
                        Start 14-Days Trial
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/smiling_face_with_sunglasses.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Enterprise</h4>
                    <div class="number">
                      <span class="n_price">129</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per User/Month Billed Annually</span>
                    </div>
                    <p class="info_price">
                      For businesses looking for deep customization and
                      advanced reports
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Permissions
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Required Fields
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Full API Access
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          API/Formulas Support*
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Reports*
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_md_primary c-white bg-orange-red">
                        Contact With Us
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blocks_pricing hide" id="yearly">
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/partying_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Personal</h4>
                    <div class="number">
                      <span class="n_price">25</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per-User/Yearly Billed Annually</span>
                    </div>
                    <p class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Basic CRM features
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Unlimited Personal Pipelines
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Email Power Tools
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_sm_primary c-white bg-blue">
                        Get Started
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="item__price popular">
                    <img class="icon_popular" src="../../assets/img/popular.svg" />

                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/nerd_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Professional</h4>
                    <div class="number">
                      <span class="n_price">39</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per-User/Yearly Billed Annually</span>
                    </div>
                    <p class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Unlimited Shared Pipelines
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Task List
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Views
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Advanced Reports
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Basic API Access
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          900+ Integrations
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_sm_primary c-white bg-yollow">
                        Start 14-Days Trial
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="../../assets/img/gif/smiling_face_with_sunglasses.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Enterprise</h4>
                    <div class="number">
                      <span class="n_price">98</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per-User/Yearly Billed Annually</span>
                    </div>
                    <p class="info_price">
                      For businesses looking for deep customization and
                      advanced reports
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Permissions
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Required Fields
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Full API Access
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          API/Formulas Support*
                        </li>
                        <li class="list-group-item">
                          <i class="tio checkmark_circle_outlined"></i>
                          Custom Reports*
                        </li>
                      </ul>
                      <button type="button" class="btn scale rounded-pill btn_sm_primary c-white bg-orange-red">
                        Contact With Us
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Start Pricing -->

        <!-- Start FAQ -->
        <section class="faq_section">
          <div class="container">
            <div class="padding-t-12" id="faq">
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
                    <div class="col-lg-5">
                      <div class="card">
                        <div class="card-header active" id="headingOne">
                          <h3 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                              aria-expanded="true" aria-controls="collapseOne">
                              How do I make a yearly payment?
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
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                              data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              How this technology works?
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
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                              data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              What is the comunity benefit?
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
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                    <div class="col-lg-5">
                      <div class="card">
                        <div class="card-header" id="headingFive">
                          <h3 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                              data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                              What payment types do you accept?
                            </button>
                          </h3>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>
                              Serenity Is Multi-Faceted Blockchain Based
                              Ecosystem, Energy Retailer For The People,
                              Focusing On The Promotion Of Sustainable Living,
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                        <div class="card-header" id="headingSix">
                          <h3 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix"
                              aria-expanded="true" aria-controls="collapseSix">
                              Website reponse taking time, how to improve?
                            </button>
                          </h3>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>
                              Serenity Is Multi-Faceted Blockchain Based
                              Ecosystem, Energy Retailer For The People,
                              Focusing On The Promotion Of Sustainable Living,
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
                        <div class="card-header" id="headingSeven">
                          <h3 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                              data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                              How to contact with Customer Service?
                            </button>
                          </h3>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>
                              Serenity Is Multi-Faceted Blockchain Based
                              Ecosystem, Energy Retailer For The People,
                              Focusing On The Promotion Of Sustainable Living,
                              Renewable Energy Production And Smart Energy
                              Grid Utility Services.
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
          </div>
        </section>
        <!-- End FAQ -->

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