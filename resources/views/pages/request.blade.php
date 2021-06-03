@extends('layouts.app')


@section('content')

      <section class="section_account">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 mx-auto">

              <div class="box--signup">
                <div class="title text-center">
                  {{ __('global.Sign up to saba') }}
                </div>
                <div class="other_login">
{{--                   <button type="button" class="btn btn-block scale btn-loin-google">
                    <i class="tio google"></i>
                    {{ __('global.Sign up with Google') }}
                  </button>
                  <div class="line-or">
                    <span class="or">{{ __('global.or') }}</span>
                  </div> --}}
                </div>
                <div class="form-row">
                  <div class="col-12">
                    <div class="row">
                      <form action="{{ route('register.store')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $id }}" name="requestId">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{ __('global.Full name') }}</label>
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('global.Full name') }}" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{ __('global.Phone') }}</label>
                          <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="{{ __('global.Phone') }}" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{ __('global.Email address') }}</label>
                          <input type="email" name="email_address" value="{{ old('email_address') }}" class="form-control @error('email_address') is-invalid @enderror" placeholder="{{ __('global.Email address') }}" />
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>{{ __('global.Company Size') }}</label>
                        <select name="industry" class="form-control custom-select @error('industry') is-invalid @enderror">
                          <option>کمتر از ۵ نفر</option>
                          <option>۵ - ۱۰</option>
                          <option>۱۰ - ۲۰</option>
                          <option>بیش از ۲۰ نفر</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>{{ __('global.Select Company Type') }}</label>
                        <select name="company_size" class="form-control custom-select @error('company_size') is-invalid @enderror">
    <option value="Water">
        آب
    </option>
    <option value="Education">
        آموزش
    </option>
    <option value="Telecommunications">
        ارتباطات از راه دور
    </option>
    <option value="Electronics">
        الکترونیک
    </option>
    <option value="Publishing">
        انتشارات
    </option>
    <option value="Energy">
        انرژی
    </option>
    <option value="Marketing">
        بازار یابی
    </option>
    <option value="Banking">
        بانکداری
    </option>
    <option value="Electric Power">
        برق قدرت
    </option>
    <option value="Creative">
        بنر
    </option>
    <option value="Insurance">
        بیمه
    </option>
    <option value="Biotechnology">
        بیوتکنولوژی
    </option>
    <option value="Support">
        پشتیبانی
    </option>
    <option value="Apparel & Accessories">
        پوشاک و لوازم جانبی
    </option>
    <option value="Advertising">
        تبلیغات
    </option>
    <option value="Testing, Inspection & Certification">
        تست ، بازرسی و صدور گواهینامه
    </option>
    <option value="Television">
        تلویزیون
    </option>
    <option value="Shipping">
        حمل و نقل
    </option>
    <option value="Transportation">
        حمل و نقل
    </option>
    <option value="Service">
        خدمات
    </option>
    <option value="Retail">
        خرده فروشی
    </option>
    <option value="Grocery">
        خواربار
    </option>
    <option value="Automotive">
        خودرو
    </option>
    <option value="Defense">
        دفاع
    </option>
    <option value="Mass Media">
        رسانه های جمعی
    </option>
    <option value="Legal">
        رسمی
    </option>
    <option value="Manufacturing">
        ساخت و تولید
    </option>
    <option value="Construction">
        ساخت و ساز
    </option>
    <option value="Entertainment & Leisure">
        سرگرمی و اوقات فراغت
    </option>
    <option value="Chemical">
        شیمیایی
    </option>
    <option value="Venture Capital">
        صندوق سرمایه‌گذاری جسورانه
    </option>
    <option value="Wholesale">
        عمده فروشی
    </option>
    <option value="Food & Beverage">
        غذا و نوشیدنی
    </option>
    <option value="Culture">
        فرهنگ
    </option>
    <option value="Technology">
        فن آوری
    </option>
    <option value="Aerospace">
        فناوری هوافضا
    </option>
    <option value="Consulting">
        قالب مشاور
    </option>
    <option value="Computer">
        کامپیوتر
    </option>
    <option value="Agriculture">
        کشاورزی
    </option>
    <option value="Finance">
        مالی
    </option>
    <option value="Healthcare">
        مراقبت‌های بهداشتی
    </option>
    <option value="Travel">
        مسافرت
    </option>
    <option value="Real Estate">
        مشاور املاک
    </option>
    <option value="Building Materials & Equipment">
        مصالح ساختمانی و تجهیزات
    </option>
    <option value="Mining">
        معدن
    </option>
    <option value="Architecture">
        معماری
    </option>
    <option value="Hospitality">
        مهمان نوازی
    </option>
    <option value="Music">
        موزیک
    </option>
    <option value="Software">
        نرم‌افزار
    </option>
    <option value="Petroleum">
        نفت خام
    </option>
    <option value="Sports">
        ورزش
    </option>
                        </select>
                      </div>
                    </div>
                      <div class="col-12 terms">
                      </div>
                      <div class="col-12">
                        <button class="btn btn-block mt-3 rounded-6 btn_md_primary c-white bg-blue">
                          {{ __('global.Create Account') }}</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    

@endsection