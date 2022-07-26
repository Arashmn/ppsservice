@extends('panel.admins.layouts.master')
@section('title', __('public.title.title agent marketers'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.member add marketers')</h5>
        <form class="card-body" action="{{ route('marketers.store') }}" method="POST" enctype="multipart/form-data">
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
            <h6 class="fw-normal">2. @lang('public.wizard.marketer.create marketer')</h6>
            <div class="row g-3">
                 <div class="col-md-4">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.base.agent')</label>
                    <select id="multicol-language" name="Identification_code" class="select2 form-select" data-allow-clear="true">
                        @foreach ($agents as $agent)
                        <option value="">انتخاب</option>
                        <option value="{{ $agent->id }}">{{ $agent->management }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-4">
                    <label class="form-label" for="multicol-language">@lang('public.wizard.marketer.a_title')</label>
                    <select id="multicol-country" name="title" class="select2 form-select" data-allow-clear="true">
                        @foreach ($companies as $company)
                        <option value="">انتخاب</option>
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach

                    </select>
                </div>


                <div class="col-md-4">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.marketer.How to contract')</label>
                    <select id="multicol-country" name="subject" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="commission">پور سانتی</option>
                        <option value="contractual">قراردادی</option>
                    </select>

                </div>
                <div class="col-md-4">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.marketer.How to cooperate') *</label>
                    <select id="multicol-country" name="cooperate" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="partTime">پاره وقت </option>
                        <option value="fullTime">تمام وقت</option>
                    </select>
                    <span class="error">
                        @error('cooperate')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_history')</label>
                    <input type="text" name="work_history" value="{{ old('work_history') }}" id="multicol-last-name"
                        class="form-control" placeholder="15 سال">
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
