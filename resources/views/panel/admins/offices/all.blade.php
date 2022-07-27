@extends('panel.admins.layouts.master')
@section('title', __('public.title.title offices'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('content')

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">جلسه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>مجموع کاربران</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران ویژه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>تحلیل هفته اخیر </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران فعال</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>تحلیل هفته اخیر</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران در انتظار</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>تحلیل هفته اخیر</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card">

        <div class="card-header border-bottom">

            <div class="card-body">
                <div class="form-row">

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="sending_filter" class="col-form-label">@lang('table.Dadatable.search filter jobs')</label>
                            <div id="name-filter"></div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a href="{{ route('users.create') }}" class="btn btn-primary text-white" style="margin-right: 983px;margin-top: -106px">@lang('table.Dadatable.add user')</a>
                </div>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top" id="getUser">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('table.Dadatable.users.share code')</th>
                            <th>@lang('table.Dadatable.offices.title')</th>
                            <th>@lang('table.Dadatable.offices.subject')</th>
                            <th>@lang('table.Dadatable.offices.management')</th>
                            <th>@lang('table.Dadatable.offices.license_number')</th>
                            <th>@lang('table.Dadatable.offices.work_history')</th>
                            <th>@lang('table.Dadatable.users.date')</th>
                            <th>@lang('table.Dadatable.offices.accept')</th>
                            <th>@lang('table.Dadatable.offices.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offices as $key=> $office)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $office->id }}</td>
                                <td>{{ $office->title }}</td>
                                <td>{{ $office->subject }}</td>
                                <td>{{ $office->user->name . ' '.$office->user->family  }}</td>
                                <td>{{ $office->license_number  }}</td>
                                <td>{{ $office->work_history .' '.'سال' }}</td>
                                <td>{{ $office->created_at }}</td>
                                <td>
                                    @if ($office->accept == 'Accept')

                                    {{ 'تائید شد.' }}

                                    @else
                                    {{ 'تائید نشده ' }}
                                    @endif
                                <td>
                                    <div class="dropdown dropdown-inline mr-4">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow show" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu show" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(106px, 27px);">
                                        <a href="{{ route('offices.show' , $office->id ) }}" class="dropdown-item">نمایش</a>
                                        <a href="/" class="dropdown-item" class="bx bx-edit-alt me-1">ویرایش</a>
                                        <a href="/" class="dropdown-item" class="bx bx-trash me-1">حذف</a>

                                      </div>
                                    </div>
                                  </td>
                                {{-- <td>{{ $user->name }}</td> --}}

                                {{-- <td>
                                    @foreach ($user->roles as $role)
                                        {{ $role->persian_name }}
                                    @endforeach
                                </td> --}}
                                {{-- <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.users.edit',$user->id) }}"><i class="bx bx-edit-alt me-1"></i>
                                                ویرایش</a>
                                            <a class="dropdown-item" href="/"><i class="bx bx-trash me-1"></i> حذف</a>

                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
@section('vendor-js')
<script src="{{ asset('assets/panel/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/panel/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
@endsection

@section('page-js')
    <!-- DataTable-->
    <script>
        function deleteCategory(FormID) {
            swal({
                    title: 'از حذف این رکورد مطمئن هستید ؟',
                    text: "اطلاعات حذف شده دیگر قابل بازیابی نیست !",
                    icon: "warning",
                    dangerMode: true,
                    buttons: {
                        confirm: 'بله',
                        cancel: 'خیر'
                    },
                })
                .then(function(willDelete) {
                    if (willDelete) {
                        $('#deleteCategoryForm' + FormID).submit();
                    }
                });
        }
        $(document).ready(function() {
            $('#getUser').DataTable({
                initComplete: function() {
                    this.api().columns(2).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value="">همه</option></select>'
                            )
                            .appendTo($("#name-filter").empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                },
                "pageLength": 10,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Persian.json"
                },
            });
        });
    </script>

    {{-- <script src="{{ asset('assets/panel/js/app-user-list.js') }}"></script> --}}

@endsection
