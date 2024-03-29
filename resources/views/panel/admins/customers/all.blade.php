@extends('panel.admins.layouts.master')
@section('title', __('public.title.title members'))
@section('vendor-css')

    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('content')
    <!-- Users List Table -->
    <div class="card">

        <div class="card-header border-bottom">

            <div class="card-body">
                <div class="form-row">

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="sending_filter" class="col-form-label">@lang('table.Dadatable.search filter')</label>
                            <div id="name-filter"></div>
                        </div>
                    </div>
                </div>
                <div
                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">

                    <div class="dt-buttons">

                        <a href="" class="dt-button add-new btn btn-primary"><i
                                class="bx bx-plus me-0 me-lg-2"></i><span
                                class="d-none d-lg-inline-block">@lang('table.Dadatable.add member')</span></a>
                    </div>
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
                            <th>@lang('table.Dadatable.users.name')</th>
                            <th>@lang('table.Dadatable.users.family')</th>
                            <th>@lang('table.Dadatable.users.father')</th>
                            <th>@lang('table.Dadatable.users.code_meli')</th>
                            <th>@lang('table.Dadatable.users.mobile')</th>
                            <th>@lang('table.Dadatable.users.sex')</th>
                            <th>@lang('table.Dadatable.users.date')</th>
                            <th>@lang('table.Dadatable.users.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->family }}</td>
                                <td>{{ $customer->father }}</td>
                                <td>{{ $customer->code_meli }}</td>
                                <td>{{ $customer->mobile_number }}</td>
                                <td>{{ $customer->sex }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td>ss</td>
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
                    this.api().columns(3).every(function() {
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

    {{-- <script src="{{ asset('assets/
        @endsection
