@extends('panel.admins.layouts.master')
@section('title', __('public.title.title office create'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.member edit office')</h5>
        <form class="card-body" action="{{ route('offices.update',$office->user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h6 class="fw-normal"></h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.center.c_title') * </label>
                    <input type="text" name="title" value="{{ old('title',$office->title) }}" id="multicol-first-name"
                        class="form-control" placeholder="باطری ساز">
                    <span class="error">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_admin')</label>
                    <input type="text" name="management" value="{{ old('management',$office->user->name.' '.$office->user->family) }}" id="multicol-last-name"
                        class="form-control" placeholder="رضا" disabled>
                    <span class="error">
                        @error('management')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_license') *</label>
                    <input type="text" name="license_number" value="{{ old('license_number',$office->license_number) }}"
                        id="multicol-last-name" class="form-control" placeholder="122***" >
                    <span class="error">
                        @error('license_number')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_history')</label>
                    <input type="text" name="work_history" value="{{ old('work_history',$office->work_history) }}" id="multicol-last-name"
                        class="form-control" placeholder="سابقه کاری ">
                        <span class="error">
                            @error('work_history')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_area')</label>
                    <input type="text" name="area" value="{{ old('area',$office->area ) }}" id="multicol-last-name"
                        class="form-control" placeholder="متراژ کل مرکز">
                        <span class="error">
                            @error('area')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_apprentice')</label>
                    <input type="text" name="apprentice" value="{{ old('apprentice',$office->apprentice) }}" id="multicol-last-name"
                        class="form-control" placeholder="تعداد شاگرد">
                        <span class="error">
                            @error('apprentice')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.center.c_phone')</label>
                    <input type="text" name="phone_office" value="{{ old('phone_office',$office->phone_office) }}" id="multicol-last-name"
                        class="form-control" placeholder="0313*****">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.center.c_address')</label>
                    <textarea id="basic-default-message" name="address_office" value="{{ old('address_office',$office->address_office) }}" class="form-control"
                        placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_type') *</label>
                    <select id="multicol-country" name="subject" class="select2 form-select" data-allow-clear="true">
                        @foreach ($types as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    <span class="error">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_parking') *</label>
                    <select id="multicol-country" name="is_parking" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="parking">پارکینگ دارم</option>
                        <option value="noParking">پارکینگ ندارم</option>
                    </select>
                    <span class="error">
                        @error('is_parking')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.center.c_owner') *</label>
                    <select id="multicol-country" name="is_owner" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="owner">مالک هستم</option>
                        <option value="noOwner">مستاجر هستم</option>
                    </select>
                    <span class="error">
                        @error('is_owner')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.base.sex') *</label>
                    <select id="multicol-country" name="status" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="0">تائید نشده.</option>
                        <option value="1">تائیدشده. </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="formFile" class="form-label">پروانه کسب</label>
                    <input class="form-control" type="file" name="license_file" id="formFile" accept=".jpg">
                    <div class="form-text">لطفا پروانه کسب را بصورت jpg آپلود کنید.</div>
                    <span class="error">
                        @error('file')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-3">
                    <label for="formFile" class="form-label">عکس مراکز</label>
                    <input class="form-control" type="file" name="image_file" id="formFile" accept=".jpg">
                    <div class="form-text">لطفا پروانه کسب را بصورت jpg آپلود کنید.</div>
                    <span class="error">
                        @error('file')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                    <a href="{{ route('offices.index') }}" class="btn btn-label-secondary">انصراف</a>
                </div>
        </form>
    </div>
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
