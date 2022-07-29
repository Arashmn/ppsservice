@extends('panel.admins.layouts.master')
@section('title', __('public.title.title office create'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.member add office')</h5>
        <form class="card-body" action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="fw-normal">1. @lang('public.wizard.base.personal info')</h6>
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_type') *</label>
                    <select id="multicol-Language" name="subject" class="select2 form-select" data-allow-clear="true">
                        @foreach ($offices as $office)
                            <option value="{{ $office->id }}">{{ $office->title }}</option>
                        @endforeach
                    </select>
                    <span class="error">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_type') *</label>
                    <select id="multicol-Language" name="subject" class="select2 form-select" data-allow-clear="true">
                        @foreach ($agents as $agent)
                            <option value="{{ $type->id }}">{{ $type->title }}</option>
                        @endforeach
                    </select>
                    <span class="error">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_type') *</label>
                    <select id="multicol-Language" name="dada" class="select2 form-select" data-allow-clear="true">
                        @foreach ($markets as $market)
                            <option value="{{ $market->id }}">{{ $market->title }}</option>
                        @endforeach
                    </select>
                    <span class="error">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.base.sex') *</label>
                    <select id="multicol-country" name="sex" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="male">مورد تایید نیست </option>
                        <option value="male">مورد تایید می باشد</option>
                        <option value="male"> تایید نهایی  شد.</option>
                    </select>
                    <span class="error">
                        @error('sex')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.base.address')</label>
                    <textarea id="basic-default-message" name="address" class="form-control" placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>

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
