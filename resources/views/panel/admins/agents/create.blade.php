@extends('panel.admins.layouts.master')
@section('title', __('public.title.title agent create'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.member add agent')</h5>
        <form class="card-body" action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="fw-normal">1. @lang('public.wizard.base.personal info')</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.base.name') *</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="multicol-first-name"
                        class="form-control" placeholder="جان">
                    <span class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.family') *</label>
                    <input type="text" name="family" value="{{ old('family') }}" id="multicol-last-name"
                        class="form-control" placeholder="اسنو">
                    <span class="error">
                        @error('family')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.father') *</label>
                    <input type="text" name="father" value="{{ old('father') }}" id="multicol-last-name"
                        class="form-control" placeholder="اسنو">
                    <span class="error">
                        @error('father')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name"> @lang('public.wizard.base.code_meli') *</label>
                    <input type="text" name="code_meli" value="{{ old('code_meli') }}" id="multicol-last-name"
                        class="form-control" placeholder="127234567">
                    <span class="error">
                        @error('code_meli')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-email">@lang('public.wizard.base.Email')</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="multicol-email2" dir="ltr">@example.com</span>
                        <input type="text" name="email" value="{{ old('email') }}"id="multicol-email"
                            class="form-control text-start" dir="ltr" placeholder="john.doe" aria-label="john.doe"
                            aria-describedby="multicol-email2">
                    </div>
                    <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.base.sex') *</label>
                    <select id="multicol-country" name="sex" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="male">مرد</option>
                        <option value="female">زن</option>
                    </select>
                    <span class="error">
                        @error('sex')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-phone">@lang('public.wizard.base.mobile') *</label>
                    <input type="text" name="mobile_number" id="multicol-phone"
                        class="form-control phone-mask text-start" dir="ltr" placeholder="658 799 8941"
                        value="{{ old('mobile_number') }}" aria-label="658 799 8941">
                    <span class="error">
                        @error('mobile_number')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-birthdate">@lang('public.wizard.base.birthday')</label>
                    <input type="text" name="birthday" value="{{ old('birthday') }}" id="multicol-birthdate"
                        class="form-control dob-picker" placeholder="YYYY/MM/DD">
                </div>


                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.base.address')</label>
                    <textarea id="basic-default-message" name="address" class="form-control" placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>


            </div>
            <hr class="my-4 mx-n4">
            <h6 class="fw-normal">2. @lang('public.wizard.agent.create agent')</h6>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.agent.a_title') *</label>
                    <select name="subject" id="multicol-country"  class="select2 form-select"
                        data-allow-clear="true">
                        <option value="0" selected="" disabled="">شرکت را انتخاب کنید</option>
                        <option value="1">پاسارگاد</option>
                        <option value="2">ایران</option>
                        <option value="3">آسیا</option>
                        <option value="4">البرز</option>
                        <option value="5">دانا</option>
                        <option value="6">کوثر</option>
                        <option value="7">معلم</option>
                        <option value="8">پارسیان</option>
                        <option value="9">دی</option>
                        <option value="10">ملت</option>
                        <option value="11">کارآفرین</option>
                        <option value="12">سامان</option>
                        <option value="13">ما</option>
                        <option value="14">سینا</option>
                        <option value="15">رازی</option>
                        <option value="16">نوین</option>
                        <option value="17">سرمد</option>
                        <option value="18">آرمان</option>
                        <option value="19">تعاون</option>
                        <option value="20">میهن</option>
                        <option value="21">تجارت نو</option>
                        <option value="22">کارگزاری</option>
                    </select>
                    <span class="error">
                        @error('subject')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_subject')</label>
                    <input type="text" name="title" value="{{ old('title') }}" id="multicol-last-name"
                        class="form-control" placeholder="رضا">
                    <span class="error">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_admin')  *</label>
                    <input type="text" name="management" value="{{ old('management') }}" id="multicol-last-name"
                        class="form-control" placeholder="رضا">
                    <span class="error">
                        @error('management')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.agent_code') *</label>
                    <input type="text" name="agent_code" value="{{ old('agent_code') }}" id="multicol-last-name"
                        class="form-control" placeholder="122***">
                    <span class="error">
                        @error('agent_code')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_history')</label>
                    <input type="text" name="work_history" value="{{ old('work_history') }}" id="multicol-last-name"
                        class="form-control" placeholder="15 سال">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_count')</label>
                    <input type="text" name="apprentice" value="{{ old('area') }}" id="multicol-last-name"
                        class="form-control" placeholder=" سال 15 ">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.agent.a_owner') *</label>
                    <select id="multicol-country" name="is_owner" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="0">مالک هستم</option>
                        <option value="1">مستاجر هستم</option>
                    </select>
                    <span class="error">
                        @error('is_owner')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_phone')</label>
                    <input type="text" name="phone_office" value="{{ old('phone_office') }}" id="multicol-last-name"
                        class="form-control" placeholder="0313*****">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.agent.a_address')</label>
                    <textarea id="basic-default-message" name="address_office" value="{{ old('address_office') }}" class="form-control"
                        placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>
                <div class="col-md-3">
                    <label for="formFile" class="form-label">پروانه کسب</label>
                    <input class="form-control" type="file" name="file" id="formFile" accept=".jpg">
                    <div class="form-text">لطفا پروانه کسب را بصورت jpg آپلود کنید.</div>

                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                    <a href="{{ route('offices.index') }}" class="btn btn-label-secondary">انصراف</a>
                </div>
        </form>
    </div>
@endsection

<script>
    function isChecked(checkbox, sub1) {
        document.getElementById(sub1).disabled = !checkbox.checked;
    }
</script>

@section('vendor-js')

    <script src="{{ asset('assets/panel/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/jdate/jdate.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr-jdate.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/flatpickr/l10n/fa-jdate.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/select2/i18n/fa.js') }}"></script>

@endsection


@section('page-js')
    <script src="{{ asset('assets/panel/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('assets/panel/js/form-wizard-validation.js') }}"></script>

@endsection
