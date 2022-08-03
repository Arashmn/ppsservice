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
        <form class="card-body" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h6 class="fw-normal">1. @lang('public.wizard.base.personal info')</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">@lang('public.wizard.base.name') *</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" id="multicol-first-name"
                        class="form-control" placeholder="جان">
                    <span class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.family') *</label>
                    <input type="text" name="family" value="{{ old('family', $user->family) }}" id="multicol-last-name"
                        class="form-control" placeholder="اسنو">
                    <span class="error">
                        @error('family')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">@lang('public.wizard.base.father') *</label>
                    <input type="text" name="father" value="{{ old('father', $user->father) }}" id="multicol-last-name"
                        class="form-control" placeholder="اسنو">
                    <span class="error">
                        @error('father')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name"> @lang('public.wizard.base.code_meli') *</label>
                    <input type="text" name="code_meli" value="{{ old('code_meli', $user->code_meli) }}"
                        id="multicol-last-name" class="form-control" placeholder="127234567" disabled>


                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-email">@lang('public.wizard.base.Email')</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="multicol-email2" dir="ltr">@example.com</span>
                        <input type="text" name="email" value="{{ old('email', $user->email) }}"id="multicol-email"
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
                        value="{{ old('mobile_number', $user->mobile_number) }}" aria-label="658 799 8941">
                    <span class="error">
                        @error('mobile_number')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col-md-6 select2-primary">
                    <label class="form-label" for="multicol-language">@lang('public.wizard.role.permissions') *</label>
                    <select id="multicol-language" class="select2 form-select"  name="roles[]" multiple>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ in_array($role->id ,  $user->roles()->pluck('id')->toArray()) ? 'selected': '' }}>{{ $role->persian_name }}</option>
                    @endforeach
                    </select>
                    <span class="error">
                        @error('roles')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-birthdate">@lang('public.wizard.base.birthday')</label>
                    <input type="text" name="birthday" value="{{ old('birthday', $user->birthday) }}"
                        id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY/MM/DD">
                </div>


                <div class="form-password-toggle col-md-6"">
                    <label class="form-label" for="newPassword">@lang('public.wizard.base.password')</label>
                    <div class="input-group input-group-merge">
                        <input class="form-control text-start" dir="ltr" name="password" type="password"
                            id="newPassword" name="newPassword" placeholder="············">
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <span class="error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="form-password-toggle col-md-6">
                    <label class="form-label" for="basic-default-password32">تایید رمز عبور</label>
                    <div class="input-group input-group-merge">
                        <input type="password"  name="password_confirmation"  class="form-control text-start" dir="ltr"
                            id="basic-default-password32" placeholder="············"
                            aria-describedby="basic-default-password">
                        <span class="input-group-text cursor-pointer" id="basic-default-password"><i
                                class="bx bx-hide"></i></span>
                    </div>
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="basic-default-message">@lang('public.wizard.base.address')</label>
                    <textarea id="basic-default-message" name="address" class="form-control" placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="image-input-wrapper">
                            @if ($user->pic == null)
                                <img id="uploadpic" src="{{ asset('assets/panel/img/avatars/blank.png') }}"
                                    alt="" width="120" height="120">
                            @else
                                <img id="uploadpic" src="{{ asset('' . $user->pic) }}" alt="" width="120"
                                    height="120">
                            @endif
                        </div>
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" onchange="loadFile(event)" name="image" hidden
                                    accept=".jpg" />
                            </label>
                            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>

                                <a href="/"><span class="d-none d-sm-block">بازنشانی</span></a>
                            </button>

                            <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                <a href="{{ route('users.index') }}" class="btn btn-label-secondary">انصراف</a>
            </div>
        </form>
    </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            loadFile = function(event) {
                const render = new FileReader();
                render.onload = function() {
                    const output = document.getElementById('uploadpic');
                    output.src = render.result;
                };
                render.readAsDataURL(event.target.files[0]);
            };
        });
    </script>
@endsection


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
