@extends('panel.admins.layouts.master')
@section('title', __('public.title.title agent marketers'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
@section('content')
<!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header" style="text-align: center">@lang('public.title.member add agent')</h5>
    <form class="card-body" action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-validations/>
        <hr class="my-4 mx-n4">
        <h6 class="fw-normal"></h6>
        <div class="row g-3">
            {{-- <div class="col-md-3">
                <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_admin') *</label>
                <select id="multicol-Language" name="user_id" class="select2 form-select" data-allow-clear="true">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name .' '.$user->family }}</option>
                    @endforeach
                </select>
                <span class="error">
                    @error('user_id')
                        {{ $message }}
                    @enderror
                </span>
            </div> --}}
            {{-- <div class="col-md-3">
                <label class="form-label" for="multicol-country">@lang('public.wizard.agent.a_title')</label>
                <select id="multicol-language" name="subject" class="select2 form-select">
                    @foreach ($companies as $company)
                    <option value="">انتخاب</option>
                    <option value="{{ $company->id }}">{{ $company->name  }}</option>
                    @endforeach

                </select>
            </div> --}}

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
                <label class="form-label" for="multicol-last-name">@lang('public.wizard.agent.a_admin') *</label>
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
</div>
@endsection
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
