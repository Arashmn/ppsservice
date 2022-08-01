@extends('panel.admins.layouts.master')
@section('title', __('public.title.title role create'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.title role create')</h5>
        <form class="card-body" action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="fw-normal">1. @lang('public.wizard.base.personal info')</h6>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.role.name') *</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="multicol-first-name"
                        class="form-control" placeholder="عنوان مقام را به انگلیسی وارد کنید">
                    <span class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-4">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.role.name perisan') *</label>
                    <input type="text" name="persian_name" value="{{ old('persian_name ') }}" id="multicol-last-name"
                        class="form-control" placeholder="عنوان مقام را به  فارسی وارد کنید.">
                    <span class="error">
                        @error('persian_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-4 select2-primary">
                    <label class="form-label" for="multicol-language">@lang('public.wizard.role.permissions') *</label>
                    <select id="multicol-language" class="select2 form-select"  name="permissions[]" multiple>
                        @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->persian_name  }}</option>
                    @endforeach
                    </select>
                    <span class="error">
                        @error('permissions')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-label-secondary">انصراف</a>
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
