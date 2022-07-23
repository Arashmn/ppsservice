@extends('panel.admins.layouts.master')
@section('title', __('public.title.title add'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.register add user')</h5>
        <form class="card-body" action="{{ route('users.store') }}" method="POST">
            @csrf
            <h6 class="fw-normal">1. @lang('public.wizard.base.personal info')</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.base.name') *</label>
                    <input type="text" name="name" id="multicol-first-name" value="{{ old('name') }}" class="form-control" placeholder="جان">
                    <span class="error">@error('name') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.family') *</label>
                    <input type="text" name="family" id="multicol-last-name" value="{{ old('family') }}" class="form-control" placeholder="اسنو">
                    <span class="error">@error('family') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.father') *</label>
                    <input type="text" name="father" id="multicol-last-name"  value="{{ old('father') }}" class="form-control" placeholder="حسین">
                    <span class="error">@error('father') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name"> @lang('public.wizard.base.code_meli') *</label>
                    <input type="text" name="code_meli" id="multicol-last-name"  value="{{ old('code_meli') }}" class="form-control"
                        placeholder="127234567">
                        <span class="error">@error('code_meli') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-email">@lang('public.wizard.base.Email')</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="multicol-email2" dir="ltr">@example.com</span>
                        <input type="text" name="email" id="multicol-email"   value="{{ old('email') }}" class="form-control text-start"
                            dir="ltr" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2">
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
                    <span class="error">@error('sex') {{$message}} @enderror</span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-phone">@lang('public.wizard.base.mobile') *</label>
                    <input type="text" name="mobile_number" id="multicol-phone" value="{{ old('mobile_number') }}" class="form-control phone-mask text-start"
                        dir="ltr" placeholder="658 799 8941" aria-label="658 799 8941">
                        <span class="error">@error('mobile_number') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-birthdate">@lang('public.wizard.base.birthday')</label>
                    <input type="text" name="birthday" id="multicol-birthdate" value="{{ old('birthday') }}" class="form-control dob-picker"
                        placeholder="YYYY/MM/DD">
                </div>

                {{-- <div class="col-md-6">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.base.agent')</label>
                    <select id="multicol-country" name="agent" class="select2 form-select" data-allow-clear="true">
                        @foreach ($agents as $agent)
                        <option value="">انتخاب</option>
                        <option value="{{ $agent->id }}">{{ $agent->management }}</option>
                        @endforeach


                    </select>
                </div> --}}
                <div class="col-md-6 select2-primary">
                    <label class="form-label" for="multicol-language">@lang('public.wizard.base.role')</label>
                    <select id="multicol-language" name="role[]" class="select2 form-select" multiple>
                        @foreach ($roles as $role)
                        <option value="">انتخاب</option>
                        <option value="{{ $role->id }}">{{ $role->persian_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.base.address')</label>
                    <textarea id="basic-default-message" name="address" class="form-control" placeholder="بلوار ...."></textarea>
                </div>


            </div>
            <hr class="my-4 mx-n4">
            <h6 class="fw-normal">2. @lang('public.wizard.car_ins.car info')</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.car_ins.car_name')</label>
                    <input type="text" name="car_name" id="multicol-first-name" value="{{ old('car_name') }}" class="form-control" placeholder=" پژو 206">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.car_year')</label>
                    <input type="text" name="car_year" id="multicol-last-name"  value="{{ old('car_year') }}" class="form-control" placeholder="1387">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.car_tage')</label>
                    <input type="text" name="car_tage" id="multicol-last-name"  value="{{ old('car_tage') }}"  class="form-control" placeholder="114ب14">
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.car_number') *</label>
                    <input type="text" name="car_number" id="multicol-last-name"  value="{{ old('car_number') }}" class="form-control" placeholder="شماره ماشین">
                    <span class="error">@error('car_number') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.car_chassis') *</label>
                    <input type="text" name="car_chassis" id="multicol-last-name" value="{{ old('car_chassis') }}" class="form-control" placeholder="شماره شاسی">
                    <span class="error">@error('car_chassis') {{$message}} @enderror</span>
                </div>
                {{-- ins --}}
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.ins_type')</label>
                    <input type="text"  name="ins_type" id="multicol-last-name" value="{{ old('ins_type') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.ins_company')</label>
                    <input type="text"  name="ins_company" id="multicol-last-name" value="{{ old('ins_company') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.ins_serialNumber') *</label>
                    <input type="text" name="ins_serialNumber" id="multicol-last-name" value="{{ old('ins_serialNumber') }}"class="form-control">
                    <span class="error">@error('ins_serialNumber') {{$message}} @enderror</span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.ins_premium')</label>
                    <input type="text" name="ins_premium" id="multicol-last-name"  value="{{ old('ins_premium') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.car_ins.ins_expire')</label>
                    <input type="text" name="ins_expire" id="multicol-last-name" class="form-control" placeholder="YYYY/MM/DD">
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                <a href="{{ route('users.index') }}"><button type="reset" class="btn btn-label-secondary">انصراف</button></a>
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
