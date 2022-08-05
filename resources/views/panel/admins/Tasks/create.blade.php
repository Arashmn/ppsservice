@extends('panel.admins.layouts.master')
@section('title', __('public.title.title task  create'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/select2/select2.css') }}">
@endsection
@section('content')
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header" style="text-align: center">@lang('public.title.member accept office')</h5>
        <form class="card-body" action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden"  value="1" name="status">
            <h6 class="fw-normal">1. @lang('public.title.member add accept office')</h6>
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label" for="multicol-country">@lang('public.wizard.task.m_subject') *</label>
                    <select id="multicol-Language" name="office_id" class="select2 form-select" data-allow-clear="true">
                        @foreach ($offices as $office)
                            <option value="{{ $office->id }}">{{ $office->title }}</option>
                        @endforeach
                    </select>
                    <span class="error">
                        @error('office_id')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.task.detail')</label>
                    <textarea id="basic-default-message" name="detail" class="form-control" placeholder="@lang('public.wizard.task.please take detail for accpet')"></textarea>
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
